<?php

    $username = "a"; 
    $passwork = "a"; 
    $email = "a";
    // $inputPassword = $_POST['password'] ?? ''; // Get the password from the form submission

    if(isset($_GET['username'])){
        $username = $_GET['username'];
        // echo $username;
    }
    if(isset($_GET['password'])){
        $passwork = $_GET['password'];
        // echo $passwork;
    }
    if(isset($_GET['email'])){
        $email = $_GET['email'];
        // echo $email;
    } 

    // if ($username === "") || ($passwork == "") || ($email == "") {
    //     // Redirect to the login page if any field is empty
    //     echo "<script>alert('Incorrect password! Please try again.');</script>";
    //     header("Location: login2.php");
    //     exit();
    // }    

    // connect to database
    $servername = "localhost";
    $sv_username = "root"; // Default XAMPP username
    $sv_password = ""; // Default XAMPP password
    $dbname = "animedb";

    // Create connection
    $conn = new mysqli($servername, $sv_username, $sv_password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Check if username exists
    $sql = "
        SELECT * 
        FROM user 
        WHERE username = '$username'
    ";

    $result = $conn->query($sql);
  
    if ($result->num_rows > 0) {
        echo "<script>alert('Username already exists.');
        </script>";
        // exit();
    }
    else {
        // Insert new user into the database
        $hashedPassword = password_hash($passwork, PASSWORD_DEFAULT);

        $sql = "
            INSERT INTO user (username, pass, pass_hash, email) 
            VALUES ('$username', '$passwork', '$hashedPassword', '$email')
        ";
        
        // insert thanh cong
        if ($conn->query($sql) === TRUE) {
            echo "<script>alert('New record created successfully');</script>";
            header("Location: login.php");
            exit();
        } else {
        // insert that bai
            echo "<script>alert('Error: " . $sql . "<br>" . $conn->error . "');</script>";
            header("Location: login2.php");
            exit();
        }

        $result->free();
        $conn->close();
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>this is control page</p>
    <p>
        <?php
            echo "Username: " . htmlspecialchars($username) . "<br>";
            echo "Password: " . htmlspecialchars($passwork) . "<br>";
            echo "Hashed Password: " . htmlspecialchars($hashedPassword) . "<br>";
            echo "Email: " . htmlspecialchars($email) . "<br>";
        ?>
    </p>
</body>
</html>