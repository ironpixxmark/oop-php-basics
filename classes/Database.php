<?php
class Database {
	protected $_link, $_result, $numRows;
	
	//constructor function -- connection to the database
	public function __construct($server, $username, $password, $db) {
		$this->_link = mysqli_connect($server, $username, $password, $db);
		mysqli_select_db($this->_link, $db);
		
		
		
	}
	
	//close connection to the database
	public function disconnect() {
		mysqli_close($this->_link);	
	}
	
	//querying the database
	public function query($sql) {
		$this->_result = mysqli_query($this->_link, $sql);
		$this->_numRows = mysqli_num_rows($this->_result);
	}
	
	public function numRows() {
		return $this->_numRows;
	}
	
	public function rows() {
		$row = array();
		for($x = 0; $x < $this->numRows(); $x++) {
			$rows[] = mysqli_fetch_assoc($this->_result);	
		}
		return $rows;
	}
	
	
}
?>