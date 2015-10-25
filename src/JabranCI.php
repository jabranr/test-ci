<?php namespace JRI;

class JabranCI {

	public $name;

	public function __construct($name = null) {
		$this->name = $name;
		return $this;
	}

	public function hasName() {
		return $this->name !== null;
	}
}