<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Domestic Packages</title>
    
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

<img src="pic1.jpg">

<br><br>
<br><br>
<h1 style="color: #1A1F71;text-align: center;">Domestic Packages</h1>
<br><p style="color: #5C5C5C;text-align: center;">
    SeleQtions has a wide range of domestic packages for you to select. <br>Explore our wide range of budget-friendly airline packages right from Delhi to Kanyakumari and from Ahmedabad to Orissa</p>
<br><br><br>

<div class="card-deck">
  <div class="card text-center" >
    <img src="maharashtra.jpg" class="card-img-top" alt="..." height="280px">
    <div class="card-body">
      <h5 class="card-title" style="color: #1A1F71">Maharashtra</h5>
      <p class="card-text" style="color: #5C5C5C">Get,set Go for a wonderful 3-day 4-night package of various tourist destinations in Maharashtra.</p>
      <a href="maharashtra.php" class="btn btn-primary" style="text-align: center;">View Packages</a>
    </div>
  </div>
    <div class="card text-center" >
    <img src="goa.jpg" class="card-img-top" alt="..." height="280px">
    <div class="card-body">
      <h5 class="card-title"style="color: #1A1F71">Gujarat and Goa</h5>
      <p class="card-text" style="color: #5C5C5C">Gujarat and Goa, a cosmopolitan meeting of West and Central West.Relax at the beaches of Goa.</p>
      <a href="gujarat.php" class="btn btn-primary" style="text-align: center;">View Packages</a>
    </div>
  </div>
  <div class="card text-center">
    <img src="tel.jpg" class="card-img-top" alt="..." height="280px">
    <div class="card-body">
      <h5 class="card-title" style="color: #1A1F71">Telangana and Andhra Pradesh</h5>
      <p class="card-text" style="color: #5C5C5C">Telangana and Andhra Pradesh, where Tradition, Culture and the Future meet.</p>
      <a href="tel.php" class="btn btn-primary" style="text-align: center;">View Packages</a>
    </div>
  </div>
</div>
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