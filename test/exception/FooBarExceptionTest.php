<?php namespace JRI\Tests;

use \JRI\Exception\FooBarException;

class FooBarExceptionTest extends \PHPUnit_Framework_TestCase {

	/**
	 * @expectedException \JRI\Exception\FooBarException
	 */
	public function testFooBarException() {
		throw new FooBarException('foo');
	}
}

