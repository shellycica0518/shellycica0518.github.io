<?php
require("kapcsolat.php");

// Űrlap feldolgozása
if (isset($_POST['rendben'])) {

// Változók tisztítása
	
    $surname=strip_tags(trim($_POST['surname']));
	$name = strip_tags(trim($_POST['name']));
	$email  = strip_tags(trim($_POST['email']));
	$password  = strip_tags(trim($_POST['password']));
	$username  = strip_tags(trim($_POST['username']));
	$phone  = strip_tags(trim($_POST['phone']));
	$gender0  = strip_tags(trim($_POST['gender']));
	if ($gender0 == "male")
	{
		$gender  = "0";
	}
	else if($gender0 == "female")
	{
		$gender  = "1";
	}
	else if($gender0 == "other")
	{
		$gender  = "2";
	}

	
	// Felvitel az adatbázisba
	$id = (int)$_POST['id'];
	$sql = "insert into registration (surname, name, email, phone, username, password, gender) values ('{$surname}', '{$name}', '{$email}', '{$phone}', '{$username}', '{$password}','{$gender}');";
	mysqli_query($dbc, $sql);
	header("Location: admin.php");
		
	
}

// Űrlap megjelenítése
?><!DOCTYPE html>
<html lang = "hu">
<head>
<meta charset="utf-8">
<title>Módosítás</title>
<link rel="stylesheet" href="css/style.css">
</head>

<body>
<h1>Regisztráció módosítása</h1>

		<div class="ketto" id="form-container">
          <h3>Regisztráltak</h3>
          <div class="form-container">
		<form method="post" action="">
		<p><label for="neve">Vezetéknév:</label><br>
		<input type="text" id="surnamename" name="surname">
	    <p><label for="neve">Név:</label><br>
		<input type="text" id="name" name="name">
		<p><label for="neve">E-mail:</label><br>
		<input type="text" id="email" name="email">
		<p><label for="neve">Felhasználónév:</label><br>
		<input type="text" id="username" name="username">
		<p><label for="neve">Jelszó:</label><br>
		<input type="password" id="password" name="password">
		<p><label for="neve">Telefonszám:</label><br>
		<input type="text" id="phone" name="phone">
		<p><label for="neve">Nem:</label><br>
		<select name="gender" id="gender">
                <option value="male">Férfi</option>
                <option value="female">Nő</option>
                <option value="other">Egyéb</option>
            </select>
		<input type="submit" id="rendben" name="rendben" value="Rendben">
	    <input type="reset" value="Mégse">
		<p><a href="admin.php">Vissza a regisztráltakhoz</a></p>
        </form>
          </div>
</body>
</html>