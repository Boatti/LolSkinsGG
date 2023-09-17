<!DOCTYPE html>
<html lang='US'>
	<head>
		<meta charset="UTF-8">
   		<meta name="viewport" content="width=device-width, initial-scale=1.0">
   		<meta name="description" content="Every League Of Legends Skins, How many League of Legends skins are there in 2021. Lol Skins is a website that allow you to vote for your favorite skin among the 1300 skins avalaible. From Rarest lol skin to basic lol skin.">
  		<meta name="keywords" content="LOL,SKINS,LOLSKINS,League of Legends">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <title>Lol Skin Searchbar | Every League Of Legends Skins </title>
	    <script type="text/javascript" src="Javascript/scriptforsearchbar.js" defer></script>
	    <script type="text/javascript" src ="Javascript/scriptforheader.js"></script>
	    <link rel="stylesheet" href="css/normalize.css">
	    <link rel="stylesheet" href="css/style.css">
	    <link rel="stylesheet" href="css/mediaIndex.css">
	    <link rel="shortcut icon" href="images/Logoc4 icon.ico">
	    <script async src="https://www.googletagmanager.com/gtag/js?id=G-KPLYTKF07T"></script>
		<script>
  		window.dataLayer = window.dataLayer || [];
  		function gtag(){dataLayer.push(arguments);}
  		gtag('js', new Date());
  		gtag('config', 'G-KPLYTKF07T');
		</script>
		<script data-ad-client="ca-pub-9280441263346936" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
	</head>


<body>


<div id="main">

<!------------------------------------------------------------------------------------------------------------------>

	

		<?php
include('php/header.php');
?>
<!------------------------------------------------------------------------------------------------------------------>

	<div id="contenu">

		<div id="SearchBar">
		
			<input type="search" placeholder="Search Your Champion.." id="Searchbar"> 
		
		</div>


<!------------------------------------------------------------------------------------------------------------------>
	


<!------------------------------------------------------------------------------------------------------------------>
	
	

		<div id="AllChampions">


<?php
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
 //v_champions_skins
// Attempt delete query execution
$championsQuery = "SELECT *  FROM `champions`";
if($result = mysqli_query($link, $championsQuery)){

  //Récupère un tableau associatif

    while ($row = $result->fetch_assoc()) {

    printf("<div class ='IconParameters' id='".$row["id_champion"]."' name='".$row["name_champion"]."' skins='".$row["skins"]."'><a href='AllSkinsOf.php?id_champion=".$row["id_champion"]."' target='_blank'>
					<img id='IconChampions' src='".$row["img_champion"]."' alt='".$row["name_champion"]."'></a></div>");
}
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

?>
															
		</div>
	
	</div>



	
	<?php
include('php/footer.php');
?>



</div>
</body>
<style>
@media screen and (max-width: 764px)
{
footer 
	{
    position: relative;
    top: 30px;
    font-size: 0.75em;
	}
}

@media screen and (max-width: 430px)
{
footer 
	{
    font-size: 0.65em;
	}
}

</style>
</html>
