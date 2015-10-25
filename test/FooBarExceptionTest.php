<?php namespace JRI\Tests;

class FooBarExceptionTest extends \PHPUnit_Framework_TestCase {

	/**
	 * @expectedException \JRI\Exception\FooBarException
	 */
	public function testFooBarException() {
		throw new \JRI\Exception\FooBarException('foo');
	}
}

