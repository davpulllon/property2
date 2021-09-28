<!DOCTYPE HTML>
<html lang="en">
<head>
  <title>My first HTML5 page</title>
  <meta charset="utf-8">
   <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Irish property website">
  <meta name="keywords" content="Property, ireland, waterford lettings, Commercial property, Residential property, site Property, Eire properties ">
  <meta name="author" content="David Eire">
 <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/style2.css">
  <style>
      #container {

  width: 100vh !important;
}
@media only screen and (min-width: 768px) {
  

  #container {
    width: 100% !important;
  }
}
  </style>

 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 </head>
<body>
<div id="container">
<?php include("includes/header.html");?>
<div id="manage-content" style="background-color:lightgrey;">
    <?php
$server="localhost";
$dbuser="root";
$password="";
$link=mysqli_connect($server,$dbuser,$password);
mysqli_select_db($link,"epiz_29681339_properties");
//take the vendor id from the db
$vendor_id= $vendor_id = (isset($_GET['vendor_id']) ? $_GET['vendor_id'] : '');

$sql="SELECT * FROM vendor";

$result=mysqli_query($link, $sql);
if(mysqli_num_rows($result)>0)
{
     echo " <div id='comment-header'>
    <h3>Login > Admin Area > Manage Vendors</h3>
    <button onclick='mainMenu()'; id='comment-button'>Main Menu</button><br>
    <button onclick='addProperty()'; id='comment-button'>Add new Vendor</button>
    </div>";
 
echo "<table id='admin-table'>";
echo "<tr>
<td><strong>Vendor_id</td>
<td><strong>Vendor_email</td>
<td><strong>Vendor_firstname</td>
<td><strong>Vendor_surname</td>
<td><strong>Vendor_phone</td>

<td><strong>Edit</td>
<td><strong>Delete</td>
</tr>";
while($row=mysqli_fetch_array($result)) {
$vendor_id=$row["vendor_id"];
$vendor_email =$row["vendor_email"];
$firstname=$row["vendor_firstname"];
$surname=$row["vendor_surname"];
$phone=$row["vendor_phone"];

echo "<tr>
<td>$vendor_id</td>
<td>$vendor_email</td>
<td>$firstname</td>
<td>$surname</td>
<td>$phone</td>



<td><a href='editvendor.php?vendor_id=".$vendor_id."' onclick=approveComment();>Edit</a></td>
<td><a href='deletevendor.php?vendor_id=".$vendor_id."' onclick=confirmDeleteComment();>Delete</a></td>

</tr>";
}
echo "</table>";
}//if statement
else{
echo ("The record could not be updated");
}
mysqli_close($link);
?>

</div>
<?php include("includes/footer.html");?>
</div>
</body>
<script>
    function approveComment(){
        confirm("Are you sure you want to edit this vendor?");
    }
    function confirmDeleteComment(){
                confirm("Are you sure you want to Delete this vendor, check vendor doesnt have any properties still for sale?");

    }
    function mainMenu(){
        window.location.assign("admin.php");
    }
     function addProperty(){
        window.location.assign("addvendor.php");
    }

</script>
</html>
