<?php

//$confidencial = "esto es privado";
//$languaje = "PHP";
//$titulo = "mi titulo";
//view('home', compact('languaje','titulo'));

class HomeController {
	public function indexAction(){
		$view = new View('home', array('titulo'=>'mi titulo de php'));
		$view->execute();
	}

}