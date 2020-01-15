<!DOCTYPE html>
<html>

 <?php
	print_r($_POST);
	echo "<br>";
	echo $_POST["question0"];
   $count=0;
   $count1=0;
   $string='';
   $var1='sec'.$count.'option'.$count1;
   $var='question'.$count;
   $var2='choice'.$count;
   $flag=0;

   $six_digit_random_number = mt_rand(100000, 999999);
   $check="SELECT * FROM table where uniqueid='$six_digit_random_number'";


   $conn=new mysqli("localhost","root","","menti");
   if($conn->connect_error){
   	die("Connection failed: ".$conn->connect_error);
   }
   $rs=mysqli_query($conn,$check);

      while($flag==0){
   	  $data=mysqli_fetch_array($rs,MYSQLI_NUM);
   	  if($data[0] > 1){
   	  	$six_digit_random_number = mt_rand(100000, 999999);
   	  }
   	  else{
   	  	$flag=1;
   	  }
   }


   while(isset($_POST[$var]))
   {

   		while(isset($_POST[$var1]))
   		{
   			$string=$string.','.$_POST[$var1];
   			$count1=$count1+1;
   			$var1='sec'.$count.'option'.$count1;

   		}
   		$string=substr($string,1);

   		$sql="INSERT INTO table1 (question,options,choice,uniqueid) VALUES ('$_POST[$var]','$string','$_POST[$var2]','$six_digit_random_number')";
   		if($conn->query($sql)===TRUE){
   		echo "New record created successfully";
   		}
   		else{
   			echo "Error: ".$sql."<br>".$conn->error;
   		}

   		$count=$count+1;
   		$var='question'.$count;
   		$var2='choice'.$count;
   		$count1=0;
   		$var1='sec'.$count.'option0';


   		$string='';
   }
   $conn->close();
   echo "Your id is".$six_digit_random_number."!";
 ?>
 </html>
