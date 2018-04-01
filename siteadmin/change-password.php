<?php 
	include("../config/config.inc.php");

if(!checkAdminLogin())
{
	echo "<script>document.location.href='index.php';</script>";
	exit;
}

$strmsg2show="";
if($_POST['admuserid']!="" && $_POST['admcuserpass']!="")
{
	$adminUserID = $_REQUEST['admuserid'];
	$adminUserPass = $_REQUEST['admcuserpass'];

	if($adminUserPass == $_SESSION['dbAdminUserPwd'])
	{
		$strmsg2show = "Sorry, You have entered the same password, please try again! ";
	}
	else
	{
		$sqlAdmUserInfo = " UPDATE tbl_administrator set fld_userpass='$adminUserPass' where fld_username='$adminUserID'";
		$result1 = $dbquery->query($sqlAdmUserInfo) or die('Password Error:' . $dbquery->error);
		if($result1->affected_rows > 0)
		{
			$_SESSION['dbAdminUserPwd'] = $adminUserPass;
			$_SESSION['adminUserPwd'] = $adminUserPass;
		}
		$strmsg2show = "Password Successfully Changed!";
	}
}

$sqlpshow = "SELECT * from tbl_administrator where fld_id='". $_SESSION['AID'] ."'"; 
$rspshow = $dbquery->query($sqlpshow) or die('Password Display Error:' . $dbquery->error);
$num_rows = $rspshow->num_rows;
if($num_rows > 0)
{
	$row = $rspshow->fetch_object();
	$adminUserid = $row->fld_userid;
	$adminUserPass = $row->fld_userpass;
}

$selectedPage = 6;
?>





<?php include('common/admheader.php'); ?>



	<section class="middlepart">
		<div class="leftsection"><div class="left-panel"></div></div>
		<div class="right-panel">
			<aside class="rightsection iframe dboard">
				<h2>Change Password 
					<?php if($strmsg2show!="") { ?><div id="categoryDeleted" class="alert alert-success" style="text-align:center;"><div <?php echo $headingcls; ?>><?php echo $strmsg2show; ?></div></div><?php } ?>
				
				</h2>
				<div class="divider"></div>
				<div class="form">
				<form method="POST" id="frmprocessall" action="<?php echo $_SERVER['PHP_SELF'];?>">
					<ul>
						<li>
							<label>User Name</label>
							<input name="admuserid" type="text" placeholder="username" size="30" value="<?php echo $_SESSION['dbAdminUserID']; ?>" readonly="readonly">
						</li>
						<li>
							<label>New Password</label>
							<input name="admcuserpass" type="password" id="password1" size="30" placeholder="new password" value="<?php echo $adminUserPass; ?>" required>
						</li>
						<li>
							<label>Confirm Password</label>
							<input name="admconfusercpass" id="password2" type="password" size="30" placeholder="confirm password" onfocus="validatePass(document.getElementById('password1'), this);" oninput="validatePass(document.getElementById('password1'), this);" value="<?php echo $adminUserPass; ?>" required>
						</li>
						<li>
							<label></label>
							<input name="cmdsubmit" type="submit" value="Update">
						</li>
					</ul>
				</form>
				</div>
			</aside>
		</div>
	</section>


<?php include("common/admfooter.php"); ?>
