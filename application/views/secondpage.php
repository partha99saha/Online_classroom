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
 Navbar
<div class="w3-top">
 <div class="w3-bar w3-theme-d2 w3-left-align">
  <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-hover-white w3-theme-d2" href="javascript:void(0);" onclick="openNav()"><i class="fa fa-bars"></i></a>
  <a href="#" class="w3-bar-item w3-button w3-teal"><i class="fa fa-home w3-margin-right"></i>Home</a>
  <a href="<?php echo base_url().'index.php/Project/ourview'?>" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Our's view</a>
  <a href="<?php echo base_url().'index.php/Project/reminder'?>" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Note</a>
  <div class="w3-dropdown-hover w3-hide-small">
    <button class="w3-button" title="Notifications">Class <i class="fa fa-caret-down"></i></button>     
    <div class="w3-dropdown-content w3-card-4 w3-bar-block">
      <a href="<?php echo base_url().'index.php/Project/joinclass'?>" class="w3-bar-item w3-button">Join Class</a>
      <a href="<?php echo base_url().'index.php/Project/createclass'?>" class="w3-bar-item w3-button">Create Class</a>
    </div>
  </div>
  <div class="w3-bar-item w3-button w3-hide-small w3-right w3-padding-small w3-hover-white">
  <div class="w3-dropdown-hover w3-hide-small"> 
  <button class="w3-button" title="Notifications">Profile <i class="fa fa-caret-down"></i>
  <img src="<?php echo base_url()?>image/avatar.png" class="w3-circle" style="height:15px;width:20px" alt="profile"></button>
  <div class="w3-dropdown-content w3-card-4 w3-bar-block">
      <a href="<?php echo base_url().'index.php/Project/editdata'?>" class="w3-bar-item w3-button">Manage Account</a>
      <a href="<?php echo base_url().'index.php/Project/logout'?>" class="w3-bar-item w3-button">Logout</a>
  </div>
 </div>
</div>
 </div>
</div>

<div class="w3-container w3-content" style="margin-top:60px">    
  <div class="w3-container  w3-sky w3-round w3-margin"><br>
  <table border="1" cellpadding="0" cellspacing="0" class="w3-col m10">
  <tr>
    <th>Email</th>
    <th>Classname</th>
    <th>Subject</th>
    <th>Classcode</th>
    <th>Action</th>
  </tr> 
  <?php
  foreach ($data as $result) {
  ?>
  <tr>
  <td><?php echo $result['email']?></td>
  <td><?php echo $result['classname']?></td>
  <td><?php echo $result['subject']?></td>
  <td><?php echo $result['classcode']?></td>
  <td><a href="teachstream"><button>OPEN</button></a>
  <a href="deleteclass?del=<?php echo $result['id']?>"><button>DELETE</button></a>
  </tr>
  <?php
  }
  ?>
</table>
</div>
</div>

</style>
</body>
</html>
