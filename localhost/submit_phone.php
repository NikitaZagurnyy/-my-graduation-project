<?php

if(isset($_POST['phone_number']) && !empty($_POST['phone_number'])) {
    
    $phone_number = $_POST['phone_number'];
    
    
    $servername = "localhost"; 
    $username = "root"; 
    $password = "root"; 
    $dbname = "activiti"; 

   
    $conn = new mysqli($servername, $username, $password, $dbname);

    
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    
    $sql = "INSERT INTO phone_numbers (phone_number) VALUES ('$phone_number')";

    
    if ($conn->query($sql) === TRUE) {
        
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    
    $conn->close();
} else {
    echo "Phone number is not set or empty";
}
?>
