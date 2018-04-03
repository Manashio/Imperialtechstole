<?php
if(isset($_POST)){
 sendmail($_POST);
}
 ?>
<script>
window.location = "http://www.imperialtechsol.com/index.php?mail=Y";
</script>
<?php
function sendmail($param) {
    $subject = " Imperial TechSol Pvt. Ltd - Contact us";

    $message = '<html>
<html>

    <head>
        <!-- Bring to you by http://www.CSSTableGenerator.com -->
        <link rel="stylesheet" href="table.css" type="text/css"/>	
    </head>


    <body>

        <div class="CSS_Table_Example" style="width:600px;height:291px;">
            <table >
             
			 
			  <tr>
                    <td >
                        Customer Name - ' . $param['name'] . '
                    </td>

                </tr>
				
				
                <tr>
                    <td >
                        Email Id - ' . $param['email'] . '
                    </td>

                </tr>

                <tr>
                    <td >
                        Contact Number - ' . $param['mobile'] . '
                    </td>

                </tr>
				
				 <tr>
                    <td >
                        Message - ' . $param['query'] . '
                    </td>

                </tr>
              
            </table>
        </div>

    </body>

</html>';

    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
//    mail("sujeet@imperialtechsol.com", $subject, $message, $headers);
//    mail("info@imperialtechsol.com", $subject, $message, $headers);
   mail("nubulmachary@gmail.com", $subject, $message, $headers);

}

?>
