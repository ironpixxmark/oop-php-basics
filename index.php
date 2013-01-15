<?php
/***
  *Object-Oriented PHP Basics*
  *Written By: Tyler Souza*
  *URL: https://github.com/tysweezy/oop-php-basics*
  *Description: This repo contains my learning process on Object-Oriented PHP*
  *Feel free to edit my code and give me feedback/tips*
***/

require_once 'classes/Robot.php';
require_once 'classes/Database.php';

//calling the Robot class
$robot = new Robot("bender<br />", "tank<br />");

//displays robot name
echo $robot->displayName();
echo $robot->robotType();

/*****CALLING THE DATABASE CLASS*****/
$db = new Database('localhost', 'root', '', 'robot');
$db->query("SELECT `userbot` . `botname` FROM `userbot`");

if($db->rows() == 0) {
	echo 'There are no robots on this page';
} else {
	
		//loop result
	foreach ($db->rows() as $bot) {
		//echo '<pre>', print_r($article, true), '</pre>';
		echo $bot['botname'], '<br>';
	}
	
	echo '<p>', $db->numRows(), ' robots</p>';	
}



$db->disconnect();

?>