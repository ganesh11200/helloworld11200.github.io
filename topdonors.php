<html>
    <head>
     <link rel = "stylesheet" href = "styles.css">
     

    </head>
    
    <div style="text-align: center">
        <?php
            
            $server = "localhost";
            $user = "root";
            $pwd = "";
            
            $conn = mysqli_connect($server, $user, $pwd, "company");
            
            if (!$conn){
                echo("Connection failed: ". mysqli_error($conn));
            }
            
            $sql6 = "SELECT * FROM donate ORDER BY Amount DESC";
            $res = mysqli_query($conn,$sql6);
            
            
            if (mysqli_num_rows($res) > 0){
                
                for($x=0; ($x<3)&&($row = mysqli_fetch_assoc($res)); $x++){
                                       
                    echo "<table><tr><th style = 'width: 5%;'> ".$row["Name"]."</th>";
                    echo "<th style = 'width: 5%;''>".$row["ID"]."</th>";
                    echo "<th style = 'width: 5%;'>".$row["Amount"]."</th></tr></table><br><br>";
                }
            }
            else {
                echo "No records";
            }
            
            mysqli_close($conn);
        ?>
        </div
    </html>    