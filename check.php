<!DOCTYPE html>
<script>
  var mins =2;
  var secs = mins*60;
  function countdown()
  {
    setTimeout('Decrement()',60);
  }
  function Decrement(){
    if(document.getElementById){
      minutes=document.getElementById("minutes");
      seconds=document.getElementById("seconds");
      if(seconds<59){
        seconds.value=secs;
      }
      else{
        minutes.value=getminutes();
        seconds.value=getseconds();

      }
      if(mins<0){
        alert('time up');
        minutes.value=0;
        seconds.value=0;
      }
      else{
        secs--;
        setTimeout('Decrement()',1000);
      }
    }
  }
  function getminutes(){
    mins=Math.floor(secs/60);
    return mins;
  }
  function getseconds(){
    return secs - Math.round(mins*60);
  }
</script>
<?php
$connect=mysqli_connect("localhost","root","","menti");
if(!$connect){
  echo"connection Failed";
}
echo"Connected successfully";
$fetchdata1="SELECT uniqueid from table1";
$result1=mysqli_query($connect,$fetchdata1);
$count=mysqli_num_rows($result1);
$i=0;
$b=0;
$d=0;
$ques=0;
$count2=0;
?>
<form action ="answercheck.php" method ="post">
  <body onload="countdown();">
    <div>
    Time Left ::
    <input id="minutes" type="text"  style="width: 10px; border: none; font-size: 16px;
    font-weight: bold; color: black;"><font size="5"> : </font>
    <input id="seconds" type="text" style="width: 20px; border: none; font-size: 16px;
    font-weight: bold; color: black;">
    <?php
while ($i <= $count)
{
  //
  // <!-- // <body onload="countdown();">
  //   <div>
  //   Time Left ::
  //   <input id="minutes" type="text"  style="width: 10px; border: none; font-size: 16px;
  //   font-weight: bold; color: black;"><font size="5"> : </font>
  //   <input id="seconds" type="text" style="width: 20px; border: none; font-size: 16px;
  //   font-weight: bold; color: black;"> -->
  $idform=$_POST["id"];
  $fetchdata="SELECT * from table1 LIMIT $i,1";
  $result=mysqli_query($connect,$fetchdata);
      while(  $row=mysqli_fetch_assoc($result))
      {
            if($_POST["id"]==$row["uniqueid"])
            {
              // <!-- <body onload="countdown();">
              //   <div>
              //   Time Left ::
              //   <input id="minutes" type="text"  style="width: 10px; border: none; font-size: 16px;
              //   font-weight: bold; color: black;"><font size="5"> : </font>
              //   <input id="seconds" type="text" style="width: 20px; border: none; font-size: 16px;
              //   font-weight: bold; color: black;"> -->

              $c=0;
              $a=0;
              $isQues=1;

              echo "<br>". $row["question"]."<br>";
              // <input type="radio" name="options" value ="submit">
              // echo $row["options"]."<br>";
              // DECLARE @String VARCHAR(50) = $row["options"], @Delimiter CHAR(1) =','
              //$value=SELECT * FROM STRING_SPLIT($row["options"],',')
              $value=explode(',',$row["options"]);
              $count1=count($value);
              while($a<$count1)
              {

              ?>
                <input type="radio" name="button[<?php echo $b; ?>]" value="<?php echo $c; ?>">
              <?php
              echo $value[$a];
                $a+=1;
                $c+=1;

              }

              $b+=1;
            }





            else {
                $flag = 1;
                }
              }
              $i+=1;


      }
// if($flag==1){
//         $q="SELECT question from table1 where uniqueid=$row['uniqueid']";
//         $query=mysqli_query($connect,$q);
//         while($row=mysqli_fetch_array($query))
//         {
//           echo $row["question"];
//         }
// }

if($flag==1&&$isQues!=1) {
  echo"   nope..";
}
?>
</div>
<input type="hidden" name="codeid" value="<?php echo $idform; ?>">
<input type ="submit" name="Submit" value="submit">

</form>
