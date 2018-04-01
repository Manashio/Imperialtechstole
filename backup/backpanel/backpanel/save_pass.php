<?php 

include("includes/mainCls.php");
if($_SESSION['id']==''){
header("Location: index.php?msg=Login%20First");
}
			$old_pass  = md5($_REQUEST["old_pass"]);
			$pcode = $_SESSION['id'];
			$new_pass  = $_POST["new_pass1"];
			$conf_pass = $_POST["new_pass2"];
			$sql_change = "select * from pcf_adm_lgn where admin_id='$pcode' and password='$old_pass'";
			
				$rs_change  = mysql_query($sql_change);
			
				if(mysql_num_rows($rs_change)>0)
				{
					$gtusrs = mysql_fetch_object($rs_change);
					$selQry ="$chg'select * from pcf_adm_lgn where username=".$gtusrs->username." and password=".$conf_pass."')";
					$fileArray["password"] = md5($conf_pass);
					$result=$s->editRecord('pcf_adm_lgn',$fileArray,'admin_id',$pcode,$selQry);
				
					    header("Location: index.php?msg=Password Changed.");
						
						
	}
	else
	{
				header("Location: index.php?msg=wrong password,Please try again.");
	}
						
?>
