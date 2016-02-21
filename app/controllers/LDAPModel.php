<?php
class LDAPModel
{
  private $paginas=array();
  private $numPaginas="";
  private $numPagina="";
/**
   *
   * @global string $DB Conexión base de datos
   * @param int $contId llave primaria de la tabla para obtener la información de un registro
   * @return array devuelve un arreglo con la información del registro obtenido
   */
  public function initLoginLDAPGeneral($user, $password) {

		if($user == "")
			return array('statusCode'=> 7,'statusMessage'=>"BadInput");
		if($password == "")
			return array('statusCode'=> 7,'statusMessage'=>"BadInput");

		$statusCode = 0;
		$message = "Unexecuted Code";
		//UNAL - ORIGINAL CODE - BEGIN
		$ldapHost = "ldap://undirectorio.unal.edu.co";
		$ldapPort = "389";
		$ldapBusqueda ="uid=user_ldap,ou=institucional,o=bogota,o=unal.edu.co";
		$ldapBPassword="consultaldap";
		$identificadorUsuario="uid";
		////Unsetting this line you can find even institutional users
		//$BusquedaAdicional="(employeeType=1)"; //Cadena de busqueda adicional al identificador de usuario, sino se desea un adicional se puede dejar vacio.
		$dn="o=unal.edu.co"; //Base de busqueda del usuario
		$FiltroBaseUsuario=array("dn","cn"); // Datos a ser extraidos del LDAP para el usuario, puede ser extraida inmediatamente cualquier informacion contenida, antes de autenticarse en el directorio

		$User = $user;	//$User ="usuario_autenticado";			// datos tomados de la pagina de autenticacion
		$Pswd = $password;	//$Pswd ="pass_usuario_autenticado";	// datos tomados de la pagina de autenticacion

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
								$_SESSION['logged'] = 1;
								$_SESSION['idLogin'] = $user;
								$_SESSION['name_user'] = $entradas[0]['cn'][0];
								$_SESSION['mail_user'] = $user."@unal.edu.co";
								$statusCode = 1; $message = 'OK';			//Succesfully authenticated!!
							}/*endIf*/else{
								//echo "CLAVE ERRONEA";
								$statusCode = 2; $message = 'BadCredentials';			//User exists, but password is wrong!!
								ldap_close($ldapLink);
								//return 'ERROR_CODE';
							}
					}/*endIf*/else{
						//echo "EL USUARIO NO EXISTE";
						$statusCode = 3; $message = 'NoUser';			//User don't exist!!
					}/*endelse*/
				}/*endIf*/else{
					ldap_close($ldapLink);
					$statusCode = 4; $message = 'NoConnection';			//The connection made to search into LDAP failed.
					//return 'ERROR_CODE';
				}/*endelse*/
			}/*endIf*/else{
				$statusCode = 5; $message = 'BadProtocol';			//LDAP Protocol is wrong selected.
			}/*endelse*/
		}/*endIf*/else{
			$statusCode = 6; $message = 'NoServer';			//Unable to contact server
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
		$ldapBusqueda ="uid=user_ldap,ou=institucional,o=bogota,o=unal.edu.co";
		$ldapBPassword="consultaldap";
		$identificadorUsuario="uid";
		////Unsetting this line you can find even institutional users
		//$BusquedaAdicional="(employeeType=1)"; //Cadena de busqueda adicional al identificador de usuario, sino se desea un adicional se puede dejar vacio.
		$dn="o=unal.edu.co"; //Base de busqueda del usuario
		$FiltroBaseUsuario=array("dn","cn"); // Datos a ser extraidos del LDAP para el usuario, puede ser extraida inmediatamente cualquier informacion contenida, antes de autenticarse en el directorio

		$User = $user;	//$User ="usuario_autenticado";			// datos tomados de la pagina de autenticacion
		$Pswd = $password;	//$Pswd ="pass_usuario_autenticado";	// datos tomados de la pagina de autenticacion
		if($ldapLink = ldap_connect($ldapHost, $ldapPort)) {
			if (ldap_set_option($ldapLink,LDAP_OPT_PROTOCOL_VERSION,3)) {
				$ExitoConBusqueda=@ldap_bind($ldapLink,$ldapBusqueda,$ldapBPassword);
				if ($ExitoConBusqueda) {
					// en un programa decente toca controlar el evento generado (PHP Warning:  ldap_bind(): Unable to bind to server: Invalid credentials ) por php; como esta este es solo de demostracion
					$result = ldap_search($ldapLink,$dn,"(&(".$identificadorUsuario."=".$User.")".$BusquedaAdicional.")", $FiltroBaseUsuario) or die(ldap_error($ldapLink));
					$entradas = ldap_get_entries($ldapLink, $result);
					$nEntradas=ldap_count_entries($ldapLink,$result);

					if ($nEntradas != 0) {
            $statusCode = 1; $message = 'OK'; $name_user = $entradas[0]['cn'][0];			//Succesfully authenticated!!
					}/*endIf*/else{

					//echo "EL USUARIO NO EXISTE";
					$statusCode = 3; $message = 'NoUser';	//User don't exist!!
					}/*endelse*/
				}/*endIf*/else{
				ldap_close($ldapLink);
				$statusCode = 4; $message = 'NoConnection';	//The connection made to search into LDAP failed.
				}/*endelse*/
			}/*endIf*/else{
				$statusCode = 5; $message = 'BadProtocol';			//LDAP Protocol is wrong selected.
			}/*endelse*/
		}/*endIf*/else{
			$statusCode = 6; $message = 'NoServer';			//Unable to contact server
		}/*endelse*/

		//UNAL - ORIGINAL CODE - END

		$results = array('statusCode'=> $statusCode,'statusMessage'=>$message,'name_user'=>$name_user);
		return $results;
	}
}
?>