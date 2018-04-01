<script type="text/javascript" src="js/win_model.js"></script>

 <script type="text/javascript" language="javascript">

 function roll_over(img_name, img_src)

   {

      document[img_name].src = img_src;

   } 

</script>

  <div id="btnbox"><A HREF="logout.php" onmouseover="roll_over('but1', 'images/logoutbtnhover.png')"

     onmouseout="roll_over('but1', 'images/logoutbtn.png')"><img src="images/logoutbtn.png" width="111" height="25" name="but1" border="0" /></A></div>





 <div id="topmenubox">

 <?php include("dropdown.php"); ?>

 </div>