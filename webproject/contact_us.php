<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phnum"];
    $message = $_POST["message"];
  
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "portfolio";
  
  $conn = new mysqli($servername, $username, $password, $dbname);
  // Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  
  $sql = "INSERT INTO contact_me (name, email, number, message)
  VALUES ('$name', '$email', '$phone', '$message')";
  
  if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
  }
  else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
  
  $conn->close();
  }
  
?>
</body>
</html>