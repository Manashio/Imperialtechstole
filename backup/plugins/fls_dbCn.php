<?php 


$dataServer = 'localhost'; 

$dataUser= 'impus'; 

$dataPassword = 'O&$)xgWMJ+&d'; 

$dataDBName = 'impData';





 $adminemailData = mysql_fetch_assoc(mysql_query("select email from tbl_admin where login_id = 'admin'"));



 if($_SESSION['admin_login']=="admin")

 {

     $adminroot  = "http://localhost/center_login/admin/";

 }

 else

 {

	 $adminroot  = "http://localhost/center_login/center/";

 }

$admin_mail = $adminemailData['admin_email'];

?>

