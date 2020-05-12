<?php
namespace controllers;
 /**
 * Controller InscriptionsController
 **/
class InscriptionsController extends ControllerBase{
    /**
     *
     * @get("_default")
     */
	public function index(){
	    $this->loadView("InscriptionsController/index.html");
	}

	/**
	 *@route("Inscription")
	**/
	public function Inscription(){
		
		$this->loadView('InscriptionsController/Inscription.html');

	}

}
