<?php
     require_once('core/session.php');
     require_once('core/db_conn.php');
     include_once('functions/function.inc.php');
     include_once('controller/date_time.php');
     include_once('views/head.php');
     include_once('views/sidenav.php');
     if(empty($_POST)===false){
      $page_name = $_POST['page_name'];
      $title_name = $_POST['title_name'];
      $brand = $_POST['brand'];
      $seo = $_POST['seo'];
      $img = $_POST['img'];
      $description = $_POST['description'];
      $broucher = $_POST['broucher'];
      $status = "active";
       
      $data = " ".$page_name.$title_name.$brand.$seo.$img."<pre>".$description."</pre>".$broucher.$status;

      if (empty($name) || empty($seo) || empty($pagename) || empty($status)) {
          echo  "<div class='error_box' id='box_e'>
                                You might have left some empty fields!
                       </div>";
      }else{
        //insert into db 
        $insert = $db->insertData("INSERT INTO tbl_main(
          id_catagory,
          id_subcatagory,
          pagename,
          `name`,
          brand,
          seo,
          img,
          `description`,
          broucher,
          `status`,
          created_at,
          updated_at
          ) VALUE (?,?,?,?,?,?,?,?,?,?,?,?)", 
        [$name,$name,$name,$name,$name,$name,$name,$name,$name,$name,TIME(),TIME()]);        
         //insert into db    
          echo "<div id='box_e'>
                        <div class='error_box green'>
                           Your data has been saved successfully!
                        </div>
                      </div>";
      }
  }


    ?>

   <script src="https://cdn.ckeditor.com/ckeditor5/10.0.0/classic/ckeditor.js"></script>

<div class="content">
     <div class="container">
        <div class="row">
            <div class="col-10 offset-1">         
            <form action="" method="POST">
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
                <textarea name="content" class="form-control" rows="3" name="seo">
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
                
                <textarea name="description" id="editor">
                    <h1>This is some sample content.</h1>
                    <br><br>
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

<?php
     include_once('views/footer.php');
?>
<script>
			ClassicEditor
				.create( document.querySelector( '#editor' ) )
				.then( editor => {
					console.log( editor );
				} )
				.catch( error => {
					console.error( error );
				} );
		</script>