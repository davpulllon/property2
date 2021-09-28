<!DOCTYPE HTML>
<html lang="en">
<head>
  <title>My first HTML5 page</title>
   <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Irish property website">
  <meta name="keywords" content="Property, ireland, waterford lettings, Commercial property, Residential property, site Property, Eire properties ">
  <meta name="author" content="David Eire">
   <link rel="stylesheet" href="css/style2.css">
      <link rel="stylesheet" href="css/style.css">
   

   


 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 </head>
<body>
<div id="container">
<?php include("includes/header.html");?>
<div id="content">
<div id="h3-login">
<h3> Login > Admin </h3>
</div>
<div id="first-display">
    <h3 id="header-contact">Administrator Area</h3>
    <hr class="hr-contact">
   </div>
<?php
session_start();
if (isset($_SESSION['username'])){
$username = $_SESSION['username'];
echo "<div id='welcome-message'>";
echo "Welcome " . $username . "!" . "
";

echo "Choose one of the menu options to Manage Comments, Products or Vendors. &nbsp;
&nbsp;";
echo "</div>";
echo "<div><button id='admin-button'><a href='managecomments.php'>Manage Comments</a></button>
<button id='admin-button'><a href='manageproperties.php'>Manage Properties</a></button>
<button id='admin-button'><a href='managevendors.php'>Manage Vendors</a></button></div>";
echo "<button id='admin-button'><a href='logout.php'>Logout</a></button>";

}
?>
</div>
<footer>
  
  <hr class="new1">


<?php include("includes/footer.html");?>
</footer>


</footer>
</div>
</body>
</html>