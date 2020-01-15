<?php

session_start();
header('location:createpresentation.php');
$con=mysqli_connect('localhost','root');
if($con){
    echo " connection succesful";

}
else{
    echo "no connection";
}
mysqli_select_db ($con,'menti');

$name=$_POST['user'];
$pass=$_POST['password'];
$id=rand(10,100);

$q="select * from signin where name = '$name' && password='$pass'";
$result=mysqli_query($con,$q);
$num=mysqli_num_rows($result);
if($num==1)
{
    echo "this is duplicate daata";

}
else{
    $qy="insert into signin(name , password, id) values('$name','$pass','$id')";
    // $id="insert into signin(id) value('$id') ";
    mysqli_query($con,$qy);
}
?>
