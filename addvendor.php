<!DOCTYPE HTML>
<html lang="en">
<head>
  <title>My first HTML5 page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Irish property website">
  <meta name="keywords" content="Property, ireland, waterford lettings, Commercial property, Residential property, site Property, Eire properties ">
  <meta name="author" content="David Eire">
   <link rel="stylesheet" href="css/style.css">

 <link rel="stylesheet" href="css/style3.css">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 </head>
<body>
<div id="container">
<?php include("includes/header.html");?>
<div id="content">
<div id="manage-content" style="background-color:lightgrey;">
 <div id='comment-header'>
    <h3>Login > Admin Area > Manage Properties > Add Vendor</h3>
    <h3>Add a New Vendor</h3>
</div>
<div id="addproperty">
<form id="edit-form" method="post" action="processaddvendor.php">
<table>
<tr>
<td>Vendor_Email: </td>
<td><input type="text" name="vendor_email" required="required"/></td>
</tr>
<tr>
<td>firstname:</td>
<td><input type="text" name="vendor_firstname" required="required" /></td>
</tr>
<tr>
<td>Surname: </td>
<td><input type="text" name="vendor_surname" required="required" /></td>
</tr>
<td>Phone Number:</td>
<td><input type="text" name="vendor_phone" required="required" /></td>
</tr>

<tr>
<td><input id="submit" type="submit" name="submit" value="Add-Vendor"/></td>
<td><a style="color:white;" href="managevendors.php" >Go Back</a></td>  






</tr>
</table>

</form>

</div>
</div>
</div>
<?php include("includes/footer.html");?>
</div>
</body>
</html>