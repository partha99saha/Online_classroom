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
  <?php
  foreach ($data as $result) {
  ?>
    <form class="modal-content" method="post" enctype="multipart/form-data">
      <div class="container">
        <h1>Manage Account</h1>
        <p>Please fill to change your Account information</p>
        <hr>
        <label for="name"><b>Name</b></label>
        <input type="text" placeholder="Enter Name" name="name" value="<?php echo $result['name'] ?>">

        <label for="address"><b>Addess</b></label>
        <input type="text" placeholder="Enter Address" name="address" value="<?php echo $result['address'] ?>">

        <label for="phone"><b>Phone No.</b></label>
        <input type="text" placeholder="Enter PhoneNumber" name="phone" value="<?php echo $result['phone'] ?>">

        <label for="email"><b>Email</b></label>
        <input type="text" placeholder="Enter Email" name="email" value="<?php echo $result['email'] ?>">
        <br><br>
        <label for="date"><b>Date of Birth</b></label>
        <input type="date" placeholder="Enter Date" name="date" value="<?php echo $result['date'] ?>"><br>
        <br><br>
        <label for="gender"><strong>Gender</strong></label>
        <input type="radio" name="gender" value="male" <?php if ($result['gender'] == 'male') {
                                                          echo "checked";
                                                        } ?>>Male
        <input type="radio" name="gender" value="Female" <?php if ($result['gender'] == 'female') {
                                                            echo "checked";
                                                          } ?>>Female
        <label>
          <br><br>
          <label for="nationality"><b>Nationality</b></label>
          <input type="radio" name="nation" id="nation" value="indian" <?php if ($result['nationality'] == 'indian') {
                                                                          echo "checked";
                                                                        } ?> onclick="disableTxt()">INDIAN<br>
          <input type="radio" name="nation" id="nation" <?php if ($result['nationality'] == 'other') {
                                                          echo "checked";
                                                        } ?> onclick="undisableTxt()">OTHER
          <input type="text" name="nation" id="myText" value="<?php echo $result['nationality'] ?>">
          <br><br>
          <label for="file"><b>Change Image</b></label>
          <input type="file" name="image" id="image"><img src=<?php echo base_url() . $result['image'] ?> height=100 width=150>
          <br><br>
          <a href="<?php echo base_url() . 'index.php/Project/changepass' ?>" style="color:dodgerblue">Change Password?</a>
          <br><br>
          <div class="clearfix">
            <a href="<?php echo base_url() . 'index.php/Project/Secondpage' ?>"><input type="button" class="cancelbtn" value="Cancel"></a>
            <input type="submit" class="cancelbtn" name="submit" value="Ok">
          </div>
    </form>
    </div>
  <?php
  }
  ?>
  <script type="text/javascript">
    function disableTxt() {
      document.getElementById("myText").disabled = true;
    }

    function undisableTxt() {
      document.getElementById("myText").disabled = false;
    }
  </script>

</body>

</html>