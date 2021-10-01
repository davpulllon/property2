
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
 <div id="container">
<?php include("includes/header.html");?>
<?php
//connect to the database
$server="sql304.epizy.com";
$dbuser="epiz_29681339";
$password="UwBmgci7k0FQ3";
//pass the parameter to the mysqli  to the link handle store the conection
$link=mysqli_connect($server,$dbuser,$password);
//choose the database that we are going to use
mysqli_select_db($link, "epiz_29681339_properties");
//check if there is a category id and then retrieve it form the database
$categoryid = (isset($_GET['categoryid']) ? $_GET['categoryid'] : '');
//if no ctagory id is returned as a parameter
if($categoryid=='')
{
    //pull all the values from the property tableand the category from the categorty table
  $sql="SELECT * from property JOIN category ON property.categoryid=category.categoryid";  
}
else
{
  //if there is a category id selected return every value from the categoryid selected
  $sql="SELECT * from property JOIN category ON property.categoryid=category.categoryid WHERE property.categoryid=$categoryid AND
  category.categoryid='$categoryid'";
}
//run the query agaisnt the database and store result
$result=mysqli_query($link, $sql);
if(mysqli_num_rows($result)>0)
{
$output=mysqli_query($link, $sql);
$getcategory=mysqli_fetch_array($output);
//display this if all properties are selected
if($categoryid == '') 
{
echo "<div id='content'>";
echo  "<div id='first-display'>";
echo  "<button onclick=mainMenu(); class='back-button'>Home</button>";
echo "<h3 class='page-name'>All properties</h3>";
echo "<hr class='property-hr'>";
echo " </div>";
}
//display the name of the property type on the menu
else{
echo "<div id='content'>";
echo  "<div id='first-display'>";
echo  "<button onclick=mainMenu(); class='back-button'>Home</button>";
echo "<h3 class='page-name'>";
echo  $getcategory["categoryname"];
echo "</h3>";
echo "<hr class='property-hr'>";
echo " </div>";


}

  

    

while($row=mysqli_fetch_array($result)) {
$propertyid =$row["propertyid"];
$image=$row["image"];
$content=$row["shortdescription"];
$Address=$row["address1"];
$price=$row["price"];
$category = $row["categoryname"];
echo "
<div id='property-container'>
    <div id='property-one'>
      <div class='property-card-image'>
      <img src='$image' width='200'/>
      <button id='info'><a href='moredetails.php?propertyid=".$propertyid."'>More Info</a></button>
      <h3>$Address</h3>
      
      </div>

    <div class='property-card-details'>
    <p><strong>Category: </strong>$category</p>
    <p><strong>Details: </strong>$content</p>
    <p><strong>Price: </strong>$price $</p>
    
    
  </div>
  </div>
</div>


";
}
}
else{
 echo "<h3> There are currently no items in this category</h3>";
}
mysqli_close($link);

?>
</div>
<footer>
  <hr class="new1">


<?php include("includes/footer.html");?>
</footer>


</footer>
</div>


</body>
<script>
  function mainMenu(){
        window.location.assign("index.php");
    }
</script>
</html>