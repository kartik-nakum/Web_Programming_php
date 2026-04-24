<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_POST['insert'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];

    $sql = "INSERT INTO users (name, email, phone) VALUES ('$name', '$email', '$phone')";
    if ($conn->query($sql) === TRUE) {
        $message = "Record inserted successfully!";
    } else {
        $message = "Error: " . $conn->error;
    }
}

if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];

    $sql = "UPDATE users SET name='$name', email='$email', phone='$phone' WHERE id=$id";
    if ($conn->query($sql) === TRUE) {
        $message = "Record updated successfully!";
    } else {
        $message = "Error: " . $conn->error;
    }
}

if (isset($_POST['delete'])) {
    $id = $_POST['id'];

    $sql = "DELETE FROM users WHERE id=$id";
    if ($conn->query($sql) === TRUE) {
        $message = "Record deleted successfully!";
    } else {
        $message = "Error: " . $conn->error;
    }
}

if (isset($_POST['view'])) {
    $view_sql = "SELECT * FROM users";
    $result = $conn->query($view_sql);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>CRUD Operations</title>
</head>
<body>
    <h2>Registration Form</h2>
    <?php if (isset($message)) echo "<p><strong>$message</strong></p>"; ?>

    <form method="CRUD Operation.php" action="POST">
        <label for="id">ID (for Update/Delete):</label>
        <input type="number" name="id" placeholder="Enter ID"><br><br>

        <label for="name">Name:</label>
        <input type="text" name="name" placeholder="Enter Name"><br><br>

        <label for="email">Email:</label>
        <input type="email" name="email" placeholder="Enter Email"><br><br>

        <label for="phone">Phone:</label>
        <input type="text" name="phone" placeholder="Enter Phone"><br><br>

        <button type="submit" name="insert">Insert</button>
        <button type="submit" name="update">Update</button>
        <button type="submit" name="delete">Delete</button>
        <button type="submit" name="view">View</button>
    </form>

    <?php
    if (isset($result) && $result->num_rows > 0) {
        echo "<h3>Records:</h3>";
        echo "<table border='1'>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                </tr>";
        while ($row = $result->fetch_assoc()) {
            echo "<tr>
                    <td>{$row['id']}</td>
                    <td>{$row['name']}</td>
                    <td>{$row['email']}</td>
                    <td>{$row['phone']}</td>
                  </tr>";
        }
        echo "</table>";
    } elseif (isset($_POST['view'])) {
        echo "<p>No records found.</p>";
    }
    ?>

</body>
</html>
