<?php
 
// if (!empty($_POST['id_champion']) && !empty($_POST['id_skin']))
// {

/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
	
 $link = mysqli_connect("mysql.lolskins.gg", "lolskins", "", "db_lolskins3");
			//$link = mysqli_connect("localhost", "root", "root", "db_lolskins");
 $_List_likes = array();

// Attempt delete query execution
$LikesQuery = "SELECT id_champion,id_skin,count(ip) as nb FROM likes_system group by id_skin, id_champion";
if($Likes = mysqli_query($link, $LikesQuery)){
								while ($Like = $Likes->fetch_assoc()) {
	$_List_likes[] = array( 'id_champion' => $Like[id_champion],'id_skin' => $Like[id_skin],'nb' => $Like[nb]);
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
} 

echo json_encode( $_List_likes);
//echo json_encode( $c );

// Close connection
mysqli_close($link);
//}
?>