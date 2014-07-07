<?php

//$titulo = "mi titulo";
//view('contactos',compact('titulo'));
class ContactosController {
	public function indexAction(){

	}

	public function ciudadAction($ciudad){
		exit('contactos'.$ciudad);
	}
}