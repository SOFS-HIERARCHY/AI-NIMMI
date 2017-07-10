<?php

require_once ("db.config.php" );
require_once ("tables.config.php" );
	
	class MySQLDatabase{
		
		private $connection;
		private $magic_quotes_active;
		private $mysqli_real_escape_string;
		
		public $last_query;
		
		function __construct(){
			$this->open_connection();
			$this->magic_quotes_active = get_magic_quotes_gpc();
			$this->mysqli_real_escape_string = function_exists("mysqli_real_escape_string");
		}
		
		public function open_connection(){
			
			$this->connection = mysqli_connect( DB_SERVER, DB_USER, DB_PASS, DB_NAME);
			
			if (function_exists('mysqli_set_charset'))
				mysqli_set_charset($this->connection, 'utf8');
			else
				mysqli_query($this->connection, 'SET NAMES utf8');
			
			
			if( mysqli_connect_errno() ){
				die("Database connection failed." . mysqli_connect_error() );
			}
		}
		
		public function close_connection(){
			if( isset($this->connection) ){
				mysqli_close( $this->connection);
				unset( $this->connection);
			}
		}
		
		public function query( $sql="" ){
			$this->last_query = $sql;
			$result = mysqli_query( $this->connection, $sql);
			$this->confirm_query ( $result );
			return $result;
		}
		
		public function multi_query( $sql="" ){
			$this->last_query = $sql;
			$result = mysqli_multi_query( $this->connection, $sql);
			$this->confirm_query ( $result );
			return $result;
		}
		
		public function escape_value ( $string ){
			if( $this->mysqli_real_escape_string ){
				if($this->magic_quotes_active){ $string=stripslashes($string); }
				$string = mysqli_real_escape_string($this->connection, $string);
			}else{
				if(!$this->magic_quotes_active){ $string= addslashes($string); }
			}
			return $string;
		}
		
		
		public function db_result_to_array($result){
		  $res_array = array();
			
			for ($count=0;  $row = $this->fetch_array($result) ; $count++)
			{
			  $res_array[$count] = $row;
			}
			
			return $res_array;
		}
		
		public function db_result_to_object($result){
		  $res_array = array();
			
			for ($count=0;  $row = $this->fetch_object($result) ; $count++)
			{
			  $res_array[$count] = $row;
			}
			
			return $res_array;
		}
			
		public function fetch_array( $result ){
			/**
			while ($row = mysql_fetch_array($result, MYSQL_NUM)) {
				printf("ID: %s  Name: %s", $row[0], $row[1]);  
			}
			**/
			return mysqli_fetch_array( $result );
		}

		public function fetch_object( $result ){
			// while ($row = mysql_fetch_object($result)) {
			//    echo $row->user_id;
			//    echo $row->fullname;
			// }
			//$row->user_id;
			return mysqli_fetch_object( $result );
		}
		
		public function fetch_assoc( $result ){
			/*while ($row = mysql_fetch_assoc($result)) {
				echo $row["userid"];
				echo $row["fullname"];
				echo $row["userstatus"];
			}*/
			return mysqli_fetch_assoc( $result );
		}
		
		public function fetch_row ( $result )
		{
			
			return mysqli_fetch_row( $result );
		}
		
		public function num_rows( $result ){
			return mysqli_num_rows( $result);
		}
	
	/**
	mysql_free_result() will free all memory associated with the result identifier result.
	mysql_free_result() only needs to be called if you are concerned about how much memory is being used for queries that return large result sets. All associated result memory is automatically freed at the end of the script's execution. 
	**/
		public function free_result($result){
			return mysqli_free_result($result);
		}
		
		public function insert_id(){
			//get me the last insert id
			return mysqli_insert_id( $this->connection );
		}
		
		public function affected_rows(){
			return mysqli_affected_rows( $this->connection );
		}
		
		public function store_result()
		{
			
			return mysqli_store_result($this->connection);
		}
		
		public function more_results()
		{
			return mysqli_more_results($this->connection);
		}
		
		public function next_result()
		{
			
			return mysqli_next_result($this->connection);
		}
		private function confirm_query ( $result )
		{
			if(!$result)
			{   
			   if( show_error_enabled )
			   {
				   $output = "Database query failed ". $this->mysql_db_error() . "<br />";
				   $output .= "Last Query run : " . $this->last_query;
				   die( $output );
				}
				else
				{
				   $error = "Database query failed Admin has been notifyed <br />";
				   $output = "Database query failed ". $this->mysql_db_error() . "<br /> Site Name: ".C_SITE_NAME;
				   $output .= "Last Query run : " . $this->last_query;
				   
				   $subject = "WebSite Problem - ".site_name;
				   $to 	= array("email" => C_ADMIN_EMAIL, "name" => C_ADMIN_EMAIL );
				   $from 	= array("email" => C_ADMIN_EMAIL, "name" => C_ADMIN_EMAIL);
				   //send_mail( $output, $subject, $to, $from, "", "" );
				   die( $error );
				}		
			}
		}
		
		public function mysql_db_error()
		{
			return mysqli_errno($this->connection) ." - ". mysqli_error($this->connection);
		}
		
		public function optimise_table($table)
		{
			$sql = "optimize table ".$table;
			$r = $this->query( $sql );
			return $r;
		}
	}
	global $database, $db;
	$database = new MySQLDatabase();
	$db =& $database;
?>
