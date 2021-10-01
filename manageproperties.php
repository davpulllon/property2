<!DOCTYPE HTML>
<html lang="en">
<head>
  <title>My first HTML5 page</title>
  <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/style2.css">




 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 </head>
<body>
<div id="container">
<?php include("includes/header.html");?>
<div id="manage-content" style="background-color:lightgrey;">
    <?php
$server="sql304.epizy.com";
$dbuser="epiz_29681339";
$password="UwBmgci7k0FQ3";
$link=mysqli_connect($server,$dbuser,$password);
mysqli_select_db($link,"epiz_29681339_properties");
$propertyid= $propertyid = (isset($_GET['propertyid']) ? $_GET['propertyid'] : '');

$sql="SELECT * from property, category where property.categoryid = category.categoryid";
$result=mysqli_query($link, $sql);
if(mysqli_num_rows($result)>0)
{
     echo " <div id='comment-header'>
    <h3>Login > Admin Area > Manage Properties</h3>
    <button onclick='mainMenu()'; id='comment-button'>Main Menu</button><br>
    <button onclick='addProperty()'; id='comment-button'>Add new Property</button>
    </div>";
 
echo "<table id='admin-table'>";
echo "<tr>
<td><strong>Propertyid</td>
<td><strong>Vendor_id</td>
<td><strong>Vendor_email</td>
<td><strong>address</td>
<td><strong>Town</td>
<td><strong>County</td>
<td><strong>Price</td>
<td><strong>bedrooms</td>
<td><strong>shortDesc</td>
<td><strong>Image</td>
<td><strong>Category</td>
<td><strong>Edit</td>
<td><strong>Delete</td>
</tr>";
while($row=mysqli_fetch_array($result)) {
$propertyid =$row["propertyid"];
$vendor = $row["vendor_id"];
$address=$row["address1"];
$town=$row["town"];
$County=$row["county"];
$price=$row["price"];
$bedrooms=$row["bedrooms"];
$Description=$row["shortdescription"];
$image = $row["image"];
$category = $row["categoryname"];
$vendor_email = $row["vendor_email"];
echo "<tr>
<td>$propertyid</td>
<td>$vendor</td>
<td>$vendor_email</td>
<td>$address</td>
<td>$town</td>
<td>$County</td>
<td>$price</td>
<td>$bedrooms</td>
<td>$Description</td>
<td><img src='$image' width='100'/></td>
<td>$category</td>


<td><a href='editproperty.php?propertyid=".$propertyid."' onclick=approveComment();>Edit</a></td>
<td><a href='deleteproperty.php?propertyid=".$propertyid."' onclick=confirmDeleteComment();>Delete</a></td>

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
        confirm("Are you sure you want to update this property?");
    }
    function confirmDeleteComment(){
                confirm("Are you sure you want to Delete this property?");

    }
    function mainMenu(){
        window.location.assign("admin.php");
    }
     function addProperty(){
        window.location.assign("addproperty.php");
    }

</script>
</html>
