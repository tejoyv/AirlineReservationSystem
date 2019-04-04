<?php
session_start();
?>


<!DOCTYPE html>
<html>
<head>
	<title>Honkong Packages</title>
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="style.css">
<style>
    .section .row{
    margin-top: 7%;
    margin-bottom: 10%;
}
.section .row .col-md-6{
    background: #f5f5f5;
    margin-right: -2%;
    padding: 5%;
}
.section h3{
    color: #004085;
}
.section p{
    margin-top: 10%;
    color: #545b62;
}
.section img
{
    width: 100%;
}

    .contact-form button{
        background: #25274d;
        color: #fff;
        font-weight: 600;
        width: 25%;
    }
        
    .contact-info{
        margin-top:10%;
    }
    
</style>
</head>
<body>
	<?php
    if(isset($_SESSION['username']))
    {
         include "loggedinnav.php";
    }
    else
    {
         include "loggedoutnav.php";
    }
?>

  <br><br><br>

<img src="place.jpg">
<br><br>
<br><br>
<h1 style="color: #1A1F71;text-align: center;">HongKong</h1>
<br><p style="color: #5C5C5C;text-align: center; font-size: 30px;">
    Meaning “fragrant harbour” in Cantonese, Hong Kong is a deeply rich, multi-faceted and fast-paced city. Today, this former British colony remains one of Asia’s formidable dragons, and a favourite destination for travellers all over the world. From the mega nightclubs in Lan Kwai Fong, to mouth-watering Dim Sum in Tsim Sha Tsui, to the panoramic views of Victoria Harbour, Hong Kong is a city that never fails to surprise.</p>
<br><br><br>

<h1 style="color: #1A1F71;text-align: center;">Budget</h1><br><br>
<p style="color: #5C5C5C;text-align: center; font-size: 30px;">
    The local currency in Hong Kong is the Hong Kong Dollar (HKD).<br>

Based on trip type, your average daily budget would be<br>
Budget – 1200 HKD<br>
Standard – 1550 HKD<br>
Premium – 2500 HKD</p>
<br><br><br>

<div class="row" style="margin:auto;">
	<span style="padding-right: 25%"></span>
	<div class="col-md-6 text-center">
<div class="card-deck">
  <div class="card">
    <img src="https://www.visa.co.in/dam/VCOM/regional/ap/images/icon-destinations-hotel-110x110.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">4 star hotel</h5>
      <p class="card-text">1400 HKD</p>
    </div>
  </div>
  <div class="card" style="padding-left: 40px;">
    <img src="https://www.visa.co.in/dam/VCOM/regional/ap/images/icon-destinations-taxi-110x110.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Taxi per km</h5>
      <p class="card-text">20 HKD</p>
    </div>
  </div>
  <div class="card" style="padding-left:40px; ">
    <img src="https://www.visa.co.in/dam/VCOM/regional/ap/images/icon-destinations-local-coffee-110x110.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Cup of local coffee</h5>
      <p class="card-text">15 HKD</p>
    </div>
  </div>
  <div class="card" style="padding-left: 40px; ">
    <img src="https://www.visa.co.in/dam/VCOM/regional/ap/images/icon-destinations-meal-110x110.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Standard meal</h5>
      <p class="card-text">300 HKD</p>
    </div>
  </div>
</div>
</div>
</div>

<br><br>

<div style="background-color: #1A1F71">
	<br><h2 style="color: #fc0;text-align: center;">Need help in HongKong?</h2>
	<br><br>
	<div style="color: white;text-align: center;font-size:20px">SeleQtion's Global Customer Assistance Service is available 24 hours a day, 7 days a week. <br><br> In HongKong, call our freephone number: Access Code 8000 121 then 866 654 0112<br><br> Or call +1 303 967 1090 from anywhere in the world. </div><br><br>
</div><br><br><br><br>


<br><br>
<footer class="w3-padding-32 w3-black w3-center w3-margin-top">
  <h5>Find Us On</h5>
  <div class="w3-xlarge w3-padding-16">
    <i class="fa fa-facebook-official w3-hover-opacity"></i>
    <i class="fa fa-instagram w3-hover-opacity"></i>
    <i class="fa fa-pinterest-p w3-hover-opacity"></i>
    <i class="fa fa-twitter w3-hover-opacity"></i>
  </div>
  <p>Developed by <a href="#" target="_blank" class="w3-hover-text-green">Tejoy Vachhrajani</a></p>
</footer>

</body>
</html>