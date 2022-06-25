<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Index</title>
    </head>
    <body>
    <h1>Πρόδρομος - Ανάργυρος Νάσης  /  iis21149@uom.edu.gr</h1>
    <a href="show.php">Εμφάνιση</a>
    <a href="set.php">Καταχώριση</a>
    <a href="pick.php">Διαλογή</a>
    <br>

    <?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "iis21149";

        // Create connection
        $conn = new mysqli($servername, $username, $password);
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        } 

        // Create database
        $sql = "CREATE DATABASE IF NOT EXISTS iis21149";
        if ($conn->query($sql) === TRUE) {
            echo "Database created successfully / was already created <br>";
        } else {
            echo "Error creating database: " . $conn->error . "<br>";
        }
        $conn->close(); 

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        } 

        // sql to create table
        $sql = "CREATE TABLE iis21149 (
        id INT(5) NOT NULL, 
        name VARCHAR(30) NOT NULL,
        website VARCHAR(30) NOT NULL
        )";

        if ($conn->query($sql) === TRUE) {
            echo "Table iis21149 created successfully <br>";
        } else {
            echo "Error creating table: " . $conn->error . "<br>";
        }
        $conn->close();
    ?>


    </body>
</html>