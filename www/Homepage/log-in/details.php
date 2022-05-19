<?php  
include 'dbh.inc.php';

if (isset($_SESSION['userid']) ) {
    $email = $_POST["email"];

    $sql = "SELECT * FROM `users` WHERE usersEmail= '$email'";

    $userFound = mysqli_query($conn, $sql);

    if(mysqli_num_rows($userFound) > 0){
        while($row = mysqli_fetch_assoc($userFound)){
            if ($checkPwd === true) {
                $_SESSION['username'] = $row['usersName'];
                $_SESSION['course'] = $row['usersCourse'];
                $_SESSION['name'] = $row['usersName'];
                $_SESSION['location'] = $row['usersLocation'];
                $_SESSION['usertype'] = $row['userType'];
            }
        }
    }
    
    
	
}else{
	header("Location: header.php");
}
function getUsersData ($userid) {

    $q = mysql_query("SELECT * FROM users WHERE usersId".$userid);
    while ($row = mysql_fetch_assoc($sql_users)) {
        $array['userid'] = $row['usersId'];
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
$q = mysql_query("SELECT * FROM users WHERE usersUid".$username);
while ($row = mysql_fetch_assoc($q)) {
    return $row['userid'];
}
}

