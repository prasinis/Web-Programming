<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Set</title>
        <style>
            .error {color: #FF0000;}
        </style>
    </head>
    <body>
    <?php
        // define variables and set to empty values
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "";
        $idErr = $nameErr = $websiteErr = "";
        $id = $name = $website = "";

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (empty($_POST["id"])) {
                $idErr = "Id is required";
            } else {
                $id = test_input($_POST["id"]);
            }
            
            if (empty($_POST["name"])) {
                $nameErr = "Name is required";
            } else {
                $name = test_input($_POST["name"]);
            }
                
            if (empty($_POST["website"])) {
                $websiteErr = "Website is required";
            } else {
                $website = test_input($_POST["website"]);
                // check if URL address syntax is valid (this regular expression also allows dashes in the URL)
                if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {
                $websiteErr = "Invalid URL"; 
                }
            }

            // Create connection
            $conn = new mysqli($servername, $username, $password, $dbname);

            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }   

            $stmt = $conn->prepare("INSERT INTO iis21149 (id, name, website) VALUES (?, ?, ?)");
            $stmt->bind_param("sss", $id, $name, $website);
            $stmt->execute();

            $stmt->close();
            $conn->close();
            echo "Your data has been submited successfully!<br>";
        }

        function test_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
    ?>

    <h1></h1>
    <p><span class="error">* required field.</span></p>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 
    Id: <input type="text" name="id">
    <span class="error">* <?php echo $idErr;?></span>
    <br><br>
    Name: <input type="text" name="name">
    <span class="error">* <?php echo $nameErr;?></span>
    <br><br>
    Website: <input type="text" name="website">
    <span class="error">* <?php echo $websiteErr;?></span>
    <br><br>
    <input type="submit" name="submit" value="Submit"> 
    </form>
    
    <a href="index.php">Home</a>
    </body>
</html>
