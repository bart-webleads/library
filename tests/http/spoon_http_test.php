<?php

// includes
require_once 'spoon/spoon.php';
require_once 'PHPUnit/Framework/TestCase.php';

class SpoonHTTPTest extends PHPUnit_Framework_TestCase
{
	public function testMain()
	{
		$this->assertEquals(array(), SpoonHTTP::getHeadersList());
	}
}

?>