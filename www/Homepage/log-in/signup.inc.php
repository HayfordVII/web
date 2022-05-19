<?php 


if (isset($_POST["submit"])) {

    
    $name = $_POST["name"];
    $username = $_POST["uid"];
    $course = $_POST["course"];
    $phone = $_POST["phone"];
    $email = $_POST["email"];
    $location = $_POST["location"];
    $workstation = $_POST["workstation"];
    $pwd = $_POST["pwd"];
    $pwdRepeat = $_POST["pwdrepeat"];
    $usertype = $_POST["usertype"];

    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';
    

    if (emptyInputSignup($name, $username, $course, $phone, $email, $location, $workstation, $pwd, $pwdRepeat, $usertype) !== false) {
        header("location: Signup.php?error=empty");
        exit();
    }
    if (invalidUid($username) !== false) { 
        header("location: Signup.php?error=Invailuid");
        exit();
    }
    if (invalidEmail($email) !== false) {
        header("location: Signup.php?error=Invailemail");
        exit();
    }
    if (pwdShort($pwd) !== false) {
        header("location: Signup.php?error=passwordisshort");
        exti();
    }
    
    if (pwdMatch($pwd, $pwdRepeat) !== false) {
        header("location: Signup.php?error=passworsdontmatch");
        exit();
    }

    if (uidExists($conn, $username, $email) !== false) {
        header("location: Signup.php?error=usernametaken");
        exit();
    }



    createUser($conn, $name, $username, $course, $phone, $email, $location, $workstation, $pwd, $usertype);
    
    
         
        
    
}
else {
    header ("location: log-in/Signup.php");
    exit();
}