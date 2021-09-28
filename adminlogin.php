<!DOCTYPE HTML>
<html lang="en">
<head>
  <title>Eireproperties.ie</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Irish property website">
  <meta name="keywords" content="Property, ireland, waterford lettings, Commercial property, Residential property, site Property, Eire properties ">
  <meta name="author" content="David Eire">
 <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/style2.css">

 
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 </head>
 <body>
<div id="container">
<?php include("includes/header.html");?>

<div id="content">
<?php
if (empty($_SESSION))
session_start();
if (isset($_SESSION['errors'])) {
echo "<div class='form-errors'>";
foreach($_SESSION['errors'] as $error)
{
 echo "<p>";
 echo $error;
 echo "</p>";
}
echo "</div>";
}
unset($_SESSION['errors']);
?>
<div id="h3-login">
<h3> Login > Admin </h3>
</div>
<div id="login-form">
<form action="login_action.php" method="POST">
<p>
<label>Email: </label><input type="email" name="admin_email" required="required">
</p><p>
<label>Password: </label><input type="password" name="password" required="required">
</p><p>
<input id="btn-login" type="submit" value="Login">
</p>
</form>
</div>
</div>
<footer>
  <hr class="new1">


<?php include("includes/footer.html");?>
</footer>


</footer>
</div>
</body>
</html>