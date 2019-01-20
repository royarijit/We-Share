<?php 

$table = $_POST['table'];
$id = $_POST['id'];
$email = $_COOKIE['email'];

$con = mysqli_connect("sql201.epizy.com", "epiz_23179578", "s5NHbLmxsEpQZ76", "epiz_23179578_letsshare");
$sql = "DELETE FROM $table WHERE id=$id";


$sql3="SELECT * FROM registertable WHERE email = '$email'";
$result2=mysqli_query($con, $sql3);
$row2=mysqli_fetch_assoc($result2);
$table = $row2['data'];


$sql6 = "SELECT postid from $table WHERE id= $id ";
$row3  = mysqli_query($con,$sql6);
$result3 = mysqli_fetch_assoc($row3);
$pid = $result3['postid'];

$sql5 = "DELETE FROM post WHERE postid=$pid";


$sql2 = "SELECT * FROM $table WHERE id=$id";

$result = mysqli_query($con,$sql2);
$row = mysqli_fetch_assoc($result);
if($row['filepost']){
    unlink($row['filepost']);
} else if ($row['postpic']) {
    unlink($row['postpic']);
}
   mysqli_query($con,$sql); 
mysqli_query($con,$sql5);
header("location:index.php");
   
    ?>
