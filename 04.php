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
    <h1>Harjutus 04</h1>

    <h2>jagamine<h2>
    <form method="GET">
    <div class="form-group">
      <label for="number1">Arv1:</label>
      <input type="text" class="form-control" name="number1">
    </div>
    <div class="form-group">
      <label for="number2">Arv2:</label>
      <input type="text" class="form-control" name="number2">
    </div>
    <button type="submit" class="btn btn-primary">Jaga</button>
  </form>
    <?php
    /*
        harjutus 4
        Jan-Martti Olop
        05.02.2024
  
    */
  if (!empty($_GET['number1']) && !empty($_GET['number2'])) {
    $number1 = $_GET['number1'];
    $number2 = $_GET['number2'];

    if ($number2 != 0) {
      $result = $number1 / $number2;
      echo "<p>Tulemus: $result</p>";
    } else {
      echo "<p class='text-danger'>Hoiatus! Nulliga jagamine pole lubatud.</p>";
    }
  } elseif (isset($_GET['number1']) || isset($_GET['number2'])) {
    echo "<p class='text-warning'>Mõlemad lahtrid peavad olema täidetud.</p>";
  }


    

  ?>
  <hr>

  <div class="container mt-5">
    <h2>Vanus </h2>
    <form method="GET">
      <div class="form-group">
        <label for="vanus1">Vanus 1</label>
        <input type="text" class="form-control" name="vanus1">
      </div>
      <div class="form-group">
        <label for="vanus2">Vanus 2</label>
        <input type="text" class="form-control" name="vanus2">
      </div>
      <button type="submit" class="btn btn-primary">Kontrolli vanust</button>
    </form>

<?php
  if (!empty($_GET['vanus1']) && !empty($_GET['vanus2'])) {
    $vanus1 = $_GET['vanus1'];
    $vanus2 = $_GET['vanus2'];

    if ($vanus1 == $vanus2) {
      echo "<p>Mõlemad isikud on ühevanused.</p>";
    } elseif ($vanus1 > $vanus2) {
      echo "<p>Esimene isik on vanem.</p>";
    } else {
      echo "<p>Teine isik on vanem.</p>";
    }
  } elseif (isset($_GET['vanus1']) || isset($_GET['vanus2'])) {
    echo "<p class='text-warning'>Mõlemad lahtrid peavad olema täidetud.</p>";
  }
  ?>
<hr>

<div class="container mt-5">
  <h2>Ristkülik või ruut</h2>
  <form method="GET">
    <div class="form-group">
      <label for="kylg1"> Külg 1 </label>
      <input type="text" class="form-control" name="kylg1">
    </div>
    <div class="form-group">
      <label for="kylg2"> Külg 2 </label>
      <input type="text" class="form-control" name="kylg2">
    </div>
    <button type="submit" class="btn btn-primary">Kontrolli</button>
  </form>

  <?php
  if (!empty($_GET['kylg1']) && !empty($_GET['kylg2'])) {
    $kylg1 = $_GET['kylg1'];
    $kylg2 = $_GET['kylg2'];

    if ($kylg1 == $kylg2) {
      echo "<p>Tegemist on ruuduga.</p>";
      echo'<img src="ruut.png" alt="ruut">';
    } else {
      echo "<p>Tegemist on ristkülikuga.</p>";
      echo '<img src="ristkylik.png" alt="ristkylik">';
    }
  } elseif (isset($_GET['kylg1']) || isset($_GET['kylg2'])) {
    echo "<p class='text-warning'>Mõlemad lahtrid peavad olema täidetud.</p>";
  }
  ?>








    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>
