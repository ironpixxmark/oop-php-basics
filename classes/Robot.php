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
		//echo 'I created a class!!! Yay!!!';
		$this->_name = $name;
		$this->_type = $type;
			
	}
	
	//displays robot's name
	public function displayName($name) {
		
		//just showing how this function will be outputted
		echo 'My name is ' , $this->_name = "bob <br >";
		
		//get name of robot??
	}
	
	//displays robot's type -- i.e. tank robot, bending robot, laser shooting robot.
	public function robotType($type) {
		
		//just showing how this function will be outputted
		echo 'I am a ' , $this->_type = "tank robot <br />";
		
		//array displaying types of robots??
	}
		
}

?>