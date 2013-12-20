<?php
include_once('_password.php');
include_once __DIR__ . '/../Models/ZipCodes.php';

session_start();

function GetConnection(){
	
	global $sql_password;
	
	$conn = new mysqli('localhost', 'turnera1', $sql_password, 'turnera1_db');
	
	return $conn;
}

function fetch_all($sql){
		
	
	$ret = array();
	$conn = GetConnection();
	$result = $conn->query($sql);//Send a query with the given $sql statement/arguments
	
	echo $conn->error;
	
	while( $rs = $result->fetch_assoc()){
		
		$ret[] = $rs;//Adding on to the end of collection
	}
	

	$conn->close();
	return $ret;	
	
}


function fetch_special($sql){
		
	$ret = array();
	$conn = GetConnection();
	$result = $conn->query($sql);//Send a query with the given $sql statement/arguments
	echo $conn->error;
	
	$conn->close();
	return $result;
		
}


function fetch_one($sql){
		
	$arr = fetch_all($sql);//Fetch all columns and then return only the first
	return $arr[0];//Return the first

}


