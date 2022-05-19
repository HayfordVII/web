<?php

require ("dbh.inc.php");

$array = array();

function getUsersData ($id) {
    $sql_users = mysqli_query("SELECT * FROM users WHERE userId=$id");
    while ($row = mysqli_fetch_assoc($sql_users)) {
        $array['id'] = $row['usersId'];
        $array['username'] = $row['usersName'];
        $array['usercourse'] = $row['usersCourse'];
        $array['userlocation'] = $row['usersLocation'];
        $array['userworkstation'] = $row['usersWorkstation'];
        $array['useremail'] = $row['usersEmail'];
        $array['usertype'] = $row['userType'];
        $array['userbackground'] = $row['usersBackground'];
        $array['userpic'] = $row['usersPic'];
        $array['userbio'] = $row['usersBio'];
        $array['usergit'] = $row['usersGitlink'];
        $array['userlinkedin'] = $row['usersLinkedin'];
        $array['usertelegram'] = $row['usersTelegram'];
    }


    return $array;
}

function getId($username) {
    $sql = mysqli_query("SELECT usersId FROM users WHERE usersUid =$username")  ;
    while ($sql = mysqli_fetch_assoc($sql) ) {
        return $row['id'];
    }

}

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
        $array = array();
