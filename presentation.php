<!DOCTYPE html>
<html>

<form action="formsub.php" method="post">
<div id="bigsec">
  <br></br>
  <button type="button" onclick="myfunction2()">add question</button>
  <input type="text" id="ques_count" hidden="true" value="0">
</div>
<hr>
<button type="submit">Submit</button>
</form>

<script>
  function myfunction2(){

    var html_text=`<div id="sec`+$('[id^=sec]').length+`">
          <p>Enter question here</p>

          <script>
          var count=document.getElementById('ques_count').value;
          document.getElementById('ques_count').value=count+1;
		  <\/script>


          <input type="text" id="question`+$('[id^=sec]').length+`" name="question`+$('[id^=sec]').length+`">

          <br></br>
          <p>Options</p>
          <br></br>
          <button type="button" onclick="option_adder(`+$('[id^=sec]').length+`)">add option</button>
          <br></br>
          <p>Correct Choice</p>
          <input type="text" id="choice`+$('[id^=sec]').length+`" name="choice`+$('[id^=sec]').length+`">
          </div>`

    $("#bigsec").append(html_text);
  }
</script>

<script>
    function option_adder(ques_no){
    var html_var='<input type="text" id="sec'+ques_no+'option'+$('[id^=sec'+ques_no+'option]').length+'" name="sec'+ques_no+'option'+$('[id^=sec'+ques_no+'option]').length+'">'
  $("#sec"+ques_no).append(html_var);
    }
</script>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

</html>
