<!-- Instruktion til webbrowser om at vi kører HTML5 -->
<!DOCTYPE html>

<!-- html starter og slutter hele dokumentet / lang=da: Fortæller siden er på dansk -->
<html lang="da">

<!-- I <head> har man opsætning - det ser brugeren ikke, men det fortæller noget om siden -->
<head>
    <!-- Sætter tegnsætning til utf-8 som bl.a. tillader danske bogstaver -->
    <meta charset="utf-8">

    <!-- Titel som ses oppe i browserens tab mv. -->
    <title>Min Interesse</title>

    <!-- Metatags der fortæller at søgemaskiner er velkomne, hvem der udgiver siden og copyright information -->
    <meta name="robots" content="All">
    <meta name="author" content="Udgiver">
    <meta name="copyright" content="Information om copyright">

    <!-- Sikrer man kan benytte CSS ved at tilkoble en CSS fil -->
    <link href="css/styles.css" rel="stylesheet" type="text/css">
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css">

    <!-- Sikrer den vises korrekt på mobil, tablet mv. ved at tage ift. skærmstørrelse - bliver brugt til responsive websider -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<!-- i <body> har man alt indhold på siden som brugeren kan se -->
<body>

<div class="container-xxl">
    <div class="link-danger">
        <a href="#OmMig" class="mx-5 link-primary text-decoration-none">Om Mig</a>
        <a href="#Turneringer" class="mx-5 link-dark">Turneringer/LANs</a>
        <a href="#Majors" class="mx-5 link-dark">Majors</a>
        <a href="#Interesse" class="mx-5 link-dark">Interesse</a>
    </div>
</div>

<div class="container-xxl">
    <br><br>
    <h2 id="OmMig">Om Mig:</h2>
    <p>Vindprognose for de næste 48 timer</p>
    <br>
    <img src="images/Om%20Mig%202.0.jpg">

    <br><br><br>
    <h2 id="Turneringer">Turneringer/LANs:</h2>
    <p>Bølgeprognose for de næste 48 timer</p>
    <br>
    <img src="images/Danske%20LANs.jpg">

    <br><br><br>
    <h2 id="Majors">Majors:</h2>
    <p>Strømprognose for de næste 48 timer</p>
    <br>
    <img src="images/Major.jpg">

    <br><br><br>
    <h2 id="Interesse">Interesse</h2>
    <p>Havtemperaturprognose for de næste 48 timer</p>
    <br>
    <img src="images/Interesse.png">
</div>

</body>
</html>
