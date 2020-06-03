<html>
<title>The Stock Tracker</title>
      <link href = "text/css" rel = "stylesheet">
      
      <style>
		body {
  		background-color: #ADABAB;
  		font-family: "Palatino Linotype", "Book Antiqua", Palatino, serif;
    	}
    h1,h2,h3,h4,h5 {
	  color: #2F4F4F;
	  margin-left: 20px;
	  text-decoration: underline;
	    } 	

#main  { 
	  clear: both;
	  text-align: center;
	  border-style: solid;
	  padding: 1px;
	  background-color: Grey;
  	}  
	</style>

<body>

<div id = "main">
<?php 

	
$selection1 = $_POST["symbol"];	
$selection2 = $_POST["stock"];		// get the form item selected

	
$user = 'root';
$pw = '';
$host = 'localhost';
$db = 'stock';

$connect = mysqli_connect($host, $user, $pw, $db) or die("Could not connect");

echo "Connection Successful!!!" . "<br>";

$sql  = "SELECT * FROM companies where ticker = '$selection1' ";

$result = mysqli_query($connect, $sql);

if (mysqli_num_rows($result)>0) {
	while( $row=$result->fetch_assoc() )

{

	if ($row['ticker'] == $selection1) {
	echo "<p>" . "You have selected " . $row['name'] . "<br />" ;
	echo "<p>" . "The Company Stock Symbol: " . $row['ticker'] . "<br />";
		
		foreach($selection2 as $t) {

				if ($t == 'stock_value') {
				//echo $row['ticker'];

				echo "<p>" . "The Current Company Stock Price: " . $row['cuprice'] . "<br />" ;
				echo "<p>" . "The Highest Company Stock Price of the year: " . $row['hiprice'] . "<br />" ;
				echo "<p>" . "The Lowest Company Stock Price of the year: " . $row['loprice'] . "<br />" ;


				}
				
				elseif ($t == 'company_summary') {
					echo "<p>". "<h3>Summary of the company</h3>" .  $row['Summary']. "<br />";
					echo "<p>". "<h4>Annual Revenue of the company</h4>"  . $row['Revenue'];

				}
				
				else {
					echo "<p>". "<h3>Detailed Info</h3>" ;
					echo "The Number of offices the company has: " . $row['NoLocations']. "<br />";
					echo "The Number of employees the company has: " . $row['NoEmployees']. "<br />";
					
					$sql1  = "SELECT * FROM officers where ticker = '$selection1' ";

					$result1 = mysqli_query($connect, $sql1);

					echo "<h3>Company Leadership</h3>";

					while( $row1 = mysqli_fetch_array($result1) ){


					echo '
					
					<img src= "data:image/jpeg;base64,'.base64_encode( $row1['Image'] ).'"  alt="Officer" width = "80"  height="100"/>  
					' . '</br />'. $row1['Summary']. '<br />';

						}
					
					}

	
				}	
				
		}
	}
}

 else {
 	echo "The option selected is currently unavailable";
 	}

mysqli_close($connect);
?>
</div>
</body>
</html>