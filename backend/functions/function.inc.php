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

//for img uploading 
$target_dir = "public/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
$title = $_POST['title'];
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        $msg="File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        $msg="File is not an image.";
        $uploadOk = 0;
    }
}
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    $msg="Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
if ($uploadOk == 0) {
    $msg="Sorry, your file was not uploaded.";
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {

        $done = mysqli_query($conn,"INSERT INTO img_store(id,img_src,alt,posted) VALUES('','$target_file','$title',NOW()) ");
        if($done){
            $msg= "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.<br>";
                     }else{
            $msg= "failed to upload.";
        }
    } else {
        $msg="Sorry, there was an error uploading your file.";
    }
}
    