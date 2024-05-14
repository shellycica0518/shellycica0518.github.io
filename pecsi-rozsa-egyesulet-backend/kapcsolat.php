<?php
 $dbc = mysqli_connect("localhost", "root", "", "pecsirozsa");
 //$dbc = mysqli_connect(IP vagy hol (localhost vagy 192.168.1.100), Felhasználónév, Jelszó, adatbázis neve);
 mysqli_query($dbc, "set names utf8");
 //mysqli_query(sql vagy csatlakozás változó, UTF-8-as kódolás);

?>