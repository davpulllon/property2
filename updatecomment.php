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
$server="sql304.epizy.com";
$dbuser="epiz_29681339";
$password="UwBmgci7k0FQ3";
$link=mysqli_connect($server,$dbuser,$password);
require 'connect.php';
$id= $_GET["id"];
$sql= "UPDATE comment SET status='planned' WHERE id=$id";
if (mysqli_query( $link, $sql))
{
 header("Location: http://localhost/property2/managecomments.php");
 exit;
}
else
{
echo ("The record could not be updated");
}
mysqli_close($link);
?>
    
</body>
</html>