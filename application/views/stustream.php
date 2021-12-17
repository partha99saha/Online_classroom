<!DOCTYPE html>
<html>
<title>Stream</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-blue-grey.css">
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
html, body, h1, h2, h3, h4, h5 {font-family: "Open Sans", sans-serif}
</style>
<body class="w3-theme-l5">

<!-- Navbar -->
<div class="w3-top">
 <div class="w3-bar w3-theme-d2 w3-left-align w3-large">
  <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large w3-theme-d2" href="javascript:void(0);"><i class="fa fa-bars"></i></a>
  <a href="<?php echo base_url().'index.php/Project/secondpage'?>" class="w3-bar-item w3-button w3-padding-large w3-theme-d4"><i class="fa fa-home w3-margin-right"></i>Home</a>

  <a href="#" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white" title="STREAM"><i class="fa fa-globe"></i>Stream</a>

  <a href="<?php echo base_url().'index.php/Project/stupeople'?>" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white" title="PEOPLE"><i class="fa fa-user"></i>People</a>

  <a href="<?php echo base_url().'index.php/Project/stuclasswork'?>" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white" title="CLASSWORK"><i class="fa fa-envelope"></i>Classwork</a>

  <a href="#" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white" title="Student"><i class="fa fa-university"></i>Student</a>
    
</div>
</div>

<div class="w3-container w3-content" style="margin-top:80px">    
  <div class="w3-row"> 
    </div>
    <div class="w3-col m12">
    <div class="w3-container w3-card w3-white w3-round w3-margin"><br>
    <table border="0" cellspacing="0" cellpadding="0" class="w3-col m10">
    <tr><th>Email</th>
        <th>Stream</th>
        <th>Files</th>
    </tr> 
  <!-- <?php
  foreach ($data as $result) {
  ?> -->
  <tr>
  <td><?php echo $result['email'] ?></td>
  <td><?php echo $result['stream']?></td>
  <td><?php echo $result['file']?></td>
  </tr>
  <!-- <?php
  }
  ?> -->
</table>
<hr class="w3-clear">        
</div>
</div>
      <div class="w3-row-padding">
        <div class="w3-col m12">
          <div class="w3-card w3-round w3-white">
            <div class="w3-container w3-padding">
              <form method="post" enctype="multipart/form-data">
              <input type="text" class="w3-col m10 " name="text"><br><br>
              <input type="file" class="w3-button" name="file">
              <input type="submit" class="w3-button w3-theme" name="submit" value="send">
            </form>
            </div>
          </div>
        </div>
      </div>
      </div>
    </div>
<br>
</script>

</body>
</html> 
