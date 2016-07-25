<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>egzg</title>
	<style type="text/css" >
	@import url(https://fonts.googleapis.com/css?family=Roboto:400,700);
body {
	font-family: 'Roboto', sans-serif;
	background-color: #FAFAFA;
	color: #555;
	max-width: 1000px;
	margin-left: auto;
	margin-right: auto;
}
fieldset{
	background-color: #fff;
	}
#result{
	
	background-color: #ddd;

}
</style>
</head>
<body>
<form action="calcul.php" method="post">
<fieldset>
  
  <legend>Ma calculatrice perso</legend>
  
  <br>
  	
  	<input type="text" name="n1" placeholder="Saisissez un nombre">
  	
  	<select name="operateur">
  		<option value="+">+</option>
  		<option value="-">-</option>
  		<option value="*">x</option>
  		<option value="/">/</option>
	</select>

  	<input type="text" name="n2" placeholder="Saisissez un nombre">
  	<input type="submit" value="Valider">

  <br><br>

  <div id="result"><?= $_SESSION['resultat']; ?></div>

</fieldset>
</body>
</html>