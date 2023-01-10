<?php
    $name = $_POST[`name`];
    $email = $_POST[`email`];
    $subject = $_POST[`subject`]; 
    $message = $_POST[`message`];

    //Database Connection
$host = 'localhost';
$username = 'root';
$password = '';
$dname = 'Data';
   

//create a connection
$conn = new mysqli($host, $username, $password, $dname);
if(mysqli_connect_error()){
    die('Connection Error (' . mysqli_connect_errno() . ')'
        . mysqli_connect_error());
}
else{
    $sql = "INSERT INTO contact (name , email , subject , message )
    values ($name, $email, $subject , $message )";
    if($conn->query($sql)){
        echo "New Record Entered";
    }
    else{
        echo "Error : " . $sql . "<br>" . $conn->error;
    }
    $conn->close();
}
?>
