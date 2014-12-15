<?php
ini_set('display_errors', 1);
date_default_timezone_set("America/New_York");
function GetConnection(){
	
	return new mysqli('localhost','raviprov1',$sql_password,'raviprov1_db');
}
function my_print($x){
	?><pre><?
		print_r($x);
	?></pre><?
}
function FetchAll($sql){
		$ret = array();
		$conn = GetConnection();
		$results = $conn->query($sql);
		
		$error = $conn->error;
		if($error){
			echo $error;
		}else{
			while ($rs = $results->fetch_assoc()) {
				$ret[] = $rs;
			}			
		}
		
		return $ret;	
}
function escape_all($row, $conn){
	$row2 = array();
	foreach ($row as $key => $value) {
		$row2[$key] = $conn->real_escape_string($value);
	}
	return $row2;
}
