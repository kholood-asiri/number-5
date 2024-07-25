<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display Last Action</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h2>آخر قيمة مخزنة</h2>
        <div class="last-action">
            <?php
            // Database connection
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "robotdb";

            // Create connection
            $conn = new mysqli($servername, $username, $password, $dbname);

            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            $sql = "SELECT action FROM robot_actions ORDER BY reg_date DESC LIMIT 1";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                // Output the first letter of the last action
                while($row = $result->fetch_assoc()) {
                    echo "<span class='action'>" . strtoupper($row["action"][0]) . "</span>";
                }
            } else {
                echo "No actions found";
            }

            $conn->close();
            ?>
        </div>
    </div>
</body>
</html>
