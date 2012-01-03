<?php
class TestController extends Zend_Controller_Action {
	public function init () {
		$this -> _helper ->layout -> setLayout ('test');
	}
	
	public function indexAction () {
		echo 'test';
	}
}