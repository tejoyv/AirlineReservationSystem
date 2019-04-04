<?php

session_start();

?>
<!DOCTYPE html>
<html>
<head>
  <title>Home Page</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" type="text/css" href="style.css">

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!--Bootsrap 4 CDN-->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
    <!--Fontawesome CDN-->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

  <!--Custom styles-->
  <link rel="stylesheet" type="text/css" href="styles.css">

</head>
<body>
<nav class="navbar navbar-expand-lg navbar fixed-top navbar-dark bg-dark">
  <a class="navbar-brand" href="register.php" style="padding-top: 1px;color: yellow;
  "> SeleQtions</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarText">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active" style="padding-right: 10px;">
        <a class="nav-link" href="register.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Reservations</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="contact.html">Contact Us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#" onclick="document.getElementById('id01').style.display='block'">SignUp</a>
      </li>
      <li class="nav-item">
        
      </li>
    </ul>
     <span class="navbar-text">
      <a class="nav-link" href="#" onclick="document.getElementById('id02').style.display='block'">Login</a>
    </span>
  </div>
</nav>

  <div class="collapse" id="navbarToggleExternalContent">
    <div class="bg-dark p-4">
      <h5 class="text-white h4">Collapsed content</h5>
      <span class="text-muted">Toggleable via the navbar brand.</span>
    </div>
  <nav class="navbar navbar-dark bg-dark">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  </nav>
</div>

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" data-interval="3000">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="airplane.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="pic.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="3.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<div class="quote">
  <h2>The United Difference</h2>
  <p style="padding-top: 15px;">Connecting People,Uniting the World</p>
</div>
<div class="w3-row-padding w3-padding-16">
  <div class="w3-third w3-margin-bottom w3-hover-opacity">
    <img src="card1.jpg" alt="card1 image" style="width: 100%;">
    <div class="w3-container w3-white">
      <h3>Domestic Flight Packages</h3>
      <h6 class="w3-opacity">From 50,000 INR</h6>
      <p>Coupon Code : FREEFLY</p>
      <p>Validity till: 30 December,2019</p>
      <a href="domestic.php"><button class="w3-button w3-block w3-black w3-margin-bottom">View Details</button></a>
    </div>
  </div>

  <div class="w3-third w3-margin-bottom w3-hover-opacity">
      <img src="int.jpg" alt="" style="width:100%">
      <div class="w3-container w3-white">
        <h3>International Flight Packages</h3>
        <h6 class="w3-opacity">From 1,00,000 INR</h6>
        <p>Coupon Code : FLTOFFER</p>
        <p>Validity till: 11 May,2019</p>
        <a href="international.php"><button class="w3-button w3-block w3-black w3-margin-bottom">View Details</button></a>
      </div>
    </div>

    <div class="w3-third w3-margin-bottom w3-hover-opacity">
      <img src="cust.jpg" alt="" style="width:100%">
      <div class="w3-container w3-white">
        <h3>Customized Flight Packages</h3>
        <h6 class="w3-opacity">From 2,00,000 INR</h6>
        <p>Coupon Code : MYOFFER</p>
        <p>Validity till: 11 August,2019</p>
        <button class="w3-button w3-block w3-black w3-margin-bottom">View Details</button>
      </div>
    </div>
</div>

<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>


<?php include "registermodal.php";
include "loginmodal.php";
?>

<?php
if(isset($_SESSION['username']))  
{
  include 'loggedinnav.php';
}
else
{
  include 'loggedoutnav.php';
}
?>

<div class="w3-container w3-padding-64 w3-center" id="team">
<h2>OUR TEAM</h2>
<p>Meet the team </p>

</div>

<img src="team.jpg" class="w3-image w3-greyscale-min" style="width:100%">
<!--Contact us form-->
<div class="w3-container w3-content w3-padding-64" style="max-width:800px" id="contact">
  <h2 class="w3-wide w3-center">CONTACT</h2>
  <p class="w3-opacity w3-center"><i>Interested? Want to know more!</i></p>
  <div class="w3-row w3-padding-32">
      <div class="w3-col m6 w3-large w3-margin-bottom">
        <i class="fa fa-map-marker" style="width:30px"></i> New Delhi, India<br>
        <i class="fa fa-phone" style="width:30px"></i> Phone: +91 151515<br>
        <i class="fa fa-envelope" style="width:30px"> </i> Email: seleQtions@gmail.com<br>
      </div>
      <div class="w3-col m6">
        <form action="/action_page.php" target="_blank">
          <div class="w3-row-padding" style="margin:0 -16px 8px -16px">
            <div class="w3-half">
              <input class="w3-input w3-border" type="text" placeholder="Name" required="" name="Name">
            </div>
            <div class="w3-half">
              <input class="w3-input w3-border" type="text" placeholder="Email" required="" name="Email">
            </div>
          </div>
          <input class="w3-input w3-border" type="text" placeholder="Message" required="" name="Message">
          <button class="w3-button w3-black w3-section w3-right" type="submit">SEND</button>
        </form>
      </div>
    </div>
</div>
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
<script>
  

function register(){  
  var user=document.getElementById("uname").value;
  var pass=document.getElementById("pwd").value;
var xhttp = new XMLHttpRequest();
xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      console.log(user);
       // Typical action to be performed when the document is ready:
     /* if (this.responseText=='New record created successfully') {
  window.location.href = "http://localhost:8012/OEP/home.php";
}*/
console.log(this.responseText);
    }
};
xhttp.open("POST", "reg.php", true);
xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
xhttp.send("uname="+user+"&pwd="+pass);
}
</script>



