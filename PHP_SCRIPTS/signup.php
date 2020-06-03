<html>
<body>

<?php 

	
$selection1 = $_POST["name"];
$selection2 = $_POST["lname"];		
$selection3 = $_POST["email"];		// get the form item selected
	
if ($selection1 == '' || $selection2 == '' || $selection3 == ''){
	echo "All necessary fields have not been filed. Please return back and fill the details";
}
else{echo "<h1>Welcome $selection1 $selection2</h1>";
	
	echo "<h3>The newsletter will be sent to $selection3</h3>";
	}	

?>

</body>
</html>