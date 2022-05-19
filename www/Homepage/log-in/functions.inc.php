<?php

function emptyInputSignup($name, $username, $course, $phone,  $email, $location, $workstation, $pwd, $pwdrepeat, $usertype) {
    $result;
    if (empty($name) || empty($username) || empty($course) || empty($phone) || empty($location) || empty($email) || empty($workstation) || empty($pwd) || empty($pwdrepeat) || empty($usertype)) {
        $result = true;
    }

    else {
        $result = false;
    }
    return $result;
}

function invalidUid($username) {
    $result;
    if (!preg_match("/^[a-zA-Z0-9]*$/", $username)) {
        $result = true;
    }
    else {
        $result = false;
    }
    
    return $result;
}

function invalidEmail($email) {
    $result;
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $result = true;
    }

    else {
        $result = false;
    }
    return $result;
}

function pwdShort($pwd) {
    $result;
    if ($pwd < 8) {
        $result =true;
    }

    else {
        $result = false;
    }
    return $result;
}

function pwdMatch( $pwd, $pwdrepeat) {
    $result;
    if ($pwd !== $pwdrepeat) {
        $result = true;
    }

    else {
        $result = false;
    }
    return $result;
}

function uidExists($conn, $username, $email) {
    $sql = "SELECT * FROM users WHERE usersUid = ? OR usersEmail = ?;";
    $stmt = mysqli_stmt_init($conn);

    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../signup.php?error=stmtfailed");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "ss", $username, $email);
    mysqli_stmt_execute($stmt);

    $resultData = mysqli_stmt_get_result($stmt);

    if ($row = mysqli_fetch_assoc($resultData)) {
        return $row;
    }
    else {
        $result = false;
        return $result;
    }

    mysqli_stmt_close($stmt);
}


function createUser($conn, $name, $username, $course, $phone, $email, $location, $workstation,  $pwd, $usertype) {
    $sql = "INSERT INTO users (usersName, usersUid, usersCourse, usersPhone,  usersEmail, usersLocation, usersWorkstation, usersPwd, userType) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?);";
    $stmt = mysqli_stmt_init($conn);

    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: login.php?error=stmtfailed");
        exit();
    }


    $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);

    mysqli_stmt_bind_param($stmt, "sssisssss", $name, $username, $course, $phone, $email, $location, $workstation, $hashedPwd, $usertype);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("location: login.php?error=none"); 
    exit();
}



function emptyInputLogin($username,  $pwd, ) {
    $result;
    if ( empty($username) || empty($pwd)) {
        $result = true;
    }

    else {
        $result = false;
    }
    return $result;
}


function loginUser($conn, $username, $pwd) {
    $uidExists = uidExists($conn, $username, $username);

    if ($uidExists === false) {
        header("location: login.php?error=wronglogin");
        exit();
    }

    $pwdHashed = $uidExists["usersPwd"];
    $checkPwd = password_verify($pwd, $pwdHashed);

    
    if ($checkPwd === false) {
        header("location: login.php?error=wronglogin");
        exit();
    }
    else if ($checkPwd === true) {
        $sql = "SELECT * FROM users WHERE usersId='userid';";
        $sqldata = mysqli_query($conn, $sql) ;

        if(mysqli_num_rows($sqldata) > 0){
            while($row = mysqli_fetch_assoc($sqldata)){
                if ($checkPwd === true) {
                    session_start();
                    $_SESSION["userid"] = $uidExists["usersId"];
                    $_SESSION["useruid"] = $uidExdists["usersUid"];
                    $_SESSION['username'] = $row['usersName'];
                    $_SESSION['course'] = $row['usersCourse'];
                    $_SESSION['name'] = $row['usersName'];
                    $_SESSION['location'] = $row['usersLocation'];
                    $_SESSION['usertype'] = $row['userType'];
                    header("location: ../home-page.php");
                    exit();
                }
            }
        }else {
            header("location: ../home-page.php");
        }
        
    }

}