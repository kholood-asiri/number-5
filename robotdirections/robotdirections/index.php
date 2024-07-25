<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Control Buttons</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <form method="POST" action="">
            <button type="submit" id="forward" name="action" value="forward" class="control-button" style="margin-left: 75px; border-radius: 15px">forward</button>
            <div class="row">
                <button type="submit" id="left" name="action" value="left" class="control-button" style="margin-right: 20px; border-radius: 15px">left</button>
                <button type="submit" id="stop" name="action" value="stop" class="control-button stop" style="border-radius: 15px">stop</button>
                <button type="submit" id="right" name="action" value="right" class="control-button" style="margin-left: 20px; border-radius: 15px">right</button>
            </div>
            <button type="submit" id="backward" name="action" value="backward" class="control-button" style="margin-left: 75px; border-radius: 15px">backward</button>
        </form>
        <a href="display.php" class="view-link">عرض آخر تحديث للبيانات</a>
    </div>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $action = $_POST['action'];
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

        $sql = "INSERT INTO robot_actions (action) VALUES ('$action')";

        if ($conn->query($sql) === TRUE) {
            echo "<script>alert('Action $action saved successfully');</script>";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

        $conn->close();
    }
    ?>
    <script src="scripts.js"></script>
</body>
</html>
