<!DOCTYPE html>
<html lang='US'>
	<head>
		<meta charset="UTF-8">
   		<meta name="viewport" content="width=device-width, initial-scale=1.0">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <title>Contact | LOLSKINS.GG</title>
	    <link rel="stylesheet" href="css/normalize.css">
	    <link rel="stylesheet" href="css/style.css">
	    <link rel="shortcut icon" href="images/Logoc4 icon.ico">
	    <link rel="stylesheet" href="css/mediaIndex.css">
	</head>


<body>


<?php
include('php/header.php');
?>

<div id='parent'>
	<div id='h1'><h1>Contact.</h1></div>

<div id='bloc'>

<h3>Suggestion</h3>
<p>If you have any suggestion or if you have seen any bug you can contact us here : gg.lolskins@gmail.com</p>

<h3>Copyright/Trademark Information.</h3>
<p> Copyright ©. All rights reserved.  All trademarks, logos and service marks displayed on the Site are our property or the property of other third-parties. You are not permitted to use these Marks without our prior written consent or the consent of such third party which may own the Marks.</p>
</div>

<?php
include('php/footer.php');
?>

<style>

	header{
		background: rgb(2, 0, 36);
	}
	div{
		boder: 2px solid red;
	}
	#h1{
		border-bottom: 2px solid black;
		padding: 0px;
	}
p:not(footer p):not(header p){
	margin-bottom: 50px;
}
	h3{
		boder: 2px solid red;
		
	}
#parent{
	margin-top: 150px;
	color:black;
	display: flex;
	
	flex-direction: column;
	flex-wrap: wrap;
	justify-content: center;
	align-items: center;
	boder:2px solid red;
}
#bloc{
	display: flex;
	margin-top: 30px;
	margin-bottom: 50px;
	width: 50%;
	flex-direction: column;
}
	html{
		background: white;

	}

h1,h2,h3,h4 {
    display: flex;
    
    margin-block-start: 0;
    margin-block-end: 0;
    margin-inline-start: 0;
    margin-inline-end: 0;
    font-weight: normal;
}

</style>

</body>
</html>