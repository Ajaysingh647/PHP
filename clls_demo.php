<?php
echo"<form action='$_SERVER[PHP_SELF] method='POST'>
<label>Enter numerator</lable><input type='number' name ='num'><br>
<label>Enter denominator</lable><input type='number' name ='deno'><br>
<input type ='submit' name='result' value='result'></form>";

if($_SERVER['REQUEST_METHOD']=="")
$num=$_POST['num'];
$denom=$_POST['deno'];
echo &num/$denom;