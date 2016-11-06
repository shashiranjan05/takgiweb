<?php
class database
{
	var $host;
    var $dbuser;
    var $dbpassword;
    var $database;
    var $con;    
	function database()
    {
    	$this->con=$this->dbconnect();
    }
	function dbconnect()
	{
		$ini=parse_ini_file('db.ini');
		$this->database=$ini["database"];
		$this->dbuser=$ini["dbuser"];
		$this->dbpassword=$ini["dbpassword"];
		$this->host=$ini["host"];
		$con=mysql_connect($this->host,$this->dbuser,$this->dbpassword);
		if(!$con)
		{
			die(mysql_error());	
		}
		mysql_select_db($this->database,$con);
		return $con;			
	}
}
?>