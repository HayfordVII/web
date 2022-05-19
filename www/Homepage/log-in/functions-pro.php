<?php

function profileUpdate($conn, $bio, $git_link, $linkedin_link, $telegram_link) {
    $sql = "UPDATE users SET usersBio = $_POST[bio], usersGitlink = $_POST[git_link], usersLinkedin = $_POST[linkedin_link], usersTelegram = $_POST[telegram_link];";
 

    header("location: ../home.php?error=none"); 
    exit();
}