<?php

// includes
require_once 'spoon/spoon.php';
require_once 'PHPUnit/Framework/TestCase.php';

class SpoonLocaleTest extends PHPUnit_Framework_TestCase
{
	public function testGetAvailableLanguages()
	{
		$this->assertEquals(array('de', 'en', 'es', 'fr', 'nl'), SpoonLocale::getAvailableLanguages());
	}
}

?>