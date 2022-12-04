


<?php

	
	if(isset($_POST['sub'])){
	$num1=$_POST['n1'];
	$num2=$_POST['n2'];
	$oprnd=$_POST['sub'];
	if($oprnd=="+")
		$ans=$num1+$num2;
	else if($oprnd=="-")
		$ans=$num1-$num2;
	else if($oprnd=="x")
		$ans=$num1*$num2;
	else if($oprnd=="/")
		$ans=$num1/$num2;
}
	echo'
	
	<h1>Simple Calculator</h1><br>
	<form>
First Number:<input name="n1" value=""><br>
Second Number:<input name="n2" value=""><br>
<input type="submit" name="sub" value="+">
<input type="submit" name="sub" value="-">
<input type="submit" name="sub" value="x">
<input type="submit" name="sub" value="/"><br>
<br>Result: <input type="text" value="'.$ans.'"><br>
</form>
	
	
	';


?>