<?php 
	include("../config/config.inc.php");

if(checkAdminLogin())
{
	echo "<script>document.location.href='dashboard.php';</script>";
	exit;
}


$admemailid = $_REQUEST['admemailid'];
if(isset($_REQUEST['register']) && $_REQUEST['register']=="Submit")
{
	$sqlfpass = "SELECT * FROM tbl_administrator where fld_email='$admemailid' and fld_status='1'";
	$rsfpass = $dbquery->query($sqlfpass) or die("Password Error:" . $dbquery->error);
	if($rsfpass->num_rows > 0)
	{
		$rowfpass = $rsfpass->fetch_object();
		$adminname = $rowfpass->fld_name;
		$adminemail = $rowfpass->fld_email;
		$username = $rowfpass->fld_admin_userid;
		$password = $rowfpass->fld_admin_userpass;

		$massage="Hi $adminname,
		<br/>		
		<p>Please find your login details below.
		<br/>
		<p>Login Details:</p>
		<br/>
		<p>Username: $username
		<br/>
		Password: $password</p>	";			
		$fromemail = $adminemail;
		$headers  = "MIME-Version: 1.0\r\n";
		$headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
		$headers .= "From: <".$fromemail.">\r\n";
		$subject="Forgot Password";							
		mail($adminemail,$subject,$massage,$headers);
		$sndml=1;
		echo "<script>document.location.href='thank-you.php';</script>";
		exit;
	}
	else
	{
		$errMessageText = "Sorry, Email id Not Found!";
	}
}




$adminIndex=1;
?>





<?php	include("common/admheader.php"); ?>


	<section class="admin">
		<section class="adminform">
			<form name="frmlogin" id="frmlogin" method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
			<h1>Forgot Password</h1>
			<?php if($errMessageText!="") { ?><h3 class="errorlogin"><?php echo $errMessageText?></h3><?php } else { echo ''; } ?>
			<div class="adminfield">
				<label>Email Address</label>
				<input type="text" name="admemailid" class="required" autofocus required>
			</div>
			<div class="adminfield">
				<label></label>
				<input type="submit" name="register" value="Submit" />
			</div>
			<div class="adminfield">
				<label></label>
				<span>Login <a href="index.php">Click Here</a></span>
			</div>
		</form>
		</section>
	</section>

	<?php include("common/admfooter.php"); ?>