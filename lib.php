<?php

if(!session_id()) session_start();//If session is not started start session

function getDBConnection(){
	try{
		//$db = new mysqli("sql10.freemysqlhosting.net","sql10166023","fNe6cp3r6y","sql10166023");
		$db = new mysqli("localhost","web_project","admin","web_project");
		if ($db == null && $db->connect_errno > 0)return null;
		return $db;
	}catch(Exception $e){ } 
	return null;
}

function checkLogin($email, $password){
	$password = sha1($password);
	$sql = "SELECT * FROM `user` where `email`='$email'";
	echo($email);
	$db = getDBConnection();
	//print_r($db);
	if($db != NULL){
		$res = $db->query($sql);
		if ($res && $row = $res->fetch_assoc()){
			if($row['password'] == $password){
				$_SESSION["user"] = $row['fname'];
				$_SESSION["id"] = $row['uid'];
				return true;
			}
		}
	}
	return false;
}