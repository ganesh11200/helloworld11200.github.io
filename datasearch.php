<!DOCTYPE html>
<html>
	<head>
		<title>Search result</title>
		<link rel = "stylesheet" href = "styles.css">
	</head>

	<body class = "responsebody">
		<div class = "responsediv">
<?php

$search = $_POST['search'];
$column = $_POST['column'];

 
$server = "localhost";
$user = "root";
$pwd = "";

$conn = mysqli_connect($server, $user, $pwd, "company");

if (!$conn){
	echo("Connection failed: ". $conn->connect_error);
}

$sql5 = "SELECT * FROM financialhelp WHERE $column LIKE '%$search%'";

$result = mysqli_query($conn,$sql5);

if ($result->num_rows > 0){
while($row = mysqli_fetch_assoc($result) ){
	echo "Name: ".$row['Name']." <br><br>ID: ".$row['ID']."<br><br>Mobile Number: ". $row['Mobile']."<br><br>Email: ".$row['Email'].
	"<br><br>Are tested positive for covid? ".$row['Covidstatus']."<br><br>Are your family members affected? ".$row['Familycovidstatus'].
	"<br><br>Reason to claim Financial Support: ".$row['Reason']."<br><br>Expected Amount: ".$row['Expectedamount'].
	"<br><br>Account Number: ".$row['Accountno']."<br><br>Bank Name: ".$row['Bank']."<br><br>IFSC Code: ".$row['IFSC']."<br><br>";
}
} else {
	echo "<h2>Invalid ID\Name or Employee with this ID\Name does not need Financial Help</h2>";
}

mysqli_close($conn);

?>
<br><br>
<button class = "button btn" onclick = "document.location = 'searchemployee.php'">Go Back</button><br><br>
</div>
</body>
</html>