<!DOCTYPE html>
<html>
<style>
  body {
    font-family: Arial, Helvetica, sans-serif;
  }

  * {
    box-sizing: border-box;
  }

  /* Full-width input fields */
  input[type=text],
  input[type=password] {
    width: 100%;
    padding: 15px;
    margin: 5px 0 22px 0;
    display: inline-block;
    border: none;
    background: #f1f1f1;
  }

  /* Add a background color when the inputs get focus */
  input[type=text]:focus,
  input[type=password]:focus {
    background-color: #ddd;
    outline: none;
  }

  /* Set a style for all buttons */
  button {
    background-color: #04AA6D;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
    opacity: 0.9;
  }

  button:hover {
    opacity: 1;
  }

  /* Extra styles for the cancel button */
  .cancelbtn {
    padding: 14px 20px;
    background-color: #f44336;
  }

  /* Float cancel and signup buttons and add an equal width */
  .cancelbtn,
  .signupbtn {
    float: left;
    width: 50%;
  }

  /* Add padding to container elements */
  .container {
    padding: 16px;
  }

  /* The Modal (background) */
  .modal {
    display: none;
    /* Hidden by default */
    position: fixed;
    /* Stay in place */
    z-index: 1;
    /* Sit on top */
    left: 0;
    top: 0;
    width: 100%;
    /* Full width */
    height: 100%;
    /* Full height */
    overflow: auto;
    /* Enable scroll if needed */
    background-color: #474e5d;
    padding-top: 50px;
  }

  /* Modal Content/Box */
  .modal-content {
    background-color: #fefefe;
    margin: 5% auto 15% auto;
    /* 5% from the top, 15% from the bottom and centered */
    border: 1px solid #888;
    width: 80%;
    /* Could be more or less, depending on screen size */
  }

  /* Style the horizontal ruler */
  hr {
    border: 1px solid #f1f1f1;
    margin-bottom: 25px;
  }

  /* The Close Button (x) */
  .close {
    position: absolute;
    right: 35px;
    top: 15px;
    font-size: 40px;
    font-weight: bold;
    color: #f1f1f1;
  }

  .close:hover,
  .close:focus {
    color: #f44336;
    cursor: pointer;
  }

  /* Clear floats */
  .clearfix::after {
    content: "";
    clear: both;
    display: table;
  }

  /* Change styles for cancel button and signup button on extra small screens */
  @media screen and (max-width: 300px) {

    .cancelbtn,
    .signupbtn {
      width: 100%;
    }
  }
</style>

<body>
  <form class="modal-content" method="post" enctype="multipart/form-data">
    <div class="container">
      <h1>Sign Up</h1>
      <p>Please fill in this form to create an account</p>
      <hr>
      <label for="name"><b>Name</b></label>
      <input type="text" placeholder="Enter Name" name="name" required>

      <label for="address"><b>Addess</b></label>
      <input type="text" placeholder="Enter Address" name="address" required>

      <label for="phone"><b>Phone No.</b></label>
      <input type="text" placeholder="Enter PhoneNumber" name="phone" required>

      <label for="email"><b>Email</b></label>
      <input type="text" placeholder="Enter Email" name="email" required>

      <label for="psw"><b>Password</b></label>
      <input type="password" id="password" name="password" placeholder="enter a strong password" required=""><span id="p1" style="font-size: 12px"></span><br><input type="checkbox" onclick="fun1()">Show password
      <br><br>
      <label for="date"><b>Date of Birth</b></label>
      <input type="date" placeholder="Enter Date" name="date" required><br>
      <br><br>
      <label for="gender"><strong>Gender</strong></label>
      <input type="radio" name="gender" value="male">Male
      <input type="radio" name="gender" value="Female">Female
      <label>
        <br><br>
        <label for="nationality"><b>Nationality</b></label>
        <input type="radio" name="nation" id="nation" value="indian" onclick="disableTxt()">INDIAN
        <input type="radio" name="nation" id="nation" onclick="undisableTxt()">OTHER
        <input type="text" name="nation" id="myText">

        <br><br>
        <label for="profession"><b>Profession</b></label>
        <input type="radio" name="profession" value="student">Student
        <input type="radio" name="profession" value="Teacher">Teacher
        <br><br>
        <label for="file"><b>Upload Image</b></label>
        <input type="file" name="image" id="image">
        <br><br><br>
        <p>By creating an account you agree to our <a href="<?php echo base_url() . 'index.php/Project/ourview' ?>" style="color:dodgerblue">Terms & Privacy</a>.</p>

        <div class="clearfix">
          <a href="<?php echo base_url() . 'index.php/Project/showdata' ?>"><input type="button" class="cancelbtn" value="Cancel"></a>
          <input type="submit" class="cancelbtn" name="submit" value="Signup">
        </div>
  </form>
  </div>

  <script type="text/javascript">
    function disableTxt() {
      document.getElementById("myText").disabled = true;
    }

    function undisableTxt() {
      document.getElementById("myText").disabled = false;
    }

    function fun1() {
      var a = document.getElementById("password");
      if (a.type === "password") {
        a.type = "text";
      } else {
        a.type = "password";
      }
    }
  </script>
</body>

</html>