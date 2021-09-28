<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    

<?php
require 'connect.php';
$id= $id = (isset($_GET['id']) ? $_GET['id'] : '');
$sql= "DELETE FROM comment WHERE id=$id";
if (mysqli_query($link, $sql))
{

 header("Location: http://localhost/property2/managecomments.php");
 exit;
}
else
{
echo ("The record could not be deleted");
}
mysqli_close($link);

?>
    
</body>
</html>