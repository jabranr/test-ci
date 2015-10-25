<?php namespace JRI\Tests;

class JabranCITest extends \PHPUnit_Framework_TestCase {

	public $jci_name;
	public $jci_noName;

	public function setUp() {
		$this->jci_name = new \JRI\JabranCI('Jabran');
		$this->jci_noName = new \JRI\JabranCI;
	}

	public function tearDown() {
		unset($this->jci_name);
		unset($this->jci_noName);
	}

	public function testHasName() {
		return $this->assertTrue($this->jci_name->hasName());
	}

	public function testHasNoName() {
		return $this->assertFalse($this->jci_noName->hasName());
	}
}