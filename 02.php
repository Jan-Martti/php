<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
    <h1>Harjutus 02</h1>


    <?php
    /*
        harjutus 2
        Jan-Martti Olop
        01.02.2024
  
    */
//arvutamine
    $arv1 = 24;
    $arv2 = 45;

    $liitmine = $arv1 + $arv2;
    $lahutamine = $arv1 - $arv2;
    $korrutamine = $arv1 * $arv2;
    $jagamine = $arv1 / $arv2;
    $jaak = $arv1 % $arv2;

    echo "$arv1 + $arv2 = $liitmine <br>";
    echo "$arv1 - $arv2 = $lahutamine <br>";
    echo "$arv1 * $arv2 = $korrutamine <br>";
    echo "$arv1 / $arv2 = $jagamine <br>";
    echo "$arv1 % $arv2 = $jaak <br>";

//teiseldamine
    $mm = 162.566;
    $cm = $mm / 10;
    $m = $mm /1000;
    printf("%.2f mm on %.2f cm voi %.2f m<br><br>", $mm, $cm, $m);

//täisnurga kolmnurk
    $a = 3;
    $b = 4;
    $c = 5;


    
    $p = $a + $b + $c;
    $s = ($a * $b) / 2;
    printf("Kolmnurga ümbermõõt on %d ja pindala %d<br><br>", $p, $s);


?>
 </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>