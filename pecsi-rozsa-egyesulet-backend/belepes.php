<?php
require("kapcsolat.php");

// Űrlap feldolgozása
if (isset($_POST['rendben'])) {

// Változók tisztítása	
	$password  = strip_tags(trim($_POST['password']));
	$username  = strip_tags(trim($_POST['username']));
	
	// Felvitel az adatbázisba
	$sql = "SELECT * FROM `registration` WHERE 1";
	$eredmeny = mysqli_query($dbc, $sql);
    while ($sor = mysqli_fetch_assoc($eredmeny)) {
        if ( $sor['username']==$username && $sor['password']==$password)
        {
            header("Location: belepve.php");
        }
    }
}

// Űrlap előzetes kitöltése
/*else {
	$id = (int)$_GET['id'];
	$sql = "SELECT *
			FROM registration
			WHERE id = {$id}";
	$eredmeny = mysqli_query($dbc, $sql);
	$sor = mysqli_fetch_assoc($eredmeny);

	$neve    = $sor['neve'];
	$rendelesideje = $sor['rendelesideje'];
	$ara  = $sor['ara'];
	$osszetetele  = $sor['osszetetele'];
}*/
// Űrlap megjelenítése
?><!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <form action="" method="get">

    </form>
</body>
</html>