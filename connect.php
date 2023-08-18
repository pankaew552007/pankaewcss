<?php
$firstname = $_POST['firstName'];
$lastname = $_POST['lastName'];
$gender = $_POST['gender'];
$email = $_POST['email'];
$password = $_POST['password'];
$number = $_POST['number'];

//Database connecction
$conn = new mysqli('localhost','','test');
if($conn->connect_error){
    echo "$conn->connect_error";
    die("Connection Failed : ". $conn->connect_error);
}else {
    $stmt = $conn->prepare("insert into registration (firstName, lastName, gender, email, password, number)(?, ?, ?, ?, ?)");
    $stmt->bind_param("sssssi", $firstname, $lastname, $gender, $email, $password, $number,);
    $execval = $stmt->execute();
    echo $execval;
    echo "registration-successfully...";
    $stmt->close();
    $stmt->close();
}
?>