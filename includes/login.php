<?php include "connection.php"; ?>
<?php include "header.php"; ?>
<?php session_start();  ?>
<?php
if (isset($_POST['sign_in'])) {
    $name = $_POST['name'];
    $password = $_POST['password'];

    // SQL INJECTION
    $name = mysqli_real_escape_string($connection, $name);
    $password = mysqli_real_escape_string($connection, $password);

    $query = "SELECT * FROM users WHERE name = '{$name}' ";
    $login_result = mysqli_query($connection, $query);

    while ($row = mysqli_fetch_array($login_result)) {
        $database_id = $row['id'];
        $database_name = $row['name'];
        $database_email = $row['email'];
        $database_address = $row['address'];
        $database_number = $row['number'];
        $database_password = $row['password'];
    }

    if ($name === $database_name) {
        $_SESSION['name'] = $database_name;
        $_SESSION['email'] = $database_email;
        $_SESSION['address'] = $database_address;
        $_SESSION['number'] = $database_number;
        $_SESSION['password'] = $database_password;

        header("Location: ../admin");
    } else {
        header("Location: ../index.php");
    }
}

?>