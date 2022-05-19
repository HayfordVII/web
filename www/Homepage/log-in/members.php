<?php  

if (isset($_SESSION['useruid']) ) {
    
    $sql = "SELECT * FROM users ORDER BY id ASC";
    $res = mysqli_query($conn, $sql);
}else{
	header("Location: header.php");
}