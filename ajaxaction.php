<?php
include 'Class/User.php';
$objUser = new User(); 
$action = $_POST['action'];
switch($action) {
    case 'register_user' :
        $username = $_POST['name'];
        $email = $_POST['email'];
        $contact = $_POST['contact'];
        $password = md5($_POST['password']);
        $question = $_POST['question'];
        $answer = $_POST['answer'];
        $query = "INSERT into tbl_user(`email`,`name`,`mobile`,`password`,`security_question`,`security_answer`)
        VALUES ('$email','$username','$contact', '$password', '$question', '$answer')";
        $data =  $objUser->insert($query);
        echo $data;
    break;
    case 'login':
        $email = $_POST['email'];
        $password = $_POST['password'];
        $query = "SELECT * from tbl_user WHERE `email`='$email' and `password`='$password' and `email_approved`= 1 or `phone_approved` = 1";
        $data = $objUser->login($query);
        echo $data;
    break;
}
?> 
