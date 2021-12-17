<!DOCTYPE html>
<html>
<title>My claaroom</title>
<meta charset="UTF-8"> 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-black.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<body id="myPage">
<!-- Navbar -->
<div class="w3-top">
 <div class="w3-bar w3-theme-d2 w3-left-align">
  <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-hover-white w3-theme-d2" href="javascript:void(0);" onclick="openNav()"><i class="fa fa-bars"></i></a>
  <a href="#" class="w3-bar-item w3-button w3-teal"><i class="fa fa-home w3-margin-right"></i>Home</a>
  <a href="<?php echo base_url().'index.php/Project/ourview'?>" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Our's view</a>
  <a href="<?php echo base_url().'index.php/Project/logindata'?>" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Note</a>
    <div class="w3-dropdown-hover w3-hide-small">
    <button class="w3-button" title="Notifications">Class <i class="fa fa-caret-down"></i></button>     
    <div class="w3-dropdown-content w3-card-4 w3-bar-block">
      <a href="<?php echo base_url().'index.php/Project/logindata'?>" class="w3-bar-item w3-button">Join Class</a>
      <a href="<?php echo base_url().'index.php/Project/logindata'?>" class="w3-bar-item w3-button">Create Class</a>
    </div>
  </div>
  <a href="<?php echo base_url().'index.php/Project/logindata'?>" class="w3-bar-item w3-button w3-hide-small w3-right w3-padding-large w3-hover-white" title="My Account">
  <img src="<?php echo base_url()?>image/avatar.png" class="w3-circle" style="height:15px;width:20px" alt="profile">
  </a>
 </div>
 </div>

<!-- Image Header -->
<div class="w3-display-container w3-animate-opacity">
  <img src="<?php echo base_url()?>image/study-material-sharing.png" alt="account" style="width:100%;min-height:350px;max-height:600px;">
  
  </div>
</div>
 
<!-- Footer -->
<footer class="w3-container w3-padding-32 w3-theme-d1 w3-center">
  <div class="w3-padding-64 w3-content w3-text-grey" id="contact">
  <div class="w3-row">
    <div class="w3-col m5">
    <div class="w3-padding-16"><span class="w3-xlarge w3-border-teal w3-bottombar">Contact Us</span></div>
      <h3>Address</h3>
      <p>Saltlate Sector-V</p>
      <p><i class="fa fa-map-marker w3-text-teal w3-xlarge"></i>  KOLKATA, IND</p>
      <p><i class="fa fa-phone w3-text-teal w3-xlarge"></i>  +91 7477470500</p>
      <p><i class="fa fa-envelope-o w3-text-teal w3-xlarge"></i> psaha.bdn9@gmail.com</p>
    </div>
    <div class="w3-col m7">
      <h4>Follow Us</h4>
  <a class="w3-button w3-large w3-teal" href="https://www.facebook.com/parthasaha99/" title="Facebook"><i class="fa fa-facebook"></i></a>
  <a class="w3-button w3-large w3-teal" href="https://twitter.com/search-home?lang=en" title="Twitter"><i class="fa fa-twitter"></i></a>
  <a class="w3-button w3-large w3-teal w3-hide-small" href="https://www.linkedin.com/in/partha-saha-52446216b/" title="Linkedin"><i class="fa fa-linkedin"></i></a>
    </div>
  </div>
</div>
</footer>

</body>
</html>
