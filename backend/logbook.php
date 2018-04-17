<?php
     require_once('core/session.php');
     include_once('functions/function.inc.php');
     include_once('views/head.php');
     include_once('views/sidenav.php');
?>
<div class="content">

     <div class="container">
     <div class="jumbotron">
         <h1 class="text-center">Customer Complain</h1>
     </div>
     <table class="main" >
          <tr>
            <th>App Key</th>
            <th>Name</th>
            <th>Phone No</th>
            <th>Posted At</th>
            <th>Link</th>
          </tr>
          <?php require_once('controller/log_controller.php'); ?>
      </table>
     </div>
</div>
<?php
     include_once('views/footer.php');
?>