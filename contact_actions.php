<?php 
error_reporting (E_ALL ^ E_NOTICE);
include_once 'libs/class.database.php';
/* include_once 'libs/class.session.php'; */
include_once 'libs/functions.php';
include_once 'libs/tables.config.php';
 include_once 'libs/lang.php';
session_start();
$session= new Session();
if(!$session->has_logged_in())
{
	redirect_to("index.php");
} 

$mode=$_REQUEST["mode"];
if($mode == "user")

{
	global $database, $db;
	$name=$database->escape_value ($_REQUEST["name"]);
	$address = $_REQUEST["address"];
	$phone = $_REQUEST["phone"];
	$website = $_REQUEST["website"];
	$message = $_REQUEST["message"];
		
 /*  print_r($url);
	exit; */

				$qry_update="INSERT INTO `".TBL_CONTACT."` (`name`,`address`,`phone`,`website`,`message`)"
				                        . " VALUES ('".$name."','".$address."','".$phone."','".$website."','".$message."');";
				$result_upload = $database->query( $qry_update );
			
			if($result>0)
				{
					$_SESSION["msg"]="Thanks For Supporting!.";
					redirect_to('contact.php');
				}
				else
				{
					$_SESSION["msg1"]="Request failed. Please contact support.";
					redirect_to('contact.php');
				}
				
}
   
?>