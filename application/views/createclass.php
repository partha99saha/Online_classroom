<!DOCTYPE html>
<html>
<title>Create Class</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<body>

<form class="w3-container w3-card-4 w3-light-grey w3-text-blue w3-margin" method="post">
<h2 class="w3-center"><b style="color: orange;">Create Class</b></h2>
 
<div class="w3-row w3-section">
    <div class="w3-rest">
      <input class="w3-input w3-border" name="class_name" type="text" placeholder="Class Name" required>
    </div>
</div>

<div class="w3-row w3-section">
    <div class="w3-rest">
      <input class="w3-input w3-border" name="section" type="text" placeholder="Section">
    </div>
</div>

<div class="w3-row w3-section">
    <div class="w3-rest">
      <input class="w3-input w3-border" name="subject" type="text" placeholder="Subject">
    </div>
</div>

<div class="w3-row w3-section">
    <div class="w3-rest">
      <input class="w3-input w3-border" name="classcode" type="text" placeholder="Class code" required >
    </div>
</div>

<div class="w3-row w3-section">
    <div class="w3-rest">
      <input class="w3-input w3-border" name="email" type="email" placeholder="user email" required>
    </div>
</div>

<p class="w3-center">
    <input type="submit" name="submit" value="Create">
    <a href="<?php echo base_url().'index.php/Project/secondpage'?>"><input type="button" class="cancelbtn" value="Cancel"></a>
</p>
</form>
</body>
</html> 
