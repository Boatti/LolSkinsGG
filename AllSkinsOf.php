				<?php
				
				$link = mysqli_connect("mysql.lolskins.gg", "lolskins", "", "db_lolskins3");
			//$link = mysqli_connect("localhost", "root", "root", "db_lolskins");
				if($link === false){
					die("ERROR: Could not connect. " . mysqli_connect_error());
				}
				?>

				<!DOCTYPE html>
				<html lang='US'>
				<head>
					<meta charset="UTF-8">
					<meta name="viewport" content="width=device-width, initial-scale=1.0">
					<meta http-equiv="X-UA-Compatible" content="ie=edge">

					<?php
					$championQuery = "SELECT * FROM champions where id_champion='".$_GET["id_champion"]."'";
					if($result = mysqli_query($link, $championQuery))
					{
						while ($row = $result->fetch_assoc()) 
						{
						
							printf("<meta name=\"description\" content=\"Every ".$row["name_champion"]." old and new skins, and what they look like. ".$row["description"]."\">");
							printf("<title>".$row["name_champion"]." Skins | ".$row["description"]." | LOLSKINS.GG</title>");
						}
					} else{
						echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
					}
					?>


					<script src="Javascript/scriptforskins.js"></script>

					<!--   <script src="scriptforlikes.js"></script> -->
					<link rel="stylesheet" href="css/style.css">
					<link rel="stylesheet" href="css/normalize.css">
					<link rel="stylesheet" href="css/styleforskins.css">
					<link rel="stylesheet" href="css/mediaIndex.css">
					<link rel="stylesheet" href="css/mediaAllSkinsOf.css">
					<link rel="shortcut icon" href="images/Logoc4 icon.ico">
					<link href="https://fonts.googleapis.com/css2?family=Oswald:wght@400;700&display=swap" rel="stylesheet">
					<link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap" rel="stylesheet">
					<script data-ad-client="ca-pub-9280441263346936" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
				</head>

			<?php
include('php/header.php');
?>


				
				<script type="text/javascript">


					function likesFunction()
					{
						var xmlhttp;
						if (window.XMLHttpRequest)
	          {// code for IE7+, Firefox, Chrome, Opera, Safari
	          	xmlhttp=new XMLHttpRequest();
	          }
	          else
	          {// code for IE6, IE5
	          	xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	          }

	          xmlhttp.onreadystatechange=function()
	          {
	          	if (xmlhttp.readyState==4 && xmlhttp.status==200)
	          	{
	          		var data = JSON.parse(xmlhttp.responseText);

	          		var buttons = document.querySelectorAll('input');      	
	          		for (let i = 0; i != buttons.length; ++i)
	          		{
	          			var nb = 0;
	          			for (var j = 0; j < data.length; j++){
	          				if(buttons[i].id == 'bt_' + data[j].id_skin)
	          				{
	          					nb = data[j].nb;
	          				}
	          			}
	          			document.getElementById(buttons[i].id).value = nb;
	          		}
	          	}
	          }

	          xmlhttp.open("POST","Classement.php",true);
	          xmlhttp.send();
	      }


	      function voteFunction(id_skin,id_champion)
	      {
	      	var xmlhttp;
	      	if (window.XMLHttpRequest)
	          {// code for IE7+, Firefox, Chrome, Opera, Safari
	          	xmlhttp=new XMLHttpRequest();
	          }
	          else
	          {// code for IE6, IE5
	          	xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	          }

	          xmlhttp.onreadystatechange=function()
	          {
	          	if (xmlhttp.readyState==4 && xmlhttp.status==200 && xmlhttp.responseText=='OK')
	          	{
	          		likesFunction();	
	          	}
	          }
	          xmlhttp.open("POST","likes.php",true);
	          var formData = new FormData();
	          formData.append('id_skin', id_skin);
	          formData.append('id_champion', id_champion);
	          xmlhttp.send(formData);
	      }


	  </script>
	  <div id="contenu2">
	  	<div id="nameChamp"><?php
					$championQuery = "SELECT * FROM champions where id_champion='".$_GET["id_champion"]."'";
					if($result = mysqli_query($link, $championQuery))
					{
						while ($row = $result->fetch_assoc()) 
						{
						
							printf("".$row["name_champion"]."");
						
						}
					} else{
						echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
					}
?></div>
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
	  		$championQuery = "SELECT * FROM skins where id_champion='".$_GET["id_champion"]."'";

	  		if($result = mysqli_query($link, $championQuery)){

	  			/* Récupère un tableau associatif */

	  			while ($row = $result->fetch_assoc()) {

					$d_price_skin = ($row["price_skin"]==0) ? "style=\"display:none\"" : "";
					$d_priceLogo_skin = ($row["priceLogo_skin"] == null) ? "style=\"display:none\"" : "";
					$d_rarity_skin = ($row["rarity_skin"] == null) ? "style=\"display:none\"" : "";
	  				$d_legacy_skin = ($row["legacy_skin"] == null) ? "style=\"display:none\"" : "";
	  				$d_rarest_skin = ($row["rarest_skin"] == null) ? "style=\"display:none\"" : "";

										// printf("<div class=\"tablinks\"><img class=\"SkinImage\" onclick=\"openCity(event, '".$row["id_skin"]."')\" 
										// 	src=\"".$row["img_skin"]."\"><span class=\"spann\">".$row["name_skin"]."</span><img class=\"heart\" src=\"images/Heart.png\"><span class=\"price\">".$row["price_skin"]."</span><button class='bouton' id_skin='".$row["id_skin"]."' id_champion='".$row["id_champion"]."'>NB like ".$Like["nb"]."</button></div>");

	  			printf("<div id=\"tablinksdiv\"><img id=\"imageSkin\" class=\"tablinks\" onclick=\"openCity(event, '".$row["id_skin"]."')\" src=\"".$row["img_skin"]."\">
	  					<div id='divInput'><input class=\"likeSkin\" type='button' id='bt_".$row["id_skin"]."' id_skin='".$row["id_skin"]."' id_champion='".$row["id_champion"]."' value='0' onclick=voteFunction('".$row["id_skin"]."','".$row["id_champion"]."')></div>
	  					<div id=\"nameSkins\">".$row["name_skin"]."</div>
	  					<div dir='rtl' id=\"priceSkins\" ".$d_price_skin.">".$row["price_skin"]."</div>
	  					<div id=\"priceLogos\" ".$d_priceLogo_skin."><img id=\"priceLogo\" src=\"".$row["priceLogo_skin"]."\"></div>
	  					<div id=\"raritySkins\" ".$d_rarity_skin."><img id=\"raritySkin\" src=\"".$row["rarity_skin"]."\"></div>
	  					<div id=\"legacySkins\" ".$d_legacy_skin."><img id=\"legacySkin\" src=\"".$row["legacy_skin"]."\"></div>
	  					<div id=\"rarestSkins\" ".$d_rarest_skin."><img id=\"rarestSkin\" src=\"".$row["rarest_skin"]."\"></div></div>");
	  			}

	  		} else{
	  			echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
	  		}

	  		?>

	  	</div>

	  	<?php
		
	  	$skinsQuery = "SELECT * FROM skins where id_champion='".$_GET["id_champion"]."' ";
	  	if($skinsResult = mysqli_query($link, $skinsQuery)){
	  		while ($skin = $skinsResult->fetch_assoc()) {
	  			printf("<div id=\"".$skin["id_skin"]."\" class=\"tabcontent\"><div id=\"boxx\">");

	  			$skinsMoviesQuery = "SELECT * FROM skinsmovies where id_skin='".$skin["id_skin"]."'";
	  			if($skinsMoviesResult = mysqli_query($link, $skinsMoviesQuery)){

	  				/* Récupère un tableau associatif */

	  				while ($skinsMovies = $skinsMoviesResult->fetch_assoc()) {

	  					printf("<div class=\"QWER\"><div dir=\"rtl\" class=\"QWER2\">".$skinsMovies["name_spells"]."</div><video preload=\"metadata\" controls><source src=\"".$skinsMovies["src_skinMovie"]."\"type=\"video/mp4\">Sorry, your browser doesn't support embedded videos. Download Chrome.</video></div>");
	  				}
	  					printf("<div id='wanna'>Wanna see more ?&nbsp;<a href='https://www.youtube.com/c/SkinSpotlights/search?query=".$skin["name_skin"]."' target=_blank>SkinSpotlights</a>&nbsp;or&nbsp;<a href='https://www.youtube.com/c/SQUPO/search?query= All ".$skin["id_champion"]." skins' target=_blank>SQUPO</a></div></div></div>");
	  			}
	  		}


	  	} else{
	  		echo "ERROR: Could not able to execute $sql." . mysqli_error($link);
	  	}
	  	?>

	  
	  <?php
include('php/footer.php');
?>

</div>
	  <script type="text/javascript">

	  	likesFunction();

	  </script>
	</body>
	<style>
		header{
			position: relative;
			top: 0;
			left: 0;
		}

	</html>