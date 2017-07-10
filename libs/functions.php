<?php
include_once 'libs/class.session.php';
//error_reporting(E_ALL);
	error_reporting(E_ERROR | E_WARNING | E_PARSE);
	//ini_set('display_errors', '1');
include_once 'class.database.php';
if($_SERVER["REQUEST_METHOD"]=="GET")
{
$mode=$_REQUEST["mode"];
}
 function redirect_to($url)
{
    
     header("Location: ".$url);
}
function log_out()
{
    session_start();
    session_destroy();
    unset($_SESSION);
    header("Location: ../index.php");

}
function getAll_activeCategory()
{
    global $database, $db;
    $qry="SELECT category_name FROM ".TBL_CATEGORY." where status='active';";
    $result = $database->query( $qry );
     return $database->db_result_to_array($result);
}
if($mode == "logout")
{
    log_out();
}




?>
