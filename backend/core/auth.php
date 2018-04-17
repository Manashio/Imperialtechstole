<?php
     require_once('core/db_conn.php');
     error_reporting(0);
     if(empty($_POST)===false){
          $username = trim($_POST['username']);
          $password = trim($_POST['password']);
            if(empty($username) || empty($password)){
               $message = "<div class='error_box mt-5' role='alert'>
                                        Admin username and password is required!
                                   </div>";
            }else{
               $query = $conn->prepare("SELECT * FROM users WHERE username = :userg AND password = :pwg");
               $query->bindParam(':userg', $username);
               $query->bindParam(':pwg', $password);
               $query->execute();
               $count = $query->rowCount();
               if($count==1){
                    $_SESSION['username'] = $_REQUEST['username'];
                    if(isset($_SESSION['username'])){
                         header("location: home.php");
                    }else{
                         echo "not set";
                    }
                }else{
                  $message ="<div class='error_box  mt-5' role='alert'>
                                              Admin username and password is incorrect!
                                     </div>";
                }
              }
          }

 
?>
