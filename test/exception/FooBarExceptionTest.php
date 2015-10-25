<?php namespace JRI\Tests;

require __DIR__ . '/../../vendor/autoload.php';

class FooBarExceptionTest extends \PHPUnit_Framework_TestCase {

	/**
	 * @expectedException \JRI\Exception\FooBarException
	 */
	public function testFooBarException() {
		throw new \JRI\Exception\FooBarException('foo');
	}
}

