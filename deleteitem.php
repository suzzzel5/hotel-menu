<?php
include ("menu.php");
echo'<div class="main-content"><div class="title">Message</div>
<div class="content">';

try{
sleep(1);
$id=$_GET['id'];
$q="DELETE FROM prime WHERE id=$id";
$con=mysqli_connect("localhost","root","");
$db=mysqli_select_db($con,"prime_bim");
$result=mysqli_query($con,$q);
echo"data deleted successfully";

}
catch(Exception $ex){
    http_response_code(400);
    echo $ex->getMessage();
}
?>