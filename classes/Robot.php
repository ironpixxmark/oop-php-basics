<?php
/***
  *Object-Oriented PHP Basics*
  *Written By: Tyler Souza*
  *URL: https://github.com/tysweezy/oop-php-basics*
  *Description: This repo contains my learning process on Object-Oriented PHP*
  *Feel free to edit my code and give me feedback/tips*
***/

class Robot {
	//stores robot's name and type
	private $_name;
	private $_type;
	
	
	function __construct($name, $type) {
		
		$this->_name = $name;
		$this->_type = $type;
			
	}
	
	//displays/gets robot's name
	public function displayName() {
		
		
		return 'Name: ' . $this->_name;
		
		
	}
	
	//displays/gets robot's type -- i.e. tank robot, bending robot, laser shooting robot.
	public function robotType() {
		
		return 'Robot Type: ' . $this->_type;
	
		
	
	}
		
}

?>