<?php
     require_once('core/session.php');
     require_once('core/db_conn.php');
     include_once('functions/function.inc.php');
     include_once('controller/add_controller.php');
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
                <input type="text" name="page_name" placeholder="About us " />
              </label>

              <label>Title name of the page
              <span class="span">
                  <?php echo $message;?>
                </span>
                <input type="text" placeholder="About us" name="title_name"/>
              </label>


              <label>Brand of the product
                <input type="text" placeholder="Dell, HP, ASUS" name="brand"/>
              </label>

              
              <label>SEO Description
                <br><br>
                <textarea class="form-control" rows="3" name="seo">
                    Rich content
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
                    <h1>This is some sample content.</h1>
                    
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum hic vero officiis error ab accusamus quas atque maxime laborum fuga aspernatur, nam tenetur cum explicabo architecto non ratione esse dolore.</p>
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
                  <option> SELECT</option>
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