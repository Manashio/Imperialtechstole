<?php
     function get_the_titlename($string){
          $filenameExt = basename($string);         
          $file_name = basename($string, ".php");
          
               $title_name = 'Admin : '.$file_name;
          
          return $title_name;
     }

    $title_name = get_the_titlename($_SERVER['SCRIPT_NAME']);
    

    // -----
    function breadcrumbs($home = 'Home') {
        $path = array_filter(explode('/', parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH)));
        $base = ($_SERVER['HTTPS'] ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . '/';
        $breadcrumbs = Array("<a href=\"$base\">$home</a>");
        $last = end(array_keys($path));
        foreach ($path AS $x => $crumb) {
            $title = ucwords(str_replace(Array('.php', '_'), Array('', ' '), $crumb));
            if ($x != $last)
                $breadcrumbs[] = "<li class='breadcrumb-item'><a href=\"$base$crumb\">$title</a></li>";
            else
                $breadcrumbs[] =  "<li class='breadcrumb-item'>".$title."</li>";
            }
        return implode($breadcrumbs);
    }    

