<?php

class ContactController extends BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /contact
	 *
	 * @return Response
	 */
	public function getIndex()
	{
		return View::make('emails.contact');
	}

	public function postIndex()
	{
		$nombre = Input::get('nombre');
		$email = Input::get('email');
		$comentario = Input::get('comentario');

		//return $nombre . $email . $comentario;

		Mail::send('emails.sendcontact', array('nombre'=> $nombre, 'email' => $email, 'comentario' => $comentario ), function($message){
			$message->to('xthecapx@gmail.com', Input::get('nombre'))->subject('Nuevo contacto RUTAS app');
    		});

		return 'Mail enviado';
	}
}