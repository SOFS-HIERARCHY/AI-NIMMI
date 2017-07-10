<?php

/* 
 * SOFS
 *  
 */
include_once "class.database.php";

class Emp_Authendicate
{
    protected static $table_name = TBL_USER;
    function __construct(){
        
    }
    public static function authenticate( $username='', $password='' )
        {
                global $database, $db;
			$username = $database->escape_value($username);
/* @var $password type */
			$password = $database->escape_value( md5($password) );
			$sql  = "SELECT * FROM ".self::$table_name;
			$sql .= " WHERE username = '{$username}' ";
			$sql .= " AND password = '{$password}' ";
                        $sql .= " AND isactive='1' ";
                        $sql .= " LIMIT 1";

			$result_array = self::find_by_sql($sql);
                        return $result_array;
			//return !empty($result_array) ? array_shift($result_array) : false;
                       
        }
       public static function hashPassword($pass='')
	{
	/*
	* this function hash the password or it been used for hash the file.
	* @ $pass
	*/
		$pass = md5($pass);
		return $pass;
	}
        public static function find_by_sql ( $sql="" )
		{
		/*
		* find records and but then into veriables
		*/
			global $database, $db;
			$result = $database->query( $sql );
			$object_array = array();
                        $object_array=$database->fetch_array($result);
//			while ($row = $database->fetch_array($result)) 
//			{
//				$object_array[] = self::instantiate($row);
//			}
			return $object_array;
		}
}
