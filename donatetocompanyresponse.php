<!DOCTYPE html>
<html>
    <head>
        <title>Response</title>
        <link rel = "stylesheet" href = "styles.css" >
        
    </head>

    <body class = "responsebody">
        <?php
        echo "<br><br><br><br>";
        ?>
    <div class = "responsediv">
        
    <?php
        
        $Name = $_POST['name'];
        ## $age = $_POST['age'];
        $idnumber = $_POST['id'];
        $mobileno = $_POST['mobile'];
        $emailid = $_POST['email'];
        $amountdonated = $_POST['amount'];
        echo "<h2>Your Response</h2>";
        echo "Name: ".$Name."<br><br>";
    
        echo "ID: ".$idnumber."<br><br>";
        echo "Mobile Number: ".$mobileno."<br><br>";
        echo "E-mail: ".$emailid."<br><br>";
        echo "Donating Amount: ".$amountdonated."<br><br>";
        
        session_start();
        $server = "localhost";
        $user = "root";
        $pwd = "";

        $conn = mysqli_connect($server, $user, $pwd, "company");
        if($conn){
             //echo "Connected to database succesfully";
        }
         else{
            echo "Not connected to the database";
        }
        $sql1 = "INSERT INTO donate (Name, ID, Mobile, Email, Amount) VALUES ('$Name', 
        '$idnumber', '$mobileno', '$emailid', '$amountdonated')";

        if(mysqli_query($conn, $sql1)){
             // echo "Your data has been sumbitted successfully";
        }
        else{

            echo "not inserted in table";
        }

        $serial = mysqli_insert_id($conn);
        $_SESSION['currentsno'] = $serial;


    ?>
        
        <h2 style = "font-family: 'Brush Script MT', cursive; color: rgb(1, 27, 50);">Thank you for Donating!!</h2><br><br>
        <button class = "btn button" onclick = "document.location = 'donatetocompanydup.php'">Edit your response</button><br><br>
      <button class = "btn button" onclick = "document.location = 'homepage.php'">Back to Home Page</button><br><br>
        
        </div>
        
    </body>
</html>