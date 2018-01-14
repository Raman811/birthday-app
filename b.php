
<?php



$birthday = array("sharnjit", "karan", "harwinder", "raman", "raman", "mandeep", "manpreet", "navjot", "jaspreet");


$date = array(7,6,9,7,23,7,14,19,7);
$month = array("september", "january", "november", "january", "january", "april", "march", "september", "february");

$years = array(1994,1997,1997,1998,1997,1998,2000,1996,1996);




$pics = array("nopic.jpg", "nopic.jpg", "nopic.jpg", "nopic.jpg", "nopic.jpg", "nopic.jpg", "nopic.jpg", "nopic.jpg", "nopic.jpg");

?>
<!DOCTYPE>
<html>
<head>
      <title>7 September 2017</title>

<style type="text/css">

.birthday-cap{
	
}

.date{
	 
	 color:red;
}
.month{
	
	color:blue;
}
.year{
 
    color:yellow;
}


.box{
	
    width: 500px;
	height: 700px;
	border: 3px black dashed;
}

</style>


</head>
<body>

<center>
<div class="birthday-cap">


<img src = "caps.jpg" height="150px" width="150px">
<h1><div class="date">7</div><div class="month">september</div><div class="year">2017</div></h1><br>
</div>
</center>
<form action="b.php" method="POST">


<input type="text" name="birthday">

<input type="submit" name="submit" value="Send">
</form>


<br>
<?php if(isset($_GET["birthday"])!=null){
	$name = $_GET["birthday"];
     $index = array_search($_GET["name"] ,$_GET["birthday"]);


?>


<center>
<div class ="box">

<center>
<img src="fireworks.gif">
<img sc="<?php echo $pics[$index];?>" width="250px" height="250px">
<p>  BIRTHDAY : <?php echo $date[$index]." ".$month[$index]." ".$years[$index];?> 
 </p>

</center>



</div>
</center>


<?php } ?>

</body>
</html>