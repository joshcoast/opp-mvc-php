<?php
class House {
	// Properties
	private $street;
	private $paint_color;
	private $age;

	// Methods
	public function __construct( $street, $paint_color, $age ) {
		$this->street = $street;
		$this->paint_color = $paint_color;
		$this->age = $age;
	}

	public function set_street( $street ) {
		$this->street = $street;
	}

	public function get_street() {
		return $this->street;
	}

	public function get_paint_color() {
		return $this->paint_color;
	}

	public function get_age() {
		return $this->age;
	}

	public function __destruct() {
		echo( '<p>this has been destructed ' . $this->street . ' ' . $this->paint_color . ' ' . $this->age . '</p>');
	}
}