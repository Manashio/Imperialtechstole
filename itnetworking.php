<?php 
// include("config/config.inc.php");
    require('config/dbconnect.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php require('header/component.php'); ?>
    <title>Document</title>
    <style>
         .cover{
          width:100%;
          height:400px;
          background: #eee url('https://financialtribune.com/sites/default/files/field/image/17january/04-zs-home_theatre_75-ab.jpg');
          background-size:100%;
          background-repeat:no-repeat;
          background-position:center center;
          position:relative;
          top:40px;
      }
      .img{
            width: 100%;
            height: auto;
        }
    </style>
</head>
<body>
    <?php require('header/navbar.php'); ?>
    <?php require('header/catagory.php'); ?>

        

    <div class="contents" style="padding:70px 0px 1px 0px">

    <!-- IT Hardware	
Server	
Desktop -->
	<!-- Picture+Small Description -->
<!-- Brand Available	Dell, HP, Lenavo -->
<!-- Laptop -->
	<!-- Picture+Small Description
Brand Available	Dell, HP, Lenavo -->
<!-- 	
Networking Solution	
Lab Solution	
Office Solution etc.	
	
UPS -->
	<!-- Picture+Small Description
Brand Available	APC, Aton -->



  <!-- Start change content here -->

        <div class="cover">
        </div>
        <div class="container pt-5 pb-5">
    <div class="row ">
        <div class="col-md-4 pt-5 pb-5">
            <img class="img" src="http://www.telematica.hn/wp-content/uploads/2016/09/fb-4.jpg" alt="">
        </div>

        <div class="col-md-8 pt-5 pb-5">
            <h1 class="pb-3"> Server</h1>
           <p> Lorem ipsum dolor sit amet consectetur, adipisicing elit. Repudiandae assumenda esse nesciunt dicta soluta quibusdam magnam molestias, harum saepe minima qui maiores beatae deleniti magni explicabo.quibusdam magnam molestias, harum saepe minima qui maiores beatae deleniti magni explicabo.</p>
            <b>Brands : Brand-1, Brand-2, etc.</b>
            <br><br>
            <a href="#" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal" data-whatever="@getbootstrap">Enquiry</a>
            <a href="#" class="btn btn-info">Download Broucher</a>
        </div>
            
        <div class="col-md-4 pt-5 pb-5">
            <img class="img" src="https://i0.wp.com/www.wiknix.com/wp-content/uploads/2016/07/Dell-Inspiron-i5459-7020SLV-All-in-One-Desktop-e1469594532478.jpg?ssl=1" alt="">
        </div>
        <div class="col-md-8 pt-5 pb-5">
            <h1 class="pb-3"> Desktop</h1>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Repudiandae assumenda esse nesciunt dicta soluta quibusdam magnam molestias, harum saepe minima qui maiores beatae deleniti magni explicabo incidunt exercitationem nobis pariatur?
            Voluptas dicta provident eius iure fuga quidem sed consectetur neque placeat explicabo ex cum quam minima deserunt aliquid dolorum, ducimus corrupti rem dolor labore. Dicta, ducimus voluptatem. </p>
            <b>Brands : HP, Dell, Asus, etc.</b>
            <br><br>
            <a href="#" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal" data-whatever="@getbootstrap">Enquiry</a>
            <a href="#" class="btn btn-info">Download Broucher</a>
            
        </div>
        <div class="col-md-4  pt-5 pb-5">
            <img class="img" src="https://cdn.thewirecutter.com/wp-content/uploads/2017/10/cheaplaptops-fullres-5956-2-1-1024x512.jpg" alt="">
        </div>

        <div class="col-md-8  pt-5 pb-5">
            <h1 class="pb-3 "> Laptop</h1>
           <p> Lorem ipsum dolor sit amet consectetur, adipisicing elit. Repudiandae assumenda esse nesciunt dicta soluta quibusdam magnam molestias, harum saepe minima qui maiores beatae deleniti magni explicabo incidunt exercitationem nobis pariatur.</p>
           <b>Brands : HP, Dell, Asus, etc.</b>
           <br><br>
            <a href="#" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal" data-whatever="@getbootstrap">Enquiry</a>
            <a href="#" class="btn btn-info">Download Broucher</a>
            
            
        </div>


        <div class="col-md-4 pt-5 pb-5">
            <img class="img" src="http://www.jamsab.com/images/Network2.jpg" alt="">
        </div>

        <div class="col-md-8 pt-5 pb-5">
            <h1 class="pb-3">  Networking Solution	</h1>
            <p> Lorem ipsum dolor sit amet consectetur, adipisicing elit. Repudiandae assumenda esse nesciunt dicta soluta quibusdam magnam molestias, harum saepe minima qui maiores beatae deleniti magni explicabo incidunt exercitationem nobis pariatur.</p>
           <b>Brands : Brand-1, Brand-2, etc.</b>
           <br><br>
            <a href="#" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal" data-whatever="@getbootstrap">Enquiry</a>
            <a href="#" class="btn btn-info">Download Broucher</a>
            
        </div>
        
        <div class="col-md-4 pt-5 pb-5">
            <img class="img" src="https://mirc.uzleuven.be/MedicalImagingCenter/pictures/Fotosessie_Louvre/images/dsc_0303.jpg" alt="">
        </div>

        <div class="col-md-8 pt-5 pb-5">
            <h1 class="pb-3"> Lab Solution	</h1>
            <p> Lorem ipsum dolor sit amet consectetur, adipisicing elit. Repudiandae assumenda esse nesciunt dicta soluta quibusdam magnam molestias, harum saepe minima qui maiores beatae deleniti magni explicabo incidunt exercitationem nobis pariatur.</p>
           <b>Brands : Brand-1, Brand-2, etc.</b>
           <br><br>
            <a href="#" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal" data-whatever="@getbootstrap">Enquiry</a>
            <a href="#" class="btn btn-info">Download Broucher</a>
    </div>

    <div class="col-md-4 pt-5 pb-5">
            <img class="img" src="http://www.martex.it/wp-content/uploads/systems_anyware_03.jpg" alt="">
        </div>

        <div class="col-md-8 pt-5 pb-5">
            <h1 class="pb-3"> Office Solution</h1>
            <p> Lorem ipsum dolor sit amet consectetur, adipisicing elit. Repudiandae assumenda esse nesciunt dicta soluta quibusdam magnam molestias, harum saepe minima qui maiores beatae deleniti magni explicabo incidunt exercitationem nobis pariatur.</p>
           <b>Brands : Brand-1, Brand-2, etc.</b>
           <br><br>
            <a href="#" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal" data-whatever="@getbootstrap">Enquiry</a>
            <a href="#" class="btn btn-info">Download Broucher</a>
    </div>

    <div class="col-md-4 pt-5 pb-5">
            <img class="img" src="http://feroxsolutions.do/wp-content/uploads/2016/09/APC-BR1300G-600x480.jpg" alt="">
        </div>

        <div class="col-md-8 pt-5 pb-5">
            <h1 class="pb-3"> UPS</h1>
            <p> Lorem ipsum dolor sit amet consectetur, adipisicing elit. Repudiandae assumenda esse nesciunt dicta soluta quibusdam magnam molestias, harum saepe minima qui maiores beatae deleniti magni explicabo incidunt exercitationem nobis pariatur.</p>
           <b>Brands : Brand-1, Brand-2, etc.</b>
           <br><br>
            <a href="#" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal" data-whatever="@getbootstrap">Enquiry</a>
            <a href="#" class="btn btn-info">Download Broucher</a>
    </div>




        <section>
    <div class="container pt-5 pb-5">
        <div id="company">
            <h1 class="pt-5 pb-5 text-center">Products Partners</h1>
                    <ul class="company_logo text-center">
                        <li><img src="images/lg.png" alt="" class="brandlogo"></li>
                        <li><img src="images/philips.png" alt="" class="brandlogo"></li>                   
                        <li><img src="images/hp.png" alt="" class="brandlogo"></li>
                        <li><img src="images/dell.png" alt="" class="brandlogo"></li>
                        <li><img src="images/hitachi.png" alt="" class="brandlogo"></li>
                        <li><img src="images/bose.png" alt="" class="brandlogo"></li>
                        <li><img src="images/yamaha.png" alt="" class="brandlogo"></li>
                        <li><img src="images/sennheiser.png" alt="" class="brandlogo"></li>
                    </ul>
        </div>
    </div>
    </section>

</div>
</div>


<!-- end content here     -->

    <?php require('footer/footer.php');?>
    
    </div>




    <?php require('footer/component.php');?>
</body>
</html>