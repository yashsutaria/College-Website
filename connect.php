<?php

$name=$_POST['name'];
$phone=$_POST['phone'];
$email=$_POST['email'];
$text=$_POST['text'];

//database connection

$conn = new mysqli('localhost','root','','cwphp');
if($conn->connect_error)
{
die('Connection Failed : ' .$conn->error);
}
else
{
    $stmt = $conn=>prepare("insert into contactus(name, phone, email, text)
    values( ?, ?, ?, ?)");
    $stmt->bind_param("siss", $name, $phone, $email, $text);
    $stmt->execute();
    echo "Application Successful";
    $stmt->close();
    $conn->close();
}
?>