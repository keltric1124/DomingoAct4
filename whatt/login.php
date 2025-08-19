<?php
$conn=mysqli_connect(hostname: "localhost", username: "root", password: "", database: "login");
if(!$conn){
    die("Not Connected");
}

$email = $_POST['email'];
$password = $_POST['password'];

$sql = "SELECT * from it where email='$email' and password='$password'";

$result=mysqli_query(mysql: $conn,query: $sql);

if(mysqli_num_rows(result: $result)>0){
    echo"THANKS FOR LOGGING IN!!";
    exit();
}
else{
    echo("INCORRECT");
}
mysqli_close(mysql: $conn);
?>