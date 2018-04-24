

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Thank You</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style media="screen">
    body{
      background: #fff;
    }
    .thankyou{

    position: relative;
    padding: 0px;
    padding-top: 0px;
    box-shadow: 0px 5px 26px -5px rgba(0,0,0,0.5);
    width: 100%;
    margin: 0 auto;
    border-radius: 10px;
    text-align: center;
    top: 92px;
    overflow: hidden;
      /* border: 1px solid #ccc; */
    }
    .thankyou a{
    padding: 10px;
    display: block;
    text-decoration: none;
    background: #d04343;
    /* background: #99b0f3; */
    color: white;
    width: 150px;
    margin: 0 auto;
    border-radius: 30px;
    box-shadow: 0px 5px 21px -3px rgba(0,0,0,0.5);
    }
    .thankyou h1{
      font-size: 50px;
      color: #d04343;
    }
    .thankyou p{
      font-size: 17px;
      color: grey;
    }
    .like{
      padding: 70px;
      text-align: center;
      background: #d04343;
      transform: rotate(180deg);

    }
    .like img{
      height: 80px;
      width: 80px;

    }
    .content{
      background: #f3f3f3;
      padding: 30px;

    }
    </style>

  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-md-offset-3">
          <div class="thankyou">
            <div class="like">
              <img src="like.png" alt="like">
            </div>
          <div class="content">

            <h1>Sorry!</h1>
            <p>Enquiry Failed! Please have some patience and try again.</p>
              <a href="../index.php">Back to Home</a>
          </div>

        </div>
        </div>
      </div>
    </div>


  </body>
</html>
