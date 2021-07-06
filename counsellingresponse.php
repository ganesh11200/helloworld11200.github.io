<!DOCTYPE html>
<html>
    <head>
        <title>Response</title>
       <link rel = "stylesheet" href = "styles.css">
    </head>
    <?php
	//include 'navigbar.html' ;
	?>

    <body class = "responsebody">
        
        
        <div class = "responsediv">
        <h2 style = "text-align: center;">Your Response</h2>
    <?php
        $name = $_POST["name"];
        $id = $_POST["id"];
        $mobile = $_POST["mobile"];
        $email = $_POST["email"];
        $age = $_POST["age"];
        $problem = $_POST["problem"];

        echo "Name: ".$name."<br><br>";
        echo "ID: ".$id."<br><br>";
        echo "Age: ".$age."<br><br>";
        
        echo "Mobile Number: ".$mobile."<br><br>";
        echo "E-mail: ".$email."<br><br>";     
        echo "Problem: ".$problem."<br><br>";
	?>
	
	
	<?php
        session_start();
       
		$server = "localhost";
        $user = "root";
        $pwd = "";

        $conn = mysqli_connect($server, $user, $pwd, "company");
        if(!$conn){
            echo "Not connected to the database";
        }
        $sql1 = "INSERT INTO counselling (Name, Age, ID,  Mobile, Email, Problem) 
			VALUES ('$name', '$age', '$id', '$mobile','$email', '$problem')";

        if(mysqli_query($conn, $sql1)){
            // echo "<center><h2>Your data has been submitted successfully!!</h2></center>";
        }
        else{
			echo "not inserted in table".mysqli_error($conn);
        }
		
				
		$_SESSION["sno"] = mysqli_insert_id($conn);
		
		mysqli_close($conn);

    ?>

    <button class = "button btn" onclick = 'location.href = "counsellingedit.php"'>Edit your response</button><br>
    <button class = "btn button" onclick = "document.location = 'homepage.php'">Back to Home Page</button><br><br>
    </div>
    </body>
</html>