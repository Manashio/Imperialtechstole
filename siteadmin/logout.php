<?php	
	## Main Conection
	include("../config/config.inc.php");

	$_SESSION['AID'] = "";
	$_SESSION['LoggedName'] = "";
	$_SESSION['AdminType'] = "";
	$_SESSION['dbAdminUserID'] = "";
	$_SESSION['dbAdminUserPwd'] = "";
	$_SESSION['AdminLastLogin'] = "";	
	$_SESSION['AdminLastLoggedIP'] = "";
	$_SESSION['AdminEmailAddress'] = "";
	$_SESSION['adminUserID'] = "";
	$_SESSION['adminUserPwd'] = "";
	$_SESSION['CurrLoginIP'] = "";
	$_SESSION['Admloginformatedate']="";
	$_SESSION['sesscurrlogindate']="";

	unset($_SESSION['AID']);
	unset($_SESSION['LoggedName']);
	unset($_SESSION['AdminType']);
	unset($_SESSION['dbAdminUserID']);
	unset($_SESSION['dbAdminUserPwd']);
	unset($_SESSION['AdminLastLogin']);
	unset($_SESSION['AdminLastLoggedIP']);
	unset($_SESSION['AdminEmailAddress']);
	unset($_SESSION['adminUserID']);
	unset($_SESSION['adminUserPwd']);
	unset($_SESSION['CurrLoginIP']);
	unset($_SESSION['Admloginformatedate']);
	unset($_SESSION['sesscurrlogindate']);

	echo "<script>document.location.href='index.php';</script>";
	exit;	
?>