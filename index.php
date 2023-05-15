
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="apple-touch-icon" sizes="180x180" href="Resource/favicon/apple-touch-icon.png">
  <link rel="manifest" href="Resource/favicon/site.webmanifest">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="css/hsstyle.css">
	<title>Patient Record System</title>

</head>
<body>

<div class="navigation-bar">
<?php
    session_start();
    if(isset($_SESSION["userID"]) && $_SESSION["uc"]=="1")
    {
      echo "<a href='logout.php'>Logout</a>
      <a href='pdashboard.php'>Profile </a>
      <a href='index.php'> Home</a>";
    }
    elseif (isset($_SESSION["userID"]) && $_SESSION["uc"]=="2") {
      echo "<a href='logout.php'>Logout</a>
      <a href='ddashboard.php'>Profile </a>
      <a href='index.php'> Home</a>";
    }
    elseif (isset($_SESSION["userID"]) && $_SESSION["uc"]=="3") {
      echo "<a href='logout.php'>Logout</a>
      <a href='sdashboard.php'>Profile </a>
      <a href='index.php'> Home</a>";
    }
    else {
      echo " <div class='dropdown'>
    <button class='dropbtn'> Login <i class='fa-caret-down'></i>
    </button>
    <div class='dropdown-content'>
      <a href='patient.login.php'>Patient Login</a>
      <a href='staff.login.php'>Admin Login</a>
    </div>
  </div>
  <a href='index.php'> Home</a>";
    }
   ?>
</div>


<div class="intro">
 <img src="Resource/pexels1.jpg">
 <div class="intro_write">
  <h1 class="intro_head">Patient Record System</h1><br>
  <p>- Live and Die</p>
</div>


<div class="container">

<div class="row">
  <div class="column">
    <h2>Contact Us</h2>
    <p>Leave us a Message</p><br><br>

  <form action="/action_page.php">
        <label for="fname">Name</label>
        <input type="text" id="fname" name="firstname" placeholder="Your Name">
        <label for="lname">Email</label>
        <input type="text" id="lname" name="lastname" placeholder="Your Email">
        <label for="country">Country</label>
        <select id="country" name="country">
          <option value="philippines">Philippines</option>
          <option value="canada">Canada</option>
          <option value="usa">USA</option>
          <option value="germany">Germany</option>
          <option value="uae">United Arab Emirates</option>
          <option value="japan">Japan</option>
          <option value="singapore">Singapore</option>
        </select>
        <label for="subject">Subject</label>
        <textarea id="subject" name="subject" style="height:130px"></textarea>
        <input type="submit" value="Submit">
  </form>
  </div>
 

  <div class="column" style="text-align: center;">
    <br><br><br><br><br><br><br><br>
    <h2>Follow Us</h2>
    <p>Social Media Platform</p><br>
    <a href="beeg.com" class="fa fa-facebook"></a>
    <a href="pornhub.com" class="fa fa-twitter"></a></a>
    <a href="youjizz.com" class="fa fa-github"></a></a>
  </div>
</div>
</div>

</body>
</html>
