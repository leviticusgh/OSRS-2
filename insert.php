<?php

include 'database.php';

error_reporting(0);


if(isset($_POST['submit'])){
    
    $stuid = htmlspecialchars($_POST['stuid']);
    $firstname = htmlspecialchars($_POST['firstname']);
    $lastname = htmlspecialchars($_POST['lastname']);
    $othername = htmlspecialchars($_POST['othername']);
    $email = htmlspecialchars($_POST['email']);
    $phone_number = htmlspecialchars($_POST['phone_number']);
    $dob = htmlspecialchars($_POST['dob']);
    $level = htmlspecialchars($_POST['level']);

    $query = "SELECT * FROM student WHERE phone_number =:phone_number";
    $stmt = $db->prepare($query);
    $stmt->execute([':phone_number' => $phone_number]);
    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    $str_compare = strcoll($row, $phone_number);

    if ($str_compare == true) {
        
        $query = "INSERT INTO student(stuid, firstname, lastname, othername, email, phone_number, dob, level) VALUES (? , ? , ?, ?, ?, ?, ?, ?)";
        $values = array($stuid, $firstname, $lastname, $othername, $email, $phone_number, $dob, $level);
        $stmt = $db->prepare($query);
        $rows = $stmt->execute($values);

        echo '<script>alert("Registration Successful !!");</script>';
        echo '<script>window.location="dashboard.php";</script>';
}
else {
    
    echo '<script>alert("Error Inserting Into Data");</script>';
    echo '<script>window.location="../OSRS";</script>';
}

}