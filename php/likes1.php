<?php
	$link = mysqli_connect("mysql.lolskins.gg", "lolskins", "", "db_lolskins");
			//$link = mysqli_connect("localhost", "root", "root", "db_lolskins");
		if($link === false){
		    die("ERROR: Could not connect. " . mysqli_connect_error());
		}


$insertQuery = "INSERT INTO likes_system (ip, id_skin,id_champion) VALUES ('a','a','a')";
// $insertQuery = "INSERT INTO likes_system (ip, id_skin,id_champion) VALUES ('".$ip."','".$_POST['fruit']."','".$ip."')";

if(mysqli_query($link, $insertQuery)){
    echo "Records were deleted successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

// Close connection
mysqli_close($link);


// if (!empty($_POST['fruit']))
// {

// /* Attempt MySQL server connection. Assuming you are running MySQL
// server with default setting (user 'root' with no password) */
// $link = mysqli_connect("localhost", "root", "root", "db_lolskins");
 
// // Check connection
// if($link === false){
//     die("ERROR: Could not connect. " . mysqli_connect_error());
// }
// if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
//     $ip = $_SERVER['HTTP_CLIENT_IP'];
// } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
//     $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
// } else {
//     $ip = $_SERVER['REMOTE_ADDR'];
// }
 
// // Attempt delete query execution
// $deleteQuery = "DELETE FROM likes_system WHERE ip='".$ip."'";
// if(mysqli_query($link, $deleteQuery)){
//     echo "Records were deleted successfully.";
// } else{
//     echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
// }
 
// $insertQuery = "INSERT INTO likes_system (ip, id_skin) VALUES ('".$ip."','".$_POST['fruit']."')";

// if(mysqli_query($link, $insertQuery)){
//     echo "Records were deleted successfully.";
// } else{
//     echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
// }

// // Close connection
// mysqli_close($link);
// }
?>