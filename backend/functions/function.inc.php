<?php

     function get_the_titlename($string){
          $filenameExt = basename($string);         
          $file_name = basename($string, ".php");
          if($file_name === 'index'){
               $title_name = 'Admin : Login';
          }else{
               $title_name = 'Admin : '.$file_name;
          }
          return $title_name;
     }
    $title_name = get_the_titlename($_SERVER['SCRIPT_NAME']);