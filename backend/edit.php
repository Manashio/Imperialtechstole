<?php
     require_once('core/session.php');
     require_once('core/db_conn.php');
     include_once('functions/function.inc.php');
     $id = $_GET['id'];
     $getRow = $db->getRow("SELECT * FROM tbl_main WHERE id =? ", [$id]);
     if(empty($_POST)===false){
      $page_name = $_POST['page_name'];
      $title_name = $_POST['title_name'];
      $brand = $_POST['brand'];
      $seo = $_POST['seo'];
      $img = "imp.png";//$_POST['img'];
      $description = $_POST['description'];
      $broucher = "file.pdf";//$_POST['broucher'];
      $status = "active";
      
       if (empty($page_name) || empty($title_name) || empty($brand) || empty($seo) || empty($img) || empty($description) || empty($broucher) || empty($status) ) {
         $data =  "<div class='error_box' id='box_e'>
                                You might have left some empty fields!
                       </div>";
      }else{
        $db->updateData("UPDATE tbl_main SET `page_name` = ? , `name` = ?, `brand` = ? ,`seo` = ? , `img` = ? , `description` = ? ,`broucher` = ? ,`status` = ? ,`updated_at` = ? WHERE id = ? ", [$page_name,$title_name,$brand,$seo,$img,$description,$broucher,$status,TIME(),$id]);
        $data = "<div id='box_e'>
                        <div class='error_box green'>
                           Your data has been saved successfully!
                        </div>
                      </div>";
      }
  }


?>
<!DOCTYPE html>
<html>
<head>
     <meta charset="utf-8" />
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <title><?php echo $title_name;?></title>
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <link rel="stylesheet" href="raw/bootstrap.min.css" >
     <link rel="stylesheet" href="raw/style.css" >
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.25.0/codemirror.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/froala-editor/2.8.1/css/froala_editor.pkgd.min.css" rel="stylesheet" type="text/css" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/froala-editor/2.8.1/css/froala_style.min.css" rel="stylesheet" type="text/css" />
</head>
<?php
     include_once('views/sidenav.php');
?>
<div class="content">
     <div class="container">
        <div class="row">
            <div class="col-10 offset-1">         
            <form action="" method="POST" enctype="multipart/form-data">
              <?php echo $error_box.$data;?>

              <label>Name Of The Page
                <span class="span">
                  <?php echo $message;?>
                </span>
                <input type="text" name="page_name" value ="<?php echo $getRow['page_name']; ?>" />
              </label>

              <label>Title name of the page
              <span class="span">
                  <?php echo $message;?>
                </span>
                <input type="text" value ="<?php echo $getRow['name'];?>"  name="title_name"/>
              </label>


              <label>Brand of the product
                <input type="text" value ="<?php echo $getRow['brand'];?>" name="brand"/>
              </label>

              
              <label>SEO Description
                <br><br>
                <textarea class="form-control" rows="3" name="seo">
                <?php echo $getRow['seo'];?>
                </textarea>
               
              </label>


              <label class="file">Product Image
                <br><br>
              <span class="span">
                  <?php echo $message;?>
                </span>
                <input type="file" name="img"/>
              </label>
              

              <label for="content">Description of the product
                <br><br>
              <span class="span">
                  <?php echo $message;?>
                </span>
                
                <textarea name="description" id="myEditor">
                <?php echo $getRow['description']; ?>
                </textarea>
              </label>

              <label class="file">Broucher
                <br><br>
              <span class="span">
                  <?php echo $message;?>
                </span>
                <input type="file" name="broucher"/>
              </label>
              
              
              <label>Status of the Page
              <span class="span">
                  <?php echo $message;?>
                </span>

                <Select name="status" class="form-control">
                  <option> <?php echo $getRow['status'];?></option>
                  <option value="active">Publish the page</option>
                  <option value="inactive">Save in draft</option>
                </Select>
              </label>

		    <br><br>
		    <div class="text-center">
	              <button type="submit" class="custom-btn submit">Save</button>		    
		    </div>
        </form>
        </div>
        </div>

     </div>
</div>


 



<script src="raw/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.25.0/codemirror.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.25.0/mode/xml/xml.min.js"></script>
    <!-- Include Editor JS files. -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/froala-editor/2.8.1/js/froala_editor.pkgd.min.js"></script>

<script>
	$(document).ready(function(){
		$("#target").click( function(){
			$("#menu").toggleClass('active');
			$(".div").toggleClass('off');
			$("#target").toggleClass('on');
		});	
		$("#block").click( function(){
					$("#menu").toggleClass('active');
					$(".div").toggleClass('off');
					$("#target").toggleClass('on');
		});
	});
</script>
    <script> $(function() { $('#myEditor').froalaEditor() }); </script>
</body>
</html>