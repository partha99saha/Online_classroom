<!DOCTYPE html>
<html>
<title>Join class</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<body>

<form class="w3-container w3-card-4 w3-light-grey w3-text-blue w3-margin" method="post">
<h2 class="w3-center"><b style="color:orange;">Join class</b></h2>
<div class="w3-row w3-section">
<div class="w3-col" style="width:50px"></div>
    <div class="w3-rest">
      <b style="font-size:18px; color: blue;">Class Name</b><br>
      <input class="w3-input w3-border" name="class_name" type="text" placeholder="Ask your teacher for the class Name, then enter it here." required>
    </div>
    <div class="w3-rest">
      <b style="font-size:18px; color: blue;">Class code</b><br>
      <input class="w3-input w3-border" name="classcode" type="text" placeholder="Ask your teacher for the class code, then enter it here." required>
    </div>
    <div class="w3-rest">
      <b style="font-size:18px; color: blue;">User Email</b><br>
      <input class="w3-input w3-border" name="email" type="email" placeholder="Enter your register email id" required>
    </div>
    <br>
    <h4 style="color:black">To sign in with a class code</h4>
    <ul>
      <li>Use an authorised account</li>
      <li>Use a class code with 5-7 letters or numbers, and no spaces or symbols</li>
    </ul>
    <p class="w3-center">
      <input type="submit" name="submit" value="Join">
      <a href="<?php echo base_url().'index.php/Project/secondpage'?>"><input type="button" class="cancelbtn" value="Cancel"></a>
    </p>
</form>
</body>
</html> 
