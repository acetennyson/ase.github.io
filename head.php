<?php
session_start();

?>
<!DOCTYPE html>
<html style="margin: 0px 25px 0px 25px">
<head>
	<title>Mark5</title>
</head>
<link rel="stylesheet" type = "text/css" href ="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" type = "text/css" href ="css/index.css">
<link rel="stylesheet" type="text/css" href="css/style2.css">
<link rel="stylesheet" type="text/css" href="css/style3.css">
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<body>
	<button onclick="topFunction()" id="myBtn" title="Go to top">
      <span class="glyphicon glyphicon-chevron-up"></span>
    </button>
    <script type="text/javascript">
      window.onscroll = function()
      {
        scrollFunction()
      };

      function scrollFunction(){
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
          document.getElementById("myBtn").style.display = "block";
        } else {
          document.getElementById("myBtn").style.display = "none";
        }
      }

      function topFunction() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
      }
    </script>
  
  <div>
	<nav class="navbar navbar-inverse navbar-fixed-top navigation-clean-search" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#myNavbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.html">Trial5</a>
        </div>

        <div class="collapse navbar-collapse " id="myNavbar">
          <ul class="nav navbar-nav">
            <li class="active">
              <?php if(!isset($_SESSION['user'])){
                echo '<a href="index.html">';?><?php
              }else{
                echo '<a href="profile.html">';
                }?>Home</a></li>
            <li><a href="aboutus.php">About</a></li>
            <li><a href="contactus.php">Contact Us</a></li>

          </ul>

<?php
if (isset($_SESSION['user'])) {
  # code...
?>
<ul class="nav navbar-nav navbar-right">
            <li><a href="#" class="dropdown-toggle active" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-user"></span>Interactives<span class="caret"></span> </a>
                <ul class="dropdown-menu">
              <li> <a href='#'>Chat</a></li>
              <li> <a href="#">Notifications</a></li>
              <li><a href="#">friends</a></li>
              
            </ul>
            </li>

            <li><a href="#" class="dropdown-toggle active" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-log-in"></span> Setting <span class="caret"></span></a>
              <ul class="dropdown-menu">
              <li> <a href="#">Account-setting</a></li>
              <li> <a href="#">Privacy-setting</a></li>
              <li><a href="#">more</a></li>
             
            </ul>
            </li>

            <li><a href="logout.php" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-log-in"></span> Logout <span class="caret"></span></a>
          </ul>

       </div>
<?php
}else{
?>
<ul class="nav navbar-nav navbar-right">
  <li class="inline"><a href="signup.html">Sign-up</a></li>
  <li class="inline"><a href="index.html">Login</a></li>
</ul>
<?php } ?>
      </div>
    </nav></div>
    <br><br><br>


