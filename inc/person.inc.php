<?php
class Person {
	// Properties
	private $name;
	private $eye_color;
	private $age;

	public function __construct( $name, $eye_color, $age ) {
		$this->name = $name;
		$this->eye_color = $eye_color;
		$this->age = $age;
	}

	// Methods
	public function set_name( $name ) {
		$this->name = $name;
	}

	public function get_name() {
		return $this->name;
	}

	public function get_eye_color() {
		return $this->eye_color;
	}

	public function get_age() {
		return $this->age;
	}

}
