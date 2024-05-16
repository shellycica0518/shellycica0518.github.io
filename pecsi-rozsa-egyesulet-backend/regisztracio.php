<?php
require("kapcsolat.php");

// Űrlap feldolgozása
if (isset($_GET['rendben'])) {

// Változók tisztítása
	
  $surname=strip_tags(trim($_GET['surname']));
	$name = strip_tags(trim($_GET['name']));
	$email  = strip_tags(trim($_GET['email']));
	$password  = strip_tags(trim($_GET['password']));
	$username  = strip_tags(trim($_GET['username']));
	$phone  = strip_tags(trim($_GET['phone']));
	$gender0  = strip_tags(trim($_GET['gender']));
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
	$sql = "insert into registration (surname, name, email, phone, username, password, gender) values ('{$surname}', '{$name}', '{$email}', '{$phone}', '{$username}', '{$password}','{$gender}');";
	mysqli_query($dbc, $sql);
	header("Location: belepve.php");
}
?><!DOCTYPE html>
<html lang="hu">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Pécsi Rózsa Egyesület regisztrációs oldal</title>
<link rel="stylesheet" href="css/style.css">
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
  <header>
    <div class="menu-icon">&#9776;</div>
      <nav>
        <a href="index.php">Főoldal</a>
        <a href="rolunk.html">Rólunk</a>
        <h1>
          <div>Pécsi Rózsa </div>
          <div>Keleti Kultúra és Tánc Egyesület</div>
        </h1>
        <a href="galeria.html">Galéria</a>
        <a href="index.html #kapcsolat">Kapcsolat</a>
      </nav>
    </header>
    <script>
      $(document).ready(function () {
    $(".menu-icon").click(function () {
      $("nav").toggle();
    });
  });
  </script>
      <div class="form-container">
        <form method = "get" action="">
            <label for="surname">Vezetéknév*</label>
            <input type="text" id="surname" name="surname" placeholder="pl.: Kovács" required>
            <label for="name">Keresztnév*</label>
            <input type="text" id="name" name="name" placeholder="pl.: Mária" required>
            <label for="email">Email*</label>
            <input type="email" id="email" name="email" placeholder="pl.: valami@gmail.com" required>
            <label for="username">Felhasználó név*</label>
            <input type="text" id="username" name="username" placeholder="pl.: felhasznalonev" required>
            <label for="password">Jelszó*</label>
            <input type="password" id="password" name="password" placeholder="pl.: jelszo" required>
            <p><label for="neve">Telefonszám</label><br>
		        <input type="text" id="phone" name="phone" placeholder="pl.: +36801112222">
            <label for="gender">Nem</label>
            <select name="gender" id="gender">
                <option value="male">Férfi</option>
                <option value="female">Nő</option>
                <option value="other">Egyéb</option>
            </select>
            <input type="submit" id = "rendben" name = "rendben" value="Regisztráció">
            <p>*A csillaggal ellátott mezők kitöltése kötelező!</p>
            <h3>Regisztrált tagjaink számára:</h3>
            <ul>
              <li>Kedvezményes részvétel - táncóra, workshop, török nyelvóra</li>
              <li>Legfrissebb híreinkről első kézből értesülhetsz</li>
              <li>Hozzáférés ingyenes online oktatóvideóinkhoz</li>
            </ul>
        </form>
    </div>
</body>
</html>