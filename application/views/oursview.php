<!DOCTYPE html>
<html>
<title>Ours View</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>
body {font-family: "Times New Roman", Georgia, Serif;}
h1, h2, h3, h4, h5, h6 {
  font-family: "Playfair Display";
  letter-spacing: 5px;
}
</style>
<body>
 <!-- Navbar (sit on top) --> 
<div class="w3-top">
  <div class="w3-bar w3-white w3-padding w3-card" style="letter-spacing:4px;">
    <a href="#home" class="w3-bar-item w3-button"><b style="color:green;font-size:18px;">Oursview</b></a>
    <!-- Right-sided navbar links. Hide them on small screens -->
    <div class="w3-right w3-hide-small">
      <a href="#about" class="w3-bar-item w3-button"></a>
      <a href="#menu" class="w3-bar-item w3-button"></a>
      <a href="#contact" class="w3-bar-item w3-button"></a>
    </div>
  </div>
</div>

<!-- Header -->
<header class="w3-display-container w3-content w3-wide" style="max-width:1600px;min-width:500px" id="home">
  <img class="w3-image" src="/w3images/hamburger.jpg" alt="Hamburger Catering" width="1600" height="800">
  <div class="w3-display-bottomleft w3-padding-large w3-opacity">
    <h1 class="w3-xxlarge">Le Catering</h1>
  </div>
</header>

<!-- Page content -->
<div class="w3-content" style="max-width:1100px">

  <!-- About Section -->
  <div class="w3-row w3-padding-40" id="about">
    <div class="w3-col m6 w3-padding-large w3-hide-small">
     <img src="<?php echo base_url()?>image/Screenshot 2021-07-17 205241.jpg" class="w3-round w3-image w3-opacity-min" alt="Table Setting" width="600" height="750">
    </div>

    <div class="w3-col m6 w3-padding-large">
      <h1 class="w3-center">About our project</h1>
      <p class="w3-large"><b style="color:blue;">Project Title:</b> My Classroom<br>
        <b style="color:blue;">Programming Language:</b> PHP7<br>
        <b style="color:blue;">Database:</b> MySQL<br>
        <b style="color:blue;">Framework:</b> Codeigniter
      </p>
    </div>
  </div>
  <!-- Menu Section -->
  <div class="w3-row w3-padding-40" id="menu">
    <div class="w3-col l6 w3-padding-large">
      <h1 class="w3-center">About US</h1>
      <p style="font-size:17px;">We are the B.Tech passout student.We are take PHP training to gain our knowldge on Wed development. After that we develop this site by our learing knowledge. Our main purpose is that anyone can access this online classroom very easily.This is the very simple online class portal. It will Communicate with the Teacher and Student very simply and very well.</p> 
    </div>
    <div class="w3-col l6 w3-padding-large">
      <img src="<?php echo base_url()?>image/download.jpg" class="w3-round w3-image w3-opacity-min" alt="Menu" style="width:100%">
    </div>
  </div>
<!--   privacy policy -->
<div class="w3-row w3-padding-40" id="about">
    <div class="w3-col m6 w3-padding-large w3-hide-small">
     <img src="<?php echo base_url()?>image/privacy_policy2.png" class="w3-round w3-image w3-opacity-min" alt="Table Setting" width="600" height="750">
    </div>
    <div class="w3-col m6 w3-padding-large">
      <h1 class="w3-center">Privacy Policy</h1>
      <ul style="font-size:17px">
        <li>This Privacy Policy is meant to help you understand what information we collect, why we collect it and how you can update, manage, export and delete your information.</li>
        <li>This Privacy Policy applies to the online services offered by My Classroom. These are henceforth collectively known as Services.</li>
        <li>When you use our services, you’re trusting us with your information. We understand that this is a big responsibility and we work hard to protect your information and put you in control.</li>
        <li>When you create a Account, you provide us with personal information that includes your name and a password. You can also choose to add a phone number  to your account.You might choose to provide us with information – like an email address to receive updates about our services.</li>
      </ul>
      <p>
      </p>
    </div>
  </div>
<!-- terms of service -->
  <div class="w3-row w3-padding-40" id="menu">
      <h1 class="w3-center">Terms of Service</h1>
      <ul style="font-size:17px">
        <li>Proper credit of the content owner has been given on the pdf files that are hosted by us. Drop us an email if you want it to be removed from here.</li>
        <li>If you have found any broken link, please feel free to report us at team@myclassroom.com.</li>
        <li>Copyright: “Copyright” literally means the right to copy but has come to mean that body of exclusive rights granted by law to copyright owners for protection of their work. Copyright protection does not extend to any idea, procedure, process, system, title, principle, or discovery. Similarly, names, titles, short phrases, slogans, familiar symbols, mere variations of typographic ornamentation, lettering, coloring, and listings of contents or ingredients are not subject to copyright.</li>
        <li>The Study Materials that are available on MyClassroom are mostly aggregated from different teachers that are available on this classroom. Do whatever you want at your own responsibility.</li>
        <li>Copyright Infringement: Copyright Infringement occurs when a copyrighted work is reproduced, distributed, performed, publicly displayed, or made into a derivative work without the permission of the copyright owner.</li>
        <i>We hope that you will join us to help us grow this community for a change in the education system.</i><br>
           <b>Please email us at psaha.bdn9@gmail.com for any takedown request.</b>
      </ul> 
    </div>
    <div class="w3-container w3-padding-50" id="contact">
    <h1 >Feedback</h1>
    <form  method="post">
      <p><input class="w3-input w3-padding-10" type="text" placeholder="Name" required name="name"></p>
      <p><input class="w3-input w3-padding-10" type="email" placeholder="Your eamil" required name="email"></p>
      <p><input class="w3-input w3-padding-10" type="date" placeholder="Date and time" required name="date"></p>
      <p><input class="w3-input w3-padding-10" type="text" placeholder="Write your Message" required name="msg"></p>
      <p><input class="w3-button w3-light-grey w3-section" type="submit" name="submit" value="Send"></p>
    </form>
  </div>
</div>

</body>
</html>
