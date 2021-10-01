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
$sql="SELECT * from comment";
$result=mysqli_query($link, $sql);
if(mysqli_num_rows($result)>0)
{
    echo " <div id='comment-header'>
    <h3>Login > Admin Area > Manage Comments</h3>
    <button onclick=mainMenu(); id='comment-button'>Main Menu</button>
    </div>";
echo "<table id='admin-table'>";
echo "<tr>
<td><strong>Title</td>
<td><strong>Content</td>
<td><strong>Author</td>
<td><strong>Created</td>
<td><strong>Status</td>
<td><strong>Update</td>
<td><strong>Delete</td>
</tr>";
while($row=mysqli_fetch_array($result)) {
$id = $row["id"];
$title=$row["title"];
$content=$row["content"];
$author=$row["author_name"];
$created=$row["created_at"];
$status = $row["status"];
echo "<tr>
<td>$title</td>
<td>$content</td>
<td>$author</td>
<td>$created</td>
<td>$status</td>
<td><a href='updatecomment.php?id=$id' onclick=approveComment();>Approve</a></td>
<td><a href='deletecomment.php?id=$id' onclick=confirmDeleteComment();>Delete</a></td>

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
        confirm("Are you sure you want to approve this comment?");
    }
    function confirmDeleteComment(){
                confirm("Are you sure you want to Delete this comment?");

    }
     function mainMenu(){
        window.location.assign("admin.php");
    }

</script>
</html>