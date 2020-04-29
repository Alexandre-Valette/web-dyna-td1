<?php
namespace controllers;

class MainController extends ControllerBase{
    /**
     * Controller MainController
     * @get("_default","name"=>"Home")
     **/
	public function index(){
	    $this->loadView("MainController/index.html");
	}

	/**
	 *@route("MainController/contact/{message}","methods"=>["get"])
	 **/
	
	/**
	 *@route("send/{message}/{who}","methods"=>["get"])
	**/
	public function sendMessage($message,$who='world'){
		
		$this->loadView('MainController/sendMessage.html',compact('message','who'));

	}

}
