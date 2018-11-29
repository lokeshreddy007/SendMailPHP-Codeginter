<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<meta content="text/html; charset=iso-8859-2" http-equiv="Content-Type">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <title>home</title>

<style>
body, html {
    height: 100%;
    font-family: Arial, Helvetica, sans-serif;
}

* {
    box-sizing: border-box;
}

.bg-img {
    /* The image used */
    background-image: url( "http://localhost/home/images/1.jpg");

    min-height: 600PX;

    /* Center and scale the image nicely */
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    position: relative;
    max-width:100%;
}

/* Add styles to the form container */
.container {
    position: absolute;
    right: 0;
    margin: 20px;
    max-width: 300px;
    padding: 16px;
    background-color: white;
}

/* Full-width input fields */
input[type=text], input[type=password] {
    width: 100%;
    padding: 15px;
    margin: 5px 0 22px 0;
    border: none;
    background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
    background-color: #ddd;
    outline: none;
}

/* Set a style for the submit button */
.btn {
    background-color: #4CAF50;
    color: white;
    padding: 16px 20px;
    border: none;
    cursor: pointer;
    width: 100%;
    opacity: 0.9;
}

.btn:hover {
    opacity: 1;
}
</style>

<style>
@import url(https://fonts.googleapis.com/css?family=Roboto:300);

.login-page {
  width: 360px;
  padding: 8% 0 0;
  /* margin: auto; */
  margin-left:69em;
}
.form {
  position: relative;
  z-index: 1;
  background: #FFFFFF;
  max-width: 360px;
  margin: 0 auto 100px;
  padding: 45px;
  text-align: center;
  box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
}
.form input {
  font-family: "Roboto", sans-serif;
  outline: 0;
  background: #f2f2f2;
  width: 100%;
  border: 0;
  margin: 0 0 15px;
  padding: 15px;
  box-sizing: border-box;
  font-size: 14px;
}

.form button:hover,.form button:active,.form button:focus {
  background: #43A047;
}
.form .message {
  margin: 15px 0 0;
  color: #b3b3b3;
  font-size: 12px;
}
.form .message a {
  color: #4CAF50;
  text-decoration: none;
}
.form .register-form {
  display: none;
}
.container {
  position: relative;
  z-index: 1;
  max-width: 300px;
  margin: 90 auto;
}
.container:before, .container:after {
  content: "";
  display: block;
  clear: both;
}
.container .info {
  margin: 50px auto;
  text-align: center;
}
.container .info h1 {
  margin: 0 0 15px;
  padding: 0;
  font-size: 36px;
  font-weight: 300;
  color: #1a1a1a;
}
.container .info span {
  color: #4d4d4d;
  font-size: 12px;
}
.container .info span a {
  color: #000000;
  text-decoration: none;
}
.container .info span .fa {
  color: #EF3B3A;
}
.form button {
  font-family: "Roboto", sans-serif;
  text-transform: uppercase;
  outline: 0;
  background: #4CAF50;
  width: 100%;
  border: 0;
  padding: 15px;
  color: #FFFFFF;
  font-size: 14px;
  -webkit-transition: all 0.3 ease;
  transition: all 0.3 ease;
  cursor: pointer;
}
.image2{
   display: none;
}

@media only screen and (max-width: 500px){ //some value
   .image1{
     display: none;
   }

   .image2{
     display: block;
   }
}

body {

}

    </style>
    <style>
* {
    box-sizing: border-box;
}

.column {
    float: left;
    width: 30%;
    padding: 11em;
}

/* Clearfix (clear floats) */
.row::after {
    content: "";
    clear: both;
    /* display: table; */
}

#ThumbnailCarousel img {

}

#ThumbnailCarousel div {
    height:250px;
    width:100%;
}

#ThumbnailCarousel.carousel {
    padding-top:40px;
    text-align:center;
}

.col-md-3 .img-thumbnail {
    height:100%;
}


#videosList {
 max-width: 600px; 
  overflow: hidden;
}

.video {
 
}

/* Hide Play button + controls on iOS */
video::-webkit-media-controls {
    display:none !important;
}

/* videoslider */


/* videoslider */


.jumbotron {
  background-color:white;
}



</style>
</head>
<body>

<!-- <h2 class="w3-center">Automatic Slideshow</h2> -->

<div class="w3-content w3-section bg-img" style="margin-top:0px;">
  <!-- <img class="mySlides" src="images/1.jpg" style="width:100%"> -->
  
  <form action="<?php echo base_url() ; ?>SendEmailController/sendEmail"  class="container" style="float:right; margin-right:20px; width:900px;" method="POST">
    <h1 style="font-size: 19px;color:#1886e0;">We're so happy you're here.</br>May we inspire you again tomorrow?  </h1>

   
   <?php 
         echo $this->session->flashdata('email_sent');
  ?> 
   <!-- <label for="name"><b>NAME</b></label> -->
    <input type="text" placeholder="Enter Name" name="name" required>
   <!-- <label for="email"><b>EMAIL</b></label> -->
    <input type="text" placeholder="Enter Email" name="email" required>

    
    <!-- <label for="phone"><b>PHONE NUMBER</b></label> -->
    <input type="text" placeholder="Enter Phone" name="phone" required>
    <div class="form-group">
    <textarea class="form-control" rows="5" id="comment" placeholder="Enter Address"></textarea>
  </div>

 

    <button type="submit" class="btn">SUBMIT</button>
  </form>
  <!-- <img class="mySlides" src="images/4.jpg" style="width:100%">
  <img class="mySlides" src="images/5.jpg" style="width:100%">
  <img class="mySlides" src="images/6.jpg" style="width:100%">
  <img class="mySlides" src="images/7.jpg" style="width:100%"> -->
  
</div>
<!-- jumbotron -->

<div class="jumbotron" style="margin-top: 10px;padding-top: 0px;">
<br><br>
  <center><h1 style="color:black">What We Provide</h1> </center>
<br>

<div class="row" style="Margin-left:20px">

<div class="col-md-3 id="videosList">           
<div class="video">
    <video class="thevideo" loop preload="none"  width="320" height="240">
      <source src="<?php echo base_url(); ?>videos/modularkitchen.mp4" type="video/mp4">
    </video>
  </div>
  <center><p><strong>Modular kitchens</strong></p></center>
</div>

<div class="col-md-3 id="videosList">           
<div class="video">
    <video class="thevideo" loop preload="none"  width="320" height="240">
      <source src="<?php echo base_url(); ?>videos/wardrobe.mkv" type="video/mp4">
    </video>
  </div>
  <center><p><strong>Wardrobes</strong></p></center>
</div>
<div class="col-md-3 id="videosList">           
<div class="video">
    <video class="thevideo" loop preload="none"  width="320" height="240">
      <source src="<?php echo base_url(); ?>videos/crockery.mp4" type="video/mp4">
    </video>
  </div>
  <center><p><strong>Crockerys units</strong></p></center>
</div>
<div class="col-md-3 id="videosList">           
<div class="video">
    <video class="thevideo" loop preload="none"  width="320" height="240">
      <source src="<?php echo base_url(); ?>videos/Entertainment.mkv" type="video/mp4">
    </video>
  </div>
  <center><p><strong>Entertainment units</strong></p></center>
</div>
<div class="row" style="Margin-left:-7px">
<div class="col-md-3 id="videosList">           
<div class="video">
    <video class="thevideo" loop preload="none"  width="320" height="240">
      <source src="<?php echo base_url(); ?>videos/StudyTable.mkv" type="video/mp4">
    </video>
  </div>
  <center><p><strong>Study Tables</strong></p></center>
</div>
<div class="col-md-3 id="videosList">           
<div class="video">
    <video class="thevideo" loop preload="none"  width="320" height="240">
      <source src="<?php echo base_url(); ?>videos/wallpaint.mp4" type="video/mp4">
    </video>
  </div>
  <center><p><strong>Wall Paints</strong></p></center>
</div>
<div class="col-md-3 id="videosList">           
<div class="video">
    <video class="thevideo" loop preload="none"  width="320" height="240">
      <source src="<?php echo base_url(); ?>videos/ceeling.mp4" type="video/mp4">
    </video>
  </div>
  <center><p><strong>Ceelings</strong></p></center>
</div>
<div class="col-md-3 id="videosList">           
<div class="video">
    <video class="thevideo" loop preload="none"  width="320" height="240">
      <source src="<?php echo base_url(); ?>videos/beds.mp4" type="video/mp4">
    </video>
  </div>
  <center><p><strong>Bed Cots</strong></p></center>
</div>

<script>
var figure = $(".video").hover( hoverVideo, hoverVideo1 );

function hoverVideo(e) {  
    $('video', this).get(0).play(); 
}

function hoverVideo1(e) {
    $('video', this).get(0).pause(); 
}
</script>

</div>
</div>
 </div>
 
<!-- jumbotron -->

<!-- our services -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<style>
.container2 {
    position: relative;
    text-align: center;
    color: black;
    
  
}

.bottom-left {
    position: absolute;
    bottom: 8px;
    left: 16px;
}

.top-left {
    position: absolute;
    top: 8px;
    left: 16px;
    font-size:3vw;
    font-weight: bold;
}

.top-right {
    position: absolute;
    top: 8px;
    right: 16px;
    font-size:3vw;
    font-weight: bold;
}

.bottom-right {
    position: absolute;
    bottom: 8px;
    right: 16px;
}

.centered {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
   
  
}
</style>

<center><h2>Our Services</h2></center>


<div class="container2">
  <img src="<?php echo base_url(); ?>images/14.jpg" alt="Snow" style="width:100%;  opacity: 0.9;">
  <!-- <div class="bottom-left">Bottom Left</div> -->
  <div class="top-left" style="text-align: justify;"> 
  <i class="glyphicon glyphicon-user"style="font-weight: bold;margin-top:10px">FreeAdvice</i></br>
  <i class="material-icons" style="font-size:29px">3d_rotation</i>
  <i class="mdi mdi-3d-rotation">3D Visualization</i></br>
  <p class="glyphicon glyphicon-ok-sign"style="font-weight: bold;margin-top:10px">TopQualityMaterials</p></br>

<i class="fa fa-truck"style="font-weight: bold;margin-top:10px">Delivery in 6 Weeks</i>
  <p></p>
  </div>
  <!-- <div class="top-right">Top RightTop </div> -->
  <!-- <div class="bottom-right">Bottom Right</div> -->
  <!-- <div class="centered" style="text-align: justify;"></div> -->
</div>


<!-- our services -->
<style>
body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}
.w3-container{
  
float:right;
margin-top:-110px;

}
.w3-button{
  width:200px;
  height:50px;
  font-size:20px;
  }
</style>
<div class="jumbotron" style="margin-top: 10px;padding-top: 0px;">
<br><br>
  <center><h1 style="color:black"> WHAT WE OFFER</h1> </center>
<br>
<div class=active">
   <div class="w3-container">
   <h1><button class="w3-button w3-red">Free Consultancy</button></h1>
</div> 
</div>
<div class="row" style="Margin-left:100px">

  <div class="col-md-3 ">
    <img src="<?php echo base_url(); ?>images/a.png" alt="Forest" style="width:100px">
    <p style="Margin-right:60px">Agreement </p>
    <p style="margin-left: -55px">(The design and implementa-</br>tion include scope of work)</p>
  </div>
  <div class="col-md-3 " >
    <img src="<?php echo base_url(); ?>images/d.jpg" alt="Snow" style="width:100px">
     <p>Design</p> 
     <p style="margin-left: -55px">(Co-create your interiors </br>with our design experts.)</p>

  </div>
  <div class="col-md-3 ">
  <img src="<?php echo base_url(); ?>images/b.jpg" alt="Mountains" style="width:100px">
  <p>Blue Prints</p>
    
    <p style="margin-left: -55px">(What we Commited we</br>  will keep on your hand)</p>

  </div>
  <div class="col-md-3 ">
    <img src="<?php echo base_url(); ?>images/3d.png" alt="Mountains" style="width:100px">
    <p>3D View</p>
    <p style="margin-left: -60px">(See 3D designs of your ideas.)</p>
  </div>
  
</div>
<div class="row" style="Margin-left:100px">
    <div class="col-md-3 " style="Margin-top:40px">
    <img src="<?php echo base_url(); ?>images/m.jpg" alt="Mountains" style="width:100px">
    <p>Materials</p>
    <p style="margin-left: -55px">(UnCompromised quality of materials what we promised)</p>
   
  </div>
  
  <div class="col-md-3 " style="Margin-top:40px">
    <img src="<?php echo base_url(); ?>images/see.jpg" alt="Mountains" style="width:100px">
    <p>Setup</p>
    <p style="margin-left: -55px">(Relax, while we set up </br>your interiors.)</p>
  </div>
  <div class="col-md-3 " style="Margin-top:40px">
    <img src="<?php echo base_url(); ?>images/in.png" alt="Mountains" style="width:100px">
    <p>Move In</p>
    <p style="margin-left: -55px">(Enjoy your new home.)</p>
  </div>
  <div class="col-md-3 " style="Margin-top:40px">
    <img src="<?php echo base_url(); ?>images/wa.png" alt="Mountains" style="width:100px">
    <p style="Margin-right:60px">Warranty</p>
    <p style="margin-left: -55px">(Warranty for Material Quality )</p>
  </div>
</div>
</div>
 </div>
<!-- about us -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
.container1 {
    position: relative;
    text-align: center;
    color: black;
  
}

.bottom-left {
    position: absolute;
    bottom: 8px;
    left: 16px;
}

.top-left {
    position: absolute;
    top: 8px;
    left: 16px;
}

.top-right {
    position: absolute;
    top: 8px;
    right: 16px;
}

.bottom-right {
    position: absolute;
    bottom: 8px;
    right: 16px;
}

.centered {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    font-size:2vw;
    font-weight: bold;
}
</style>

<center><h2>ABOUT US</h2></center>


<div class="container1">
  <img src="<?php echo base_url(); ?>images/about.jpg" alt="Snow" style="width:100%;  opacity: 0.6;">
  <!-- <div class="bottom-left">Bottom Left</div>
  <div class="top-left">Top Left</div>
  <div class="top-right">Top RightTop </div>
  <div class="bottom-right">Bottom Right</div> -->
  <div class="centered" style="text-align: justify;">HomeLane  is a one-of-a-kind interior customization service for the modern home owner. We offer a sophisticated and immersive interior planning experience through our 3D visualization technology. and ensure you get exactly what was promised through rigorous quality checks, use of trusted quality materials, timely delivery and transparent pricing</div>
</div>





<!-- about us -->

<!-- scripts -->
<script>
var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";  
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}    
    x[myIndex-1].style.display = "block";  
    setTimeout(carousel, 2000); // Change image every 2 seconds
}
</script>



<script>
$('.message a').click(function(){
   $('form').animate({height: "toggle", opacity: "toggle"}, "slow");
});
</script>
    
</body>
</html>


</body>
</html>







