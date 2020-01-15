<?php
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'menti');

$selected=$_POST['codeid'];
$button=$_POST['button'];
$fetch="SELECT uniqueid from table1";
$result=mysqli_query($con,$fetch);
$count=mysqli_num_rows($result);
$i=0;
$b=0;
while($i<=$count)
{
  $fetchdata="SELECT * from table1 LIMIT $i,1";
  $result1=mysqli_query($con,$fetchdata);
  while(  $row=mysqli_fetch_assoc($result1))
  {
    if($selected==$row["uniqueid"])
    {
      $checked= $button[$b]==$row["choice"];
      if( $checked )
      {
        echo "ans is right";
      }
      else {
        // code...
        echo "nope";
      }
      $b+=1;
    }
  }
  $i+=1;

}

 ?>
