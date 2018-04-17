<?php
     require_once('core/session.php');
     include_once('functions/function.inc.php');
     include_once('views/head.php');
     include_once('views/sidenav.php');
     require_once('controller/getlog_controller.php');
?>
<div class="content">
     <div class="container">
     <div class="bar pt-5 pb-5 hide_print">
       <a href="logbook.php" class="custom-btn submit">Back</a>
       <a href="logbook.php" class="custom-btn submit" id="print">Print</a>		    
       <a href='editlog.php?id=<?php echo $id; ?>' class="custom-btn submit"> Edit </a>
     </div>

     <div class="show_print text-center pt-5 pb-5">
       <h1>Assam State Transport Corporation</h1>
       Paribahan Bhawan, Paltan Bazaar, Guwahati, India | Pin : 781008<br>
       Website : <a href="#">astc.assam.gov.in</a>
       <br>
     </div>


     <table class="main">
          
          <tr class="first">
            <td><b>App Key</b></td>
            <td><?php echo $appKey;?></td>
            <td><b>Complain Date</b></td>
            <td><?php echo $date_e;?></td>
          </tr>
          <tr class="first">
            <td><b>Name</b></td>
            <td><?php echo $name;?></td>
            <td><b>Phone no</b></td>
            <td><?php echo $phone;?></td>
          </tr>
          <tr>
            <td><b>Address</b></td>
            <td> <?php echo $address; ?> </td>
            <td><b>Vehicle No</b></td>
            <td> <?php echo $vehicle; ?> </td>
          </tr>
          <tr>
               <td> <b>Forward</b> </td>
            <td> <?php echo $forward; ?></td>
            <td> <b>Category</b> </td>
            <td> <?php echo $category; ?> </td>
          </tr>
          <tr>
            <td> <b>Complain Via</b> </td>
            <td> <?php echo $cmp_through ?> </td>
            <td> <b>Complain taken by</b> </td>
            <td> <?php echo $taken ?> </td>
          </tr>
          <tr >
            <td colspan="4" class="no-background"> <b>Complain</b> </td>
          </tr>
          <tr>
          <td colspan="4" class="no-background"> <?php echo $complain; ?></td>
          </tr>
      </table>
     </div>
</div>
<script>
      let print_btn = document.getElementById("print");
      print_btn.addEventListener('click', () => { window.print();})
</script>
<?php

     include_once('views/footer.php');
?>