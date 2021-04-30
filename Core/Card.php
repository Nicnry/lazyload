<?php
namespace Core;

class Card {
	/**
	 * Attributes
	 */
	private $name;
	private $picture;
	private $description;
		
	/**
	 * __construct
	 *
	 * @param string $name
	 * @param string $picture
	 * @param string $description
	 * @return void
	 */
	function __construct(string $name, string $picture, string $description) {
		$this->name = $name;
		$this->picture = $picture;
		$this->description = $description;
	}
		
	/**
	 * get_name
	 *
	 * @return string
	 */
	public function get_name() : string {
		return $this->name;
	}
	
	/**
	 * get_picture
	 *
	 * @return string
	 */
	public function get_picture() : string {
		return $this->picture;
	}
	
	/**
	 * get_description
	 *
	 * @return string
	 */
	public function get_description() : string {
		return $this->description;
	}
}
