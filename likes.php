<?php

if (!empty($_POST['id_champion']) && !empty($_POST['id_skin']))
{
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
	#$link = mysqli_connect("db5000512886.hosting-data.io", "dbu470275", "", "dbs492234");
			$link = mysqli_connect("mysql.lolskins.gg", "lolskins", "", "db_lolskins3");
            //$link = mysqli_connect("localhost", "root", "root", "db_lolskins");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
    $ip = $_SERVER['HTTP_CLIENT_IP'];
} elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
    $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
} else {
    $ip = $_SERVER['REMOTE_ADDR'];
}

 $_Like_EXIST;

// Attempt delete query execution
$LikesQuery = "SELECT ip FROM likes_system where ip='".$ip."' and id_champion='".$_POST['id_champion']."' and id_skin='".$_POST['id_skin']."'";
if($Likes = mysqli_query($link, $LikesQuery)){
								while ($Like = $Likes->fetch_assoc()) {
	$_Like_EXIST= $Like[ip];
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
} 
 
// Attempt delete query execution
$deleteQuery = "DELETE FROM likes_system WHERE ip='".$ip."' and id_champion='".$_POST['id_champion']."'";
if(mysqli_query($link, $deleteQuery)){
    #echo "Records were deleted successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
if($_Like_EXIST <> $ip)
{

$insertQuery = "INSERT INTO likes_system (ip, id_champion, id_skin) VALUES ('".$ip."','".$_POST['id_champion']."','".$_POST['id_skin']."')";

if(mysqli_query($link, $insertQuery)){
    #echo "Records were deleted successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
}

// Close connection
mysqli_close($link);
echo 'OK';
}
?>