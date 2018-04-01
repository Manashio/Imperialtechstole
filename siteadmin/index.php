<?php 
include("../config/config.inc.php");


if(checkAdminLogin())
{
	echo "<script>document.location.href='dashboard.php';</script>";
	exit;
}

if(isset($_POST['admuserid']) && isset($_POST['admuserpass']))
{
	$adminUserID = $dbquery->real_escape_string($_POST['admuserid']);
	$adminPassword = $dbquery->real_escape_string($_POST['admuserpass']);
	$sqlAdmUserInfo = "SELECT * FROM tbl_administrator WHERE fld_username='$adminUserID' and fld_userpass='$adminPassword' and fld_status='1' ";
	$rs = $dbquery->query($sqlAdmUserInfo) or die('Login Error: ' . $dbquery->error);
	if($rs->num_rows > 0)
	{
		$rowAdmUserInfo = $rs->fetch_object();
		if($rowAdmUserInfo->fld_admintype==1)
		{
			$_SESSION['LoggedName'] = $rowAdmUserInfo->fld_name;
		}
		$_SESSION['AID'] = $rowAdmUserInfo->fld_id;
		$_SESSION['AdminType'] = $rowAdmUserInfo->fld_admintype;
		$_SESSION['dbAdminUserID'] = $rowAdmUserInfo->fld_username;
		$_SESSION['dbAdminUserPwd'] = $rowAdmUserInfo->fld_userpass;
		$_SESSION['AdminLastLogin'] = convert2DateTimeMinute($rowAdmUserInfo->fld_datetime);
		$_SESSION['Admloginformatedate'] = date('d M Y | H:i A', strtotime($_SESSION['AdminLastLogin']));
		$_SESSION['AdminLastLoggedIP'] = $rowAdmUserInfo->fld_lloginip;
		$_SESSION['AdminEmailAddress'] = $rowAdmUserInfo->fld_email;	
		$_SESSION['adminUserID'] = $adminUserID;
		$_SESSION['adminUserPwd'] = $adminPassword;
		$currloginfrom = $_SERVER['REMOTE_ADDR'];
		$_SESSION['CurrLoginIP'] = $currloginfrom;
		$currlogindate = date('Y-m-d H:i:s');
		$_SESSION['sesscurrlogindate'] = date('d M Y | H:i A', strtotime($currlogindate));
		$sqlUpdate="Update tbl_administrator set fld_llogintime='$currlogindate',fld_lloginip='$currloginfrom' where fld_username='$adminUserID' and fld_userpass='$adminPassword'";
		$result = $dbquery->query($sqlUpdate) or die('Error: ' . $dbquery->error);

		echo "<script>document.location.href='dashboard.php';</script>";
		exit;
	}
	else
	{
		$errMessageText = "Oops! Invalid Login Details!";
	}
} 




$adminIndex=1;
?>





<?php	include("common/admheader.php"); ?>


	<section class="admin">
		<section class="adminform">
			<form name="frmlogin" id="frmlogin" method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
			<h1>Administrator Login</h1>
			<?php if($errMessageText!="") { ?><h3 class="errorlogin" style="color:#FF0000;"><?php echo $errMessageText?></h3><?php } else { echo ''; } ?>
			<div class="adminfield">
				<label>Username</label>
				<input type="text" name="admuserid" class="required" autofocus required>
			</div>
			<div class="adminfield">
				<label>Password</label>
				<input type="password" name="admuserpass" required>
			</div>
			<div class="adminfield">
				<label></label>
				<input type="submit" name="register" value="Login" />
			</div>
			<div class="adminfield">
				<label></label>
				<span>Forgot Password? <a href="forgot-password.php">Click Here</a></span>
			</div>
		</form>
		</section>
	</section>

	<?php include("common/admfooter.php"); ?>