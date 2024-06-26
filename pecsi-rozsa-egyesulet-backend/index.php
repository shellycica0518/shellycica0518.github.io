<?php
require("kapcsolat.php");
if(isset($_GET['bejelentkezes']))
{
	$password  = strip_tags(trim($_GET['password']));
	$username  = strip_tags(trim($_GET['username']));
	
	// Felvitel az adatbázisba
	$sql = "SELECT * FROM `registration` WHERE 1";
	$eredmeny = mysqli_query($dbc, $sql);
  $kimenet = null;
  $kimenet2 = null;
    while ($sor = mysqli_fetch_assoc($eredmeny)) {
        if ($sor['username']==$username && $sor['password']==$password)
        {
          $kimenet = $sor['username'];
          $kimenet2 = $sor['password'];
            header("Location: belepve.php");
        }
        else
        {
          $kimenet = "Hibás felhasználónév vagy jelszó!";
        }
    }
}

?><!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Pécs, tánc, hastánc, bellydance, egyesület, török, egyiptomi, civil szervezet, ws, workshop, táncoktatás, koreográfia, fúziós tánc, klasszikus hastánc, fantázia tánc, fantázia hastánc, tradicionális hastánc, nurgül, nurgül tánc">
    <title>Pécsi Rózsa Keleti Kultúra és Tánc Egyesület főoldala</title>
    <script src="https://kit.fontawesome.com/67fdbe999b.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <link rel="stylesheet" href="css/style.css">
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
          <a href="#kapcsolat">Kapcsolat</a>
        </nav>
      </header>
      <script>
        $(document).ready(function () {
      $(".menu-icon").click(function () {
        $("nav").toggle();
      });
    });
    </script>
      <main>
        <div class="egy">
          <h3><a href="rolunk.html #adatok">Az Egyesület adatai</a></h3>
          <p>NÉV: PÉCSI RÓZSA KELETI KULTÚRA ÉS TÁNC EGYESÜLET</p>
          <p>ADÓSZÁM: 18333178-1-02</p>
        </div>
        <div class="ketto">
          <h3><a href="rolunk.html">Pár szóban Egyesületünkről...</a></h3>
          <p>A Pécsi Rózsa Keleti Kultúra és Tánc Egyesület 2009-ben jött létre Seymen Nurgül orientális táncoktató, művészeti vezető és tanítványainak összefogásával.</p>
          <p>Egyesületünk tagjaiban közös a mozgás és a tánc szeretete. Hiszünk a tánc személyiségfejlesztő, közösségteremtő és egészségmegőrző szerepében. </p>
          <p>Az érdeklődők rendszeresen részt vehetnek az egyesület által szervezett programokon, melyek tartalmaznak nyílt órákat is, s ennek köszönhetően szélesebb körben tudjuk hozzáférhetővé tenni foglalkozásainkat</p>
        </div>
        <div class="egy">
          <a href="rolunk.html"><img src="img/pre-logo.jpg" alt="Pécsi Rózsa Egyesület logója"></a>
        </div>
        <div class="ketto" id="form-container">
          <h3>Bejelentkezés</h3>
          <div class="form-container">
            <form action="" method="get">
                <label for="nev">Felhasználó név:</label>
                <input type="text" id="username" name="username" required>
                <!--<label for="email">Email:</label>
                <input type="email" id="email" name="email" required>-->
                <label for="jelszo">Jelszó:</label>
                <input type="password" id="password" name="password" required>
                <input type="submit" id="bejelentkezes" name="bejelentkezes" values="Bejelentkezés">
            </form>
            <p><?php if (isset($kimenet)) print $kimenet; ?></p>
            <p><?php if (isset($kimenet)) print $kimenet2; ?></p>
          </div>
          <p>Ha még nincs  fiókod itt regisztrálhatsz:</p>
            <a href="regisztracio.php" id="reg">Regisztrálok</a>
        </div>
        <div class="ketto">
          <a href="galeria.html" target="_blank"><img src="img/pre-nurgul.jpg" alt="Pécsi Rózsa Egyesület Nurgül"></a>
        </div>
        <div class="ketto">
          <a href="galeria.html" target="_blank"><img src="img/pecsi-rozsa-plakat-2023.jpg" alt="Pécsi Rózsa Gála 2023"></a>
        </div>
        <div class="egy">
          <a href="galeria.html" target="_blank"><img src="img/pre-csoport.jpg" alt="Pécsi Rózsa Egyesület csoport"></a>
        </div>
        <div class="ketto">
          <h3><a href="https://www.facebook.com/nurgulbellydance" target="_blank">Nurgül</a></h3>
          <p>Nurgül a Pécsi Rózsa Egyesület művészeti vezetője és egyben alapítója is. </p>
          <p> Gyermekkora óta táncol, több műfajt is kipróbált, de ami a legközelebb áll a szívéhez az a hastánc és a  roman havası, a török cigánytánc. </p>
          <p>2006-ban egy török lagzin ejtette rabul a szívét ez a különleges tánc. Azonban nemcsak a török táncok (török néptánc, török hastánc, török cigánytánc), hanem a török nyelv szerelmese is.</p>
        </div>
        <div class="egy">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2769.3700098315494!2d18.214006676138396!3d46.04371747108936!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4742b3cc641d74e5%3A0x43e66bbc53d5e846!2sP%C3%A9cs%2C%20Sarolta%20u.%207%2C%207632!5e0!3m2!1shu!2shu!4v1702847964277!5m2!1shu!2shu" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <div class="egy">
          <h3 id="kapcsolat">Kapcsolat</h3>
          <table class="none">
            <tr>
            <th class="none"><a href="#"><i class="fa fa-phone"></i></a></th>
            <td class="none">+36 70 513-7482</td>
          </tr>
          <tr>
            <th class="none"><a href="#"><i class="fa fa-envelope"></i></a></th>
            <td class="none">prhegyesulet@gmail.com</td>
          </tr>
          </table>
          <p class="social-links">
            <a href="https://www.facebook.com/pecsirozsaegyesulet" target="_blank"><i class="fab fa-facebook-f"></i></a>
            <a href="https://www.tiktok.com/@nurguldancenurgul"target="_blank"><i class="fab fa-tiktok"></i></a>
            <a href="https://www.instagram.com/nurguldance/"target="_blank"><i class="fab fa-instagram"></i></a>
            <a href="https://www.youtube.com/@NurgulSeymen"target="_blank"><i class="fab fa-youtube"></i></a>
          </p>
        </div>
      </main>
    </body>
</html>

