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
    <script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Sikrer den vises korrekt på mobil, tablet mv. ved at tage ift. skærmstørrelse - bliver brugt til responsive websider -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<!-- i <body> har man alt indhold på siden som brugeren kan se -->
<body>

<?php include "includes/menu.php"; ?>

<div class="container-xxl">
    <br><br>
    <h2 id="OmMig" style="font-family: Counter-Strike; font-size: 30px">OM MIG </h2>
    <p style="font-family: roboto; font-size: 15px">Jeg hedder Daniel og jeg er 23 år gammel. Jeg har haft mere eller mindre samme interesse siden 2007, Counter Strike, hvor jeg så spiller den 'nyeste' version af spillet, bedre kendt som CS:GO <br>(Counter Strike: Global Offensive). Alle de år jeg har spillet det, har jeg ca. 18.000 timer i de forskellige versioner af Counter Strike, hvilket jeg vil kalde noget af en interesse.</p>
    <p style="font-family: roboto; font-size: 15px">En ting ved Counter Strike der virkelig fanger mig, er at det er enten et spil man kan spille for sjov, eller et spil man kan tage seriøst, og med den rigtige dedikation og motivation, <br> kan man nå virkelig langt, og tjene en hæftig sum penge, ved enten at spille på et hold med løn, eller spiller turneringer/LANs hvor præmiesummen normalt er et hæftigt beløb. <br> Har venner som får mere eller mindre en 6 cifret beløb om måneden, bare for at spille det spil som de brænder for.</p>
    <p style="font-family: roboto; font-size: 15px">Udover at Counter Strike er en hobby, eller en interesse, er det også en god måde at møde nye mennesker på. <br> Jeg har fået RIGTIG mange venner gennem årene igennem Counter Strike, hvor jeg har mødt dem til et LAN i Sverige, Tyskland, Polen eller Danmark, og bare holdt venskabet kørende efter. </p>
    <img src="images/Om%20Mig%202.0.jpg">

    <br><br><br>
    <h2 id="Turneringer" style="font-family: Counter-Strike; font-size: 30px">TURNERINGER/LANS</h2>
    <p style="font-family: roboto; font-size: 15px">Hvis du har den rigtige dedikation til spillet, og er villig til at bruge hundredevis af timer på at forbedre dig selv, åbner du mange muligheder for dig selv. <br> Du kan starte med at spille med nogen venner, eller i et hold, og komme til danske LANs eller danske turneringer, hvor du har en kæmpe mulighed for at vise hvad du er i stand til.</p>
    <p style="font-family: roboto; font-size: 15px">Hvis man klarer et LAN sindsygt godt, og virkelig performer, har man chancen for at blive 'opdaget', hvilket betyder at bedre folk som måske mangler en til deres eget hold, <br> lige pludselig får en interesse for en, hvilket åbner ens muligheder, og chancen for løn, (kommer an på hvilken organisation og hvor højt niveau man spiller).</p>
    <img src="images/Danske%20LANs.jpg">

    <br><br><br>
    <h2 id="Majors" style="font-family: Counter-Strike; font-size: 30px">MAJORS</h2>
    <p style="font-family: roboto; font-size: 15px">Majors er toppen af toppen, hvor man har muligheder for at vinde flere millioner igennem en hård turnering imod de bedste af de bedste, <br> og hvor nye top hold får en mulighed for at vise de bedste, hvad de også selv kan, og give dem chancen for at vinde et 7 cifret beløb.</p>
    <p style="font-family: roboto; font-size: 15px">Man kan tage Astralis som et eksempel, fra 2016-2021 har de som hold ca. tjent $9.12M, hvilket svarer til ca. 57.5M DKK, og udover det har de en fast månedsløn på mindst 75.000 kr.</p>
    <img src="images/Major.jpg">

    <br><br><br>
    <h2 id="Interesse" style="font-family: Counter-Strike; font-size: 30px">INTERESSE</h2>
    <p style="font-family: roboto; font-size: 15px">Det er det der giver mig min interesse. Hvis jeg ligger nok tid i spillet, og dedikerer mig til at blive bedre, uanset forhindringerne, har man en mulighed for at tjene penge på sin hobby, <br> selvom det nok kun sker for en meget lav procentdel, er chancen der stadig, hvilket er det der giver mig min motivation til at spille de samme spil i over 14 år.</p>
    <p style="font-family: roboto; font-size: 15px">Har været okay til spillet, men har altid holdt pause pga. uddannelser eller arbejder, så har aldrig haft chancen for at fokusere kun på spillet, hvilket måske kommer i fremtiden, hvem ved?</p>
    <p style="font-family: roboto; font-size: 15px">Men det at man kan gå fra at have en hobby, til at kunne få en fremtid ved at spille ens hobby virker virkelig surrealistisk for mange, <br> men det er alle unges drøm, selvom mange ved at det kun er få den drøm går i opfyldelse for.</p>
    <img src="images/Interesse.png">
</div>

</body>
</html>
