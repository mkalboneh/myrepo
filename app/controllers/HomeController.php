<?php

use Facebook\FacebookSession;
use Facebook\FacebookRequest;
use Facebook\GraphUser;
use Facebook\FacebookRequestException;
use Facebook\FacebookRedirectLoginHelper;

class HomeController extends BaseController {

	public function showWelcome()
	{
		return View::make('hello');
	}

	public function authenticate()
	{
		echo "Hello";
		// $session = FacebookSession::setDefaultApplication('342442919241949', 'a2fe98cd32944981c660d759e7e8eb66');
		// // dd($session);
		// $helper = new FacebookRedirectLoginHelper('www.google.com');
		// $loginUrl = $helper->getLoginUrl();
	}

}
