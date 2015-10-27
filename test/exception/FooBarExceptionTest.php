<?php namespace JRI\JabranCI\Tests;

use JRI\JabranCI\Exception\FooBarException;

class FooBarExceptionTest extends \PHPUnit_Framework_TestCase {

	/**
	 * @expectedException \JRI\JabranCI\Exception\FooBarException
	 */
	public function testFooBarException() {
		throw new FooBarException('foo');
	}
}

