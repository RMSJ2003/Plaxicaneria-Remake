<?php
    $firstName = $_POST["firstName"];
    $lastName = $_POST["lastName"];
    $email = $_POST["email"];

    //Database connection
    $host = "localhost";
    $dbname = "userinput";
    $username = "root";
    $password = "";
    $conn = mysqli_connect(hostname: $host, username: $username, password: $password, database: $dbname);
    if(mysqli_connect_errno()){
        die("Connection erro: " . mysqli_connect_errno());
    }
    $sql = "INSERT INTO signation(firstName, lastName, email) VALUES(?, ?, ?)";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt, $sql)){
        die(mysqli_error($conn));
    }
    mysqli_stmt_bind_param($stmt, "sss", $firstName, $lastName, $email);
    mysqli_stmt_execute($stmt);
    echo '<script type="text/javascript"> ';
    echo 'document.location="howCanIHelp.html"';
    echo '</script>';
?>