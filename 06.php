<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>php harjutused</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    </head>
  <body>
  <div class="container mt-5">
        <h2>100 numbri Genereerime</h2>
            <?php
        
        // Genereerime arvud 1-100
        $arvud = range(1, 100);

        // Loo reavahetus iga 10 arvu järel ja lisa punkt
        foreach ($arvud as $index => $arv) {
            echo $arv . ". ";

            // Lisa reavahetus iga 10 arvu järel
            if (($index + 1) % 10 === 0) {
                echo "<br>";
            }
        }
        
        ?>
    <div class="container mt-5">
        <br>

        <h2>Tärnide rida</h2>

    <?php

        $rida = str_repeat('*',10);

        echo $rida;


    ?>
    <div class="container mt-5">

    <h2>Tärnidega ruudu tegemine</h2>
    
    <?php



// Võtame vastu kasutaja sisestatud suuruse URL-i kaudu
$suurus = isset($_GET['suurus']) ? (int)$_GET['suurus'] : 0;

// Kontrollime, et suurus oleks vähemalt 1
if ($suurus >= 1) {
    // Loome tärnide ruudu vastavalt kasutaja sisestatud suurusele
    for ($i = 0; $i < $suurus; $i++) {
        for ($j = 0; $j < $suurus; $j++) {
            echo "* ";
        }
        echo "<br>";
    }
} else {
    echo "Palun sisesta ruudu suurus suurem kui 0.";
}

?>


<form action="06.php" method="get">
        <label for="suurus">Sisesta ruudu suurus:</label>
        <input type="number" name="suurus" id="suurus" required>
        <button type="submit">Genereeri ruut</button>
    </form>
        




</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>