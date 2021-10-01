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

<div id="content" style="background-color:lightgrey;">
 
<?php
$server="sql304.epizy.com";
$dbuser="epiz_29681339";
$password="UwBmgci7k0FQ3";
$link=mysqli_connect($server,$dbuser,$password);
mysqli_select_db($link,"epiz_29681339_properties");
$sql="SELECT * from comment WHERE status='planned'";
$result=mysqli_query($link, $sql);
if(mysqli_num_rows($result)>0)
{
echo " <div id='testimonial-header'>
    <h3>TESTIMONIALS</h3>
    <hr>
    </div>";
echo "<table>";
echo "<tr>
<th> Title</th>
<th>Content</th>
<th>Author</th>
<th>Created</th>
</tr>";
while($row=mysqli_fetch_array($result)) {
$title=$row["title"];
$content=$row["content"];
$author=$row["author_name"];
$created=$row["created_at"];
echo "<tr>
<td>$title</td>
<td>$content</td>
<td>$author</td>
<td>$created</td>
</tr>";
}
echo "</table>";
}//if statement
else{
    echo"a coger acelgas al campo";
}
mysqli_close($link);
?>
<div id="addtestimonial">
<h3>Add a Testimonial</h3>
<p>Please leave your feedback on your experience of our site. We appreciate your feedback and
take all your comments into consideration! </p>
<!--form for user to enter feedback -->
<form method="post" action="process.php" id="commentform">
<label>Title: </label>
<input type="text" name="title" required="required"><br>
<label>Content: </label>
<textarea name="content" rows="4" cols="60" required="required" ></textarea><br>
<label>Name:</label>
<input type="text" name="author_name" required="required"><br>
<label>Email: </label>
<input type="email" name="author_email" required="required"><br>
<input type="submit" id="mysubmit" name="submit" value="Add Comment">
</form>
</div>
</div>
<?php include("includes/footer.html");?>
</div>
</body>
</html>