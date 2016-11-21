<?php

class LoginController extends BaseController {

  private $paginas=array();
  private $numPaginas="";
  private $numPagina="";

  public function getIndex() {
    return View::make('login.index');
  }

  public function postIndex() {
    $FORMuser = $_POST["user"];
    $FORMpass = $_POST["pass"];
    $LDAP = new LoginController;

    $verLDAP = $LDAP->initLoginLDAPGeneral($FORMuser,$FORMpass);

    //return var_dump($verLDAP);
    if($verLDAP['statusMessage'] == 'Usuario Identificado Correctamente') {
      return View::make('index')->with('message',$verLDAP['statusMessage']);
    } else {
      return View::make('login.index')->with('error',$verLDAP['statusMessage']);
    }
  }

  public function logout() {
    Session::flush();
    $verLDAP['statusMessage'] = "Ha finalizado correctamente la sesión";
    return View::make('login.index')->with('message',$verLDAP['statusMessage']);
  }

public function initLoginLDAPGeneral($user, $password) {

    if($user == "")
      return array('statusCode'=> 7,'statusMessage'=>"Debe ingresar el usuario y la contraseña");
    if($password == "")
      return array('statusCode'=> 7,'statusMessage'=>"Debe ingresar el usuario y la contraseña");

    $statusCode = 0;
    $message = "Unexecuted Code";
    //UNAL - ORIGINAL CODE - BEGIN
    $ldapHost = "ldap://undirectorio.unal.edu.co";
    $ldapPort = "389";
    $ldapBusqueda ="uid=APPuser210,ou=services,o=unal.edu.co";
    $ldapBPassword="684VJR7JMXTSPAMA";
    $identificadorUsuario="uid";
    ////Unsetting this line you can find even institutional users
    //$BusquedaAdicional="(employeeType=1)"; //Cadena de busqueda adicional al identificador de usuario, sino se desea un adicional se puede dejar vacio.
    $dn="o=unal.edu.co"; //Base de busqueda del usuario
    $FiltroBaseUsuario=array("dn","cn"); // Datos a ser extraidos del LDAP para el usuario, puede ser extraida inmediatamente cualquier informacion contenida, antes de autenticarse en el directorio

    $User = $user;  //$User ="usuario_autenticado";     // datos tomados de la pagina de autenticacion
    $Pswd = $password;  //$Pswd ="pass_usuario_autenticado";  // datos tomados de la pagina de autenticacion

    if($ldapLink = ldap_connect($ldapHost, $ldapPort)) {
      if (ldap_set_option($ldapLink,LDAP_OPT_PROTOCOL_VERSION,3)) {
        $ExitoConBusqueda=@ldap_bind($ldapLink,$ldapBusqueda,$ldapBPassword);
        if ($ExitoConBusqueda) {
          // en un programa decente toca controlar el evento generado (PHP Warning:  ldap_bind(): Unable to bind to server: Invalid credentials ) por php; como esta este es solo de demostracion
          //$result = ldap_search($ldapLink,$dn,"(&(".$identificadorUsuario."=".$User.")".$BusquedaAdicional.")", $FiltroBaseUsuario) or die( ldap_error($ldapLink) );
          $result = ldap_search($ldapLink,$dn,"(&(".$identificadorUsuario."=".$User.")".")", $FiltroBaseUsuario) or die( ldap_error($ldapLink) );

          $entradas = ldap_get_entries($ldapLink, $result);
          $nEntradas=ldap_count_entries($ldapLink,$result);

          if ($nEntradas != 0){
            //echo $identificadorUsuario."=".$User.$entradas;
            //echo "Cantidad de Resultados ".$nEntradas."\n";
            //echo $entradas[0]["dn"];
              $ExitoConAut=@ldap_bind($ldapLink,$entradas[0]["dn"],$Pswd);
              if ($ExitoConAut){
                // en un programa decente toca controlar el evento generado (PHP Warning:  ldap_bind(): Unable to bind to server: Invalid credentials ) por php; como esta este es solo de demostracion
                //echo "INICIA SESIÓN";
                Session::put('logged', true);
                Session::put('idLogin', $user);
                Session::put('name_user', $entradas[0]['cn'][0]);
                Session::put('mail_user', $user."@unal.edu.co");
                /*$_SESSION['logged'] = 1;
                $_SESSION['idLogin'] = $user;
                $_SESSION['name_user'] = $entradas[0]['cn'][0];
                $_SESSION['mail_user'] = $user."@unal.edu.co";*/
                $statusCode = 1; $message = 'Usuario Identificado Correctamente';     //Succesfully authenticated!!
              }/*endIf*/else{
                //echo "CLAVE ERRONEA";
                $statusCode = 2; $message = 'Contraseña Incorrecta';     //User exists, but password is wrong!!
                ldap_close($ldapLink);
                //return 'ERROR_CODE';
              }
          }/*endIf*/else{
            //echo "EL USUARIO NO EXISTE";
            $statusCode = 3; $message = 'El usuario no existe';     //User don't exist!!
          }/*endelse*/
        }/*endIf*/else{
          ldap_close($ldapLink);
          $statusCode = 4; $message = 'Sin conexión a Internet';     //The connection made to search into LDAP failed.
          //return 'ERROR_CODE';
        }/*endelse*/
      }/*endIf*/else{
        $statusCode = 5; $message = 'BadProtocol';      //LDAP Protocol is wrong selected.
      }/*endelse*/
    }/*endIf*/else{
      $statusCode = 6; $message = 'NoServer';     //Unable to contact server
    }/*endelse*/
    //UNAL - ORIGINAL CODE - END
    return array('statusCode'=> $statusCode,'statusMessage'=>$message);
  }

  public function verficarUsuarioLDAP($user) {
    if($user == "") return array('statusCode'=> 7,'statusMessage'=>"BadInput");

    $statusCode = 0;
    $message = "Unexecuted Code";

    //UNAL - ORIGINAL CODE - BEGIN
    $ldapHost = "ldap://undirectorio.unal.edu.co";
    $ldapPort = "389";
    $ldapBusqueda ="uid=APPuser210,ou=services,o=unal.edu.co";
    $ldapBPassword="684VJR7JMXTSPAMA";
    $identificadorUsuario="uid";
    ////Unsetting this line you can find even institutional users
    //$BusquedaAdicional="(employeeType=1)"; //Cadena de busqueda adicional al identificador de usuario, sino se desea un adicional se puede dejar vacio.
    $dn="o=unal.edu.co"; //Base de busqueda del usuario
    $FiltroBaseUsuario=array("dn","cn"); // Datos a ser extraidos del LDAP para el usuario, puede ser extraida inmediatamente cualquier informacion contenida, antes de autenticarse en el directorio

    $User = $user;  //$User ="usuario_autenticado";     // datos tomados de la pagina de autenticacion
    $Pswd = $password;  //$Pswd ="pass_usuario_autenticado";  // datos tomados de la pagina de autenticacion
    if($ldapLink = ldap_connect($ldapHost, $ldapPort)) {
      if (ldap_set_option($ldapLink,LDAP_OPT_PROTOCOL_VERSION,3)) {
        $ExitoConBusqueda=@ldap_bind($ldapLink,$ldapBusqueda,$ldapBPassword);
        if ($ExitoConBusqueda) {
          // en un programa decente toca controlar el evento generado (PHP Warning:  ldap_bind(): Unable to bind to server: Invalid credentials ) por php; como esta este es solo de demostracion
          $result = ldap_search($ldapLink,$dn,"(&(".$identificadorUsuario."=".$User.")".$BusquedaAdicional.")", $FiltroBaseUsuario) or die(ldap_error($ldapLink));
          $entradas = ldap_get_entries($ldapLink, $result);
          $nEntradas=ldap_count_entries($ldapLink,$result);

          if ($nEntradas != 0) {
            $statusCode = 1; $message = 'Usuario Identificado Correctamente'; $name_user = $entradas[0]['cn'][0];     //Succesfully authenticated!!
          }/*endIf*/else{

          //echo "EL USUARIO NO EXISTE";
          $statusCode = 3; $message = 'El usuario no existe'; //User don't exist!!
          }/*endelse*/
        }/*endIf*/else{
        ldap_close($ldapLink);
        $statusCode = 4; $message = 'Sin conexión a Internet'; //The connection made to search into LDAP failed.
        }/*endelse*/
      }/*endIf*/else{
        $statusCode = 5; $message = 'BadProtocol';      //LDAP Protocol is wrong selected.
      }/*endelse*/
    }/*endIf*/else{
      $statusCode = 6; $message = 'NoServer';     //Unable to contact server
    }/*endelse*/

    //UNAL - ORIGINAL CODE - END

    $results = array('statusCode'=> $statusCode,'statusMessage'=>$message,'name_user'=>$name_user);
    return $results;
  }
}