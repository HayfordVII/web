<?php 

if (isset($_POST["submit"])) {

    $bio = $_POST["bio"];
    $git_link = $_POST["git_link"];
    $linkedin_link = $_POST["linkedin_link"]; 
    $telegram_link = $_POST["telegram_link"];
    

    require_once 'dbh.inc.php';
    require_once 'functions-pro.php';

    profileUpdate($conn, $bio, $git_link, $linkedin_link, $telegram_link);

} 
else {
    header ("location: ../home.php");
}