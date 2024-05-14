<?php
require("kapcsolat.php");

// Űrlap feldolgozása
if (isset($_POST['rendben'])) {

// Változók tisztítása
	
    $surname=strip_tags(trim($_POST['surname']));
	$name = strip_tags(trim($_POST['name']));
	$email  = strip_tags(trim($_POST['email']));
	$username  = strip_tags(trim($_POST['username']));
	$password  = strip_tags(trim($_POST['password']));
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
	$sql = "UPDATE registration SET surname = '{$surname}', `name`= '{$name}', email = '{$email}', phone = '{$phone}', username = '{$username}', `password` = '{$password}', gender = '{$gender}' WHERE id = {$id};";
	mysqli_query($dbc, $sql);
	header("Location: admin.php");
		
	
}

// Űrlap előzetes kitöltése
	$id = (int)$_GET['id'];
	$sql = "SELECT *
			FROM registration
			WHERE id = {$id}";
	$eredmeny = mysqli_query($dbc, $sql);
	$sor = mysqli_fetch_assoc($eredmeny);

	$surname= $sor['surname'];
	$name = $sor['name'];
	$email  = $sor['email'];
	$username  = $sor['username'];
	$password  = $sor['password'];
	$phone  = $sor['phone'];
	$gender  = $sor['gender'];
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
		<input type="hidden" id="id" name="id" value="<?php print $id; ?>">
		<p><label for="neve">Vezetéknév:</label><br>
		<input type="text" id="surname" name="surname" value="<?php if (isset($surname)) print $surname; ?>">
	    <p><label for="neve">Név:</label><br>
		<input type="text" id="name" name="name"  value="<?php if (isset($name)) print $name; ?>">
		<p><label for="neve">E-mail:</label><br>
		<input type="text" id="email" name="email"  value="<?php if (isset($email)) print $email; ?>">
		<p><label for="neve">Felhasználónév:</label><br>
		<input type="text" id="username" name="username"  value="<?php if (isset($username)) print $username; ?>">
		<p><label for="neve">Jelszó:</label><br>
		<input type="password" id="password" name="password"  value="<?php if (isset($password)) print $password; ?>">
		<p><label for="neve">Telefonszám:</label><br>
		<input type="text" id="phone" name="phone"  value="<?php if (isset($phone)) print $phone; ?>">
		<p><label for="neve">Nem:</label><br>
		<select name="gender" id="gender">
                <option value="male">Férfi</option>
                <option value="female">Nő</option>
                <option value="other">Egyéb</option>
            </select>
		<input type="submit" id="rendben" name="rendben" value="Mentés">
	    <input type="reset" value="Mégse">
		<p><a href="admin.php">Vissza a regisztráltakhoz</a></p>
        </form>
          </div>
		  
	
<!--<form method="post" action="">
	<?php if (isset($kimenet)) print $kimenet; ?>
    <input type="hidden" id="id" name="id" value="<?php print $id; ?>">
	<p><label for="neve">Név*:</label><br>
	<input type="text" id="neve" name="neve" value="<?php if (isset($neve)) print $neve; ?>"></p>
	<p><label for="rendelesideje">Rendelés ideje*:</label><br>
	<input type="date" id="rendelesideje" name="rendelesideje" value="<?php if (isset($rendelesideje)) print $rendelesideje; ?>"></p>
	<p><label for="ara">Ára*:</label><br>
	<input type="number" id="ara" name="ara" value="<?php if (isset($ara)) print $ara; ?>"></p>
	<p><label for="osszetetele">Összetétele:</label><br>
	<input type="text" id="osszetetele" name="osszetetele" value="<?php if (isset($osszetetele)) print $osszetetele; ?>"></p>
	<p><em>A *-gal jelölt mezők kitöltése kötelező!</em></p>
	<input type="submit" id="rendben" name="rendben" value="Rendben">
	<input type="reset" value="Mégse">
	<p><a href="admin.php">Vissza a Rendelésekhez</a></p>
</form>-->
</body>
</html>