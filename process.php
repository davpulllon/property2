<!DOCTYPE HTML>
<html lang="en">
<head>
  <title>My first HTML5 page</title>
  <meta charset="utf-8">
 <link rel="stylesheet" href="css/style2.css">
  <link rel="stylesheet" href="css/style.css">

 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 </head>
<body>
<div id="container">
<?php include("includes/header.html");?>

<div id="content">
<?php
//connection
$server="localhost";
$dbuser="root";
$password="";
$link=mysqli_connect($server,$dbuser,$password);
mysqli_select_db($link,"epiz_29681339_properties");
//posting the values of the form to the db
$title=$_POST["title"];
$content=$_POST["content"];
$author_name=$_POST["author_name"];
$email=$_POST["author_email"];
//sql insert to insert into ur database
$sql_insert="INSERT INTO comment(title,content,author_name,author_email)
VALUES('$title','$content','$author_name','$email')";
//if querie is succesfull
if(mysqli_query($link,$sql_insert)){
  //display
echo "<div id='testimonial-added'>
<h3>Testimonial Added!</h3>
<hr>
<p>Thank you for your feedback. Our administrators moderate all
comments and it will be attended to shortly</p>";
echo "<a href='testimonials.php'>Return to Testimonials page</>
</div>";}
else {
echo "An error occurred, try again!";
}
mysqli_close($link);


?>
<?php include("includes/footer.html");?>
</div>
</body>
</html>