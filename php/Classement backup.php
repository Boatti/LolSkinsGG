<?php
if (!empty($_POST['fruit']))
{

/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "root", "db_lolskins");
 
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
 
// Attempt delete query execution
$deleteQuery = "select count(ip) FROM likes_system WHERE ip='".$_POST['fruit']."'";
if($result = mysqli_query($link, $deleteQuery)){
   while ($row = $result->fetch_row()) {
        echo($row[0]);
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}


// Close connection
mysqli_close($link);
}
?>