<?php
namespace controllers;
 /**
 * Controller MainController
 * @get("_default","name"=>"Home")
 **/
class MainController extends ControllerBase{

	public function index(){
		
	}

	/**
	 *@route("send/{message}/{who}","methods"=>["get"])
	**/
	public function sendMessage($message,$who='world'){
		
		$this->loadView('MainController/sendMessage.html',compact('message','who'));

	}

}
