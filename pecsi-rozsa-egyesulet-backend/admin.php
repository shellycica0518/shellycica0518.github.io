<?php
require("kapcsolat.php");

$kifejezes = (isset($_POST['kifejezes'])) ? $_POST['kifejezes'] : "";
$sql = "SELECT *
		FROM registration
		WHERE (
			surname LIKE '%{$kifejezes}%'
			OR `name` LIKE '%{$kifejezes}%'
			OR email LIKE '%{$kifejezes}%'
			OR username LIKE '%{$kifejezes}%'
			OR `password` LIKE '%{$kifejezes}%'
			OR phone LIKE '%{$kifejezes}%'
			OR gender LIKE '%{$kifejezes}%'
		)
		ORDER BY `name` ASC";
$eredmeny = mysqli_query($dbc, $sql);

$kimenet = "<table>
<tr>
	<th>Vezetéknév</th>
	<th>Utónév</th>
	<th>E-mail</th>
	<th>Felhasználónév</th>
	<th>Telefonszám</th>
	<th>Nem</th>
	<th>Művelet</th>
</tr>";
while ($sor = mysqli_fetch_assoc($eredmeny)) {
	if($sor['gender'] == "0")
	{
		$kimenet.= "<tr>
		<td>{$sor['surname']}</td>
		<td>{$sor['name']}</td>
		<td>{$sor['email']}</td>
		<td>{$sor['username']}</td>
		<td>{$sor['phone']}</td>
		<td>Férfi</td>
		<td><a href=\"torol.php?id={$sor['id']}\">Törlés</a> | <a href=\"modositas.php?id={$sor['id']}\">Módosítás</a></td>
	</tr>";
	}
	else if($sor['gender'] == "1")
	{
		$kimenet.= "<tr>
		<td>{$sor['surname']}</td>
		<td>{$sor['name']}</td>
		<td>{$sor['email']}</td>
		<td>{$sor['username']}</td>
		<td>{$sor['phone']}</td>
		<td>Nő</td>
		<td><a href=\"torol.php?id={$sor['id']}\">Törlés</a> | <a href=\"modositas.php?id={$sor['id']}\">Módosítás</a></td>
	</tr>";
	}
	else if($sor['gender'] == "2")
	{
		$kimenet.= "<tr>
		<td>{$sor['surname']}</td>
		<td>{$sor['name']}</td>
		<td>{$sor['email']}</td>
		<td>{$sor['username']}</td>
		<td>{$sor['phone']}</td>
		<td>Egyéb</td>
		<td><a href=\"torol.php?id={$sor['id']}\">Törlés</a> | <a href=\"modositas.php?id={$sor['id']}\">Módosítás</a></td>
	</tr>";
	}
}
$kimenet.= "</table>";
?><!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Regisztráltak</title>
<link rel="stylesheet" href="css/style.css">
</head>

<body>
	<main> <div class="egy">
          <h3>Admin felület</h3>
		  <h3>Pécsi Rózsa Egyesület</h3>
        </div>
		<div class="ketto" id="form-container">
          <h3>Regisztráltak</h3>
          <div class="form-container">
		<form method="post" action="">
	       <input type="search" id="kifejezes" name="kifejezes">
        </form>
          </div>
		  <p><a href="hozzadas.php">Új felhasználó hozzáadása</a></p>

        </div>
		<div class="egy">
          <img src="img/pre-logo.jpg" alt="Pécsi Rózsa Egyesület logója">
        </div>
	</main>
          


<?php print $kimenet; ?>
<p>Admin felület</p>
</body>
</html>