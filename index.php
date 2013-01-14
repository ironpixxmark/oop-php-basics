<?php
/***
  *Object-Oriented PHP Basics*
  *Written By: Tyler Souza*
  *URL: https://github.com/tysweezy/oop-php-basics*
  *Description: This repo contains my learning process on Object-Oriented PHP*
  *Feel free to edit my code and give me feedback/tips*
***/

require_once 'classes/Robot.php';

//calling the Robot class
$robot = new Robot();

//displays robot name
$robot->displayName();
$robot->robotType();


?>