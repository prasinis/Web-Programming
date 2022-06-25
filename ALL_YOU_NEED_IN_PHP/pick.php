<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Pick</title>
        <style>
            table, th, td {
                border: 1px solid black;
            }
        </style>
    </head>
    <body>
        <h1>Πρόδρομος - Ανάργυρος Νάσης  /  iis21149@uom.edu.gr</h1>
        <?php
            // About connection
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "iis21149";

            // Create connection
            $conn = new mysqli($servername, $username, $password, $dbname);
            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            $sql = "SELECT id, name, website FROM iis21149;";
            $result = $conn->query($sql);
            
            if ($result->num_rows > 0) {
                echo "<table><tr><th>ID</th><th>Name</th><th>Website</th></tr>";
                // output data of each row
                $i = 0;
                while($row = $result->fetch_assoc()) {
                    if(str_contains($row["id"], '21149')) {
                        echo "<tr><td>" . $row["id"]. "</td><td>" . $row["name"]. "</td><td>" . $row["website"]. "</td></tr>";
                    }
                    $i++;
                }
                echo "</table>";
            } else {
                echo "0 results";
            }
            
            $conn->close();
        ?>
        <a href="index.php">Home</a>
    </body>
</html>