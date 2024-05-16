<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
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
            <h3><video width="100%" height="100%" controls>
           <source src="video/video3.mp4" type="video/mp4">
        </video>
          </h3>
        </div>
        <div class="egy">
            <h3><video width="100%" height="100%" controls>
           <source src="video/video2.mp4" type="video/mp4">
        </video>
          </h3>
        </div>
        <div class="egy">
            <h3><video width="100%" height="100%" controls>
           <source src="video/video1.mp4" type="video/mp4">
        </video>
          </h3>
        </div>
        <div class="egy">
        <a href="rolunk.html"><img src="img/pre-logo.jpg" alt="Pécsi Rózsa Egyesület logója"></a>
        </div>
        <div>
            <h3>Kedves Pécsi Rózsa Tag!</h3>
            <p> Üdvözlünk a Pécsi Rózsa Extra oldalon!
        Hamarosan feltöltésre kerülnek oktató videóink előzetesei is. Oktató videóink megvásárlhatók lesznek regisztrált tagjaink számára.</p> </div>
        <div><h3>Készülőben az alábbi videóink:</h3>
            <ul>
                <li>Török cigánytánc alapok 1.</li>
                <li>Török cigánytánc alapok 2.</li>
                <li>Fátyoltechnika</li>
                <li>Török ritmusok</li>
            </ul>
         </div>
</main>
</body>
</html>