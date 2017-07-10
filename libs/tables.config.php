<?php
include_once("db.config.php");
$PREFIX=DB_PREFIX;
defined('TBL_QUERY') ? null : define('TBL_QUERY',$PREFIX.'query' );
defined('TBL_PROJECT_DETAILS') ? null : define('TBL_PROJECT_DETAILS',$PREFIX.'project_details' );
defined('TBL_NOTIFICATION') ? null : define('TBL_NOTIFICATION',$PREFIX.'notification' );
defined('TBL_CUSTOMER') ? null : define('TBL_CUSTOMER',$PREFIX.'customer' );
defined('TBL_EMPLOYEE') ? null : define('TBL_EMPLOYEE',$PREFIX.'employee' );
defined('TBL_VISITORS') ? null : define('TBL_VISITORS',$PREFIX.'visitors' );
defined('TBL_CANDIDATE') ? null : define('TBL_CANDIDATE',$PREFIX.'candidate' );
defined('TBL_PERMISSION') ? null : define('TBL_PERMISSION',$PREFIX.'permission' );
defined('TBL_USER') ? null : define('TBL_USER',$PREFIX.'user' );
?>