<?php
$link = mysqli_connect("localhost", "root", "root", "db_lolskins");
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>

<!DOCTYPE html> <html lang='US'>
	<head>
		<meta charset="UTF-8">
   		<meta name="viewport" content="width=device-width, initial-scale=1.0">
	    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	    <meta name="description" content="
<?php
$championQuery = "SELECT * FROM champions";
if($result = mysqli_query($link, $championQuery))
{
 while ($row = $result->fetch_assoc()) 
 {
 printf("".$row["description"]."");
 } 
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
?>">
<title>
<?php
$championQuery = "SELECT * FROM champions";
if($result = mysqli_query($link, $championQuery))
{
 while ($row = $result->fetch_assoc()) 
 {
 printf("".$row["title"]."");
 } 
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
?> Skins | LOLSKINS.GG
</title>
	    <script src="../Javascript/scriptforskins.js"></script>
	    <link rel="stylesheet" href="../css/style.css">
	    <link rel="stylesheet" href="../css/normalize.css">
	    <link rel="stylesheet" href="../css/styleforskins.css">
	    
	    <link rel="shortcut icon" href="Logoc4 icon.ico">
	    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@400;700&display=swap" rel="stylesheet">
	    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap" rel="stylesheet">
<script type="text/javascript">
$( document ).ready(function() {

    window.addEventListener('load', function () {
      console.log('Cette fonction est exécutée une fois quand la page est chargée.');
       var buttons = document.querySelectorAll('.bouton');

        for (let i = 0; i != buttons.length; ++i)
        {
                buttons[i].setAttribute('data-id', i+1);
                     var xhr1 = new XMLHttpRequest();
                   var formData1 = new FormData();
                    xhr1.open('POST', 'Classement.php');
           formData1.append('fruit', buttons[i].getAttribute('data-id'));
            xhr1.send(formData1);

            buttons[i].addEventListener('click', function(){
                var xhr = new XMLHttpRequest();
                xhr.open('POST', 'likes.php');
                var formData = new FormData();
                formData.append('fruit', buttons[i].getAttribute('data-id'));
                xhr.send(formData);
              
            });
        }
          console.log('Fonction de like chargée.');
    });
    });
</script>

	</head>

	<header>

			<div id="placelogo"><a href="../index.php" target="_blank"><img id="imglogo" src="../images/Logo/Logoc2_1.png"></a></div>

			<a href='../HeaderTab/FunFact.html' target="_blank"><div id="FunFact"><span>FUN FACT</span></div></a>

			<a href='../HeaderTab/FunFact.html' target="_blank"><div id="FAQ"><span>F.A.Q</span></div></a>

			<a href='../HeaderTab/FunFact.html' target="_blank"><div id="OpSkins"><span>OP SKINS</span></div></a>


		</header>



<div id="contenu2">

<div class="tab">
		

<?php
if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
    $ip = $_SERVER['HTTP_CLIENT_IP'];
} elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
    $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
} else {
    $ip = $_SERVER['REMOTE_ADDR'];
}
 
// Attempt delete query execution
$championQuery = "SELECT * FROM skins";
if($result = mysqli_query($link, $championQuery)){

  /* Récupère un tableau associatif */

    while ($row = $result->fetch_assoc()) {

 printf("<div class=\"tablinks\"><img class=\"SkinImage\" onclick=\"openCity(event, '".$row["name_skin"]."')\"src=\"".$row["img_skin"]."\"><span class=\"spann\">".$row["name_skin"]."</span><a><img class=\"heart\" src=\"../images/Heart.png\"></a></div>");
}


} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
?>



<?php
$championQuery = "SELECT * FROM skinsmovies";
if($result = mysqli_query($link, $championQuery)){

  /* Récupère un tableau associatif */

    while ($row = $result->fetch_assoc()) {

    printf("<div id=\"JusticarAatrox\" class=\"tabcontent\">

			<video controls autoplay muted ><span class=\"QWER\">Q</span>

    <source src=\"".$row["src_skinMovie"]."\"
            type=\"video/mp4\">
    Sorry, your browser doesn't support embedded videos. Download Chrome.
		</video>


</div>");
}


} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}





?>

</div>


</div>
<div id="footer">
	<!------------------------------------------------------------------------------------------------------------------>
	<footer>

			

				<div id="notRelated">

					<p>We are not related to League Of Legends/Riots Games.</br>Lol Skins isn't endorsed by Riot Games and doesn't reflect the views or opinions of Riot Games or anyone officially involved in producing or managing League of Legends.</br>
					League of Legends and Riot Games are trademarks or registered trademarks of Riot Games, Inc. League of Legends © Riot Games, Inc.
					</p>
				
				<div id="divTwitter"><img id="twitter" src="../images/twitter2.png"></div>

					<button  class='butto'> Salut </button>
					<button  class='butto'> Salut 2</button>

				</div>

				<div id="politics"></div>

				<div id="politics"></div>


	</footer>

</div>

	</body>

</html>