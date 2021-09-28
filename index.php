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
 
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 </head>
<body>

<div id="container">
<?php include("includes/header.html");?>
<div id="content">
<img id="office" src="images/wide_housing.jpg" alt="building pictures">
<div id="content-one">
<h1>Welcome to Eireproperties.ie</h1> 
<p>Welcome to our page please browse the diferent property options wether you are looking for Residential, 
  Commercial or Sites we have just what you need, get in contact with one of our team members today</p>
</div>
<div id="content-two">
  <button onclick="allproperties();">Check all Our properties</button>
  <p>Or Search by Category</p>
</div>
<div id="card-container">
  
  <div id="product-card">
    <div id="product-img img-one">
            <img src="images/house-2.jpg" alt="" width="250" height="150">

    </div>
    <div id="product-text">
      <h3>Residential</h3>
      <p>Click on the button below to Find out our latest Residential Properties on offer</p>
    </div>
    <div id="product-cart">
      <button> <a href="allproperties.php?categoryid=1">Residential Properties</a></button>
    </div>
  </div>
  
    <div id="product-card">
    <div id="product-img img-two">
            <img src="images/Commercial-2.jpg" alt="" width="250" height="150">

    </div>
    <div id="product-text">
      <h3>Commercial</h3>
      <p>Click on the button below to Find out our latest Commercial Properties on offer</p>
    </div>
    <div id="product-cart">
    <button> <a href="allproperties.php?categoryid=2">Commercial Properties</a></button>

    </div>
  </div>
  
   <div id="product-card">
    <div id="product-img img-three">
            <img src="images/sites-1.jpg" alt="" width="250" height="150">

    </div>
    <div id="product-text">
      <h3>Sites</h3>
      <p>Click on the button below to Find out our latest Sites Properties on offer</p>
    </div>
    <div id="product-cart">
    <button> <a href="allproperties.php?categoryid=3">Sites Properties</a></button>

    </div>
  </div>
 


<div id="search-box">
<div class="custom-select" style="width:250px;">
<form method="post" action="results.php" id="searchform">
<h3 style="transform:translateY(-15px);">Search Properties</h3>
<hr style="border:1px dashed grey">
<div id ="gettown" class="searchbox">
<label> Location: </label>
<select name="location" required="required">
 <option value="">Select Town</option>
 <?php
   require "connect.php";
   $sql="select DISTINCT town from property";
   $result=mysqli_query($link, $sql);
   if (mysqli_num_rows($result) >0)
  {
   while ($row=mysqli_fetch_array($result)){
    $town=$row['town'];
    echo "<option value='$town'>$town</option>";
   }
  }
mysqli_close($link);
?>
</select>
</div>

<div id ="getcategory">
<label> Category: </label>
<select name="category" required="required">
<option value="">Select Category</option>
<?php
  require "connect.php";
  $sql="select * from category";
  $result=mysqli_query($link, $sql);
  if (mysqli_num_rows($result) >0)
  {
   while ($row=mysqli_fetch_array($result)){
     $categoryname=$row['categoryname'];
	 $categoryid=$row['categoryid'];
     echo "<option value='$categoryid'>$categoryname</option>";
   }
  }
mysqli_close($link);
?>
</select>
</div>

<div id="price">
<label>Price:</label>
<select name="price" required="required">
   <option value="">Select</option>
  <option value="1">Less than &euro; 100,000</option>
  <option value="2">&euro; 100,000 - &euro; 200,000</option>
  <option value="3">&euro; 200,000 - &euro; 300,000</option>
  <option value="4">Greater than &euro; 300,000 </option>
</select>
</div>

<div><button type="submit" name="submit" id="search-box-button">Search</button></div>
</form>



  </div>
</div>

</div>
<footer>
  <hr class="new1">


<?php include("includes/footer.html");?>
</footer>
</div>
</body>
<script>
  function residential(){
        window.location.assign("residential.php");
    }
    function commercial(){
        window.location.assign("comercial.php");
    }
    function site(){
        window.location.assign("sites.php");
    }
    function allproperties(){
              window.location.assign("allproperties.php");

    }
</script>
</html>