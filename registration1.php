<?php

session_start();
#header('location:createpresentation.php');
$con=mysqli_connect('localhost','root','Password@2000','menti');
if($con){
    echo " connection succesful";

}
else{
    echo "no connection";
}
#mysqli_select_db ($con,'menti');
if(!isset($_POST['user']))
{
	echo 'no user field';
}
$name=$_POST['user'];
$pass=$_POST['password'];
#$id=rand(10,100);
$q="select * from signin where user = '$name' && password='$pass'";
$result=mysqli_query($con,$q);
$num=mysqli_num_rows($result);
if($num==1)
{
    echo "this is duplicate data";

}
else{
    $qy="insert into signin(user , password) values('$name','$pass')";
    // $id="insert into signin(id) value('$id') ";
    mysqli_query($con,$qy);
}
?>
