<?php

class Bootstrap extends Zend_Application_Bootstrap_Bootstrap
{
	
	public function _init () {
      $doctypeHelper = new Zend_View_Helper_Doctype();
      $doctypeHelper->doctype('XHTML1_STRICT');
	}
}