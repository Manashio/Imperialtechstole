<?php
require_once("include/flsdb.php");

//session_unset ($_SESSION['SESS_admin_id']);
//session_destroy();
session_start();
	
		//$_SESSION['user']="";
		$_SESSION['user']						="";
		$_SESSION['password']					="";
		$_SESSION['SESS_admin_id']				="";
	    $_SESSION['id']							="";
		$_SESSION['SESSION_USER']				="";
		$_SESSION['admintyp'] 				    = "";
		 $_SESSION["adminLogin"]			    = "";
		 $_SESSION["AdminLoginID_SET"]  	 	= "";
		 $_SESSION["Super_ADMIN"] 	   		 	= "";
		 $_SESSION["adminid"] 		   		  	= "";
		 $_SESSION["AdminName_SET"]    		  	= ""; 
		 $_SESSION['admin_login']			 	= "";
	

header("Location: index.php");
?>