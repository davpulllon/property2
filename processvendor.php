<?php
require 'connect.php';

if (isset($_POST['update_vendor'])) 
{
  $vendor_old_email= $vendor_old_email = (isset($_GET['vendor_email']) ? $_GET['vendor_email'] : '');
  $vendor_new_email = $_POST["vendor_email"];
  $vendor_firstname = $_POST["vendor_firstname"];
  $vendor_surname   = $_POST["vendor_surname"];
  $vendor_phone     = $_POST["vendor_phone"];
  
  $query = "UPDATE property SET vendor_email = '$vendor_new_email' WHERE vendor_email = '$vendor_old_email'";
  mysqli_query($link, $query);
  
  $query = "UPDATE vendor SET vendor_email='$vendor_new_email',vendor_firstname='$vendor_firstname',vendor_surname='$vendor_surname',vendor_phone='$vendor_phone' WHERE vendor_email='$vendor_old_email'";

  if (mysqli_query($link, $query))
  {
      echo '<script>alert("Vendor Details Added Successfully")</script>'; 
      echo ("<script>location.href='managevendors.php'</script>");
  }

}
?>