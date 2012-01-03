<?php

class IndexController extends Zend_Controller_Action
{

	public function init()
	{
		/* Initialize action controller here */
		$response = $this -> getResponse ();
		$response -> insert ('nav', $this-> view -> render('index/nav.phtml'));
		$response -> insert ('leftsider', $this-> view -> render('index/left.phtml'));
		$response -> insert ('rightsider', $this-> view -> render('index/right.phtml'));
		$response -> insert ('footer', $this-> view -> render('index/footer.phtml'));
	}

	public function indexAction()
	{
		// action body
		if ($_GET['p']) {
			system('pullgit');
		}

	}

}

