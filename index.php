<?php
include "connection.php";


$query = "SELECT * FROM add_notification ORDER BY id desc";
$result = $con->query($query);
?>



<!DOCTYPE html>
<!--
Template Name: Academic Education V2
Author: <a href="http://www.os-templates.com/">OS Templates</a>
Author URI: http://www.os-templates.com/
Licence: Free to use under our free template licence terms
Licence URI: http://www.os-templates.com/template-terms
-->
<html>
<head>
<title>Home</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="student/layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
</head>

<body id="top">
<!-- ################################################################################################ --> 
<!-- ################################################################################################ --> 
<!-- ################################################################################################ -->
<div class="wrapper row0">
  <div id="topbar" class="clear"> 


  </div>
</div>

      <style type="text/css">

.mainav1 {}
.mainav1 {z-index:9999; position:absolute; width:250px; max-height: 250px;
    overflow-y: scroll;}
.mainav1 {display:none;}
.mainav1 :hover > ul{display:block;}
div.b {
  line-height: 2;
  background-color: #e3f4d7;
  font-weight: bold;
}
div.c {
  line-height: 2;
}

.container1 {
    padding: 20px 10px;
    height: 200px
}

hr.new5 {
  border: 5px solid rgba(105, 105, 105, 0.93);
  border-radius: 5px;
  position: relative;
    bottom: 15px;
}

hr.new6 {
  border: 5px solid rgba(105, 105, 105, 0.93);
  border-radius: 5px;
  position: relative;
    bottom: 1px;
}
   </style>

   <style>
* {box-sizing: border-box;}
body {}
.mySlides {display: none;}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 1200px;
  position: relative;
  margin: auto;
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

/*.active {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
}
</style>
<!-- ################################################################################################ --> 
<!-- ################################################################################################ --> 
<!-- ################################################################################################ -->
<div class="wrapper row1">
  <header id="header" class="clear"> 
    <!-- ################################################################################################ -->
    <div id="logo" class="fl_left">
      <h1><a href="index.html">Students' Union</a></h1>
    </div>
  </header>
</div>

<?php include 'header1.php'; ?>

<div class="wrapper">
  <div id="slider">
    <div id="slide-wrapper" class="rounded clear"> 

      <figure id="slide-1">

        <div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 4</div>
  <img src="student/images/demo/slider/4.jpg">
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 4</div>
  <img src="student/images/demo/slider/2.jpg">
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 4</div>
  <img src="student/images/demo/slider/3.jpg">
</div>

<div class="mySlides fade">
  <div class="numbertext">4/ 4</div>
  <img src="student/images/demo/slider/1.jpg">
</div>

</div>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>

      </figure>





    </div>
  </div>
</div>

<div class="wrapper row3">
  <div class="rounded">
    <main class="container1 clear"> 
      <!-- main body --> 


        <!-- / Left Column --> 
        <!-- Middle Column -->


          <h1><font size="4" color="#000"><b>About Website & Students Union</b></font></h1>
          <hr class="new5">
          <center>


              <div>
              <p><font size="4">This web application is used to manage all kinds of students’ union activities such as arts, sports, union inauguration etc.  This website is very easy to manage and executed especially for managing sports and arts activities. This application facilitates the students to register their candidateship in the programmes. It is efficient and user friendly to manage time consumption. Also this system notifies new events conducted by students’ union.</font></p></div>

          </center> <hr class="new6">



 
          <!-- ################################################################################################ -->


            <ul class="nospace quickinfo">
            <marquee direction="up" scrollamount="3" onmouseover="this.stop();"
              onmouseout="this.start();">
              <?php
                    while($rows = $result->fetch_assoc()) 
                    {

                    ?>
            <li class="clear"><a href="#"><div class="b">&nbsp;<?php  echo $rows['title']; ?></div>

            <div class="c"> &nbsp;<?php  echo $rows['message']; ?></div>

            &nbsp;<i class="fa fa-calendar" aria-hidden="true"></i>&nbsp;&nbsp;<?php  echo $rows['date']; ?></a>
            </li>

                    <?php
                
                    }

                    ?>
            </marquee>
            </ul>
 




          <!-- ################################################################################################ --> 
        </div>
        <!-- / Middle Column --> 
        <!-- Right Column -->

        <!-- / Right Column --> 
      </div>

      <!-- / main body -->
      <div class="clear"></div>
    </main>
  </div>

  <script>
var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 4000); // Change image every 2 seconds
}
</script>

<!-- JAVASCRIPTS --> 
<script src="layout/scripts/jquery.min.js"></script> 
<script src="layout/scripts/jquery.fitvids.min.js"></script> 
<script src="layout/scripts/jquery.mobilemenu.js"></script> 
<script src="layout/scripts/tabslet/jquery.tabslet.min.js"></script>
</body>
</html>