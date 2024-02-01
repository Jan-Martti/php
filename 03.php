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
    <h1>Harjutus 03</h1>
    <form action="#" method="get">
        <label for="a">Külg a</label>
        <input type="number" name="a" id="a"><br>
        <label for="b">Külg b</label>
        <input type="number" name="b" id="b"><br>
        <label for="h">Kõrgus h</label>
        <input type="number" name="h" id="h"><br>
        <input type="submit" class="btn btn-success my-2" value="saada" id="arvuta">

    </form>

    <?php
    /*
        harjutus 3
        Jan-Martti Olop
        01.02.2024
  
    */
    
      if ( ! empty($_GET) ) {;
        $a = $_GET['a'];
        $b = $_GET['b'];
        $h = $_GET['h'];
        $s = (($a+$b)/2)*$h;
        echo 'Trapetsi pindala on' .$s. 'cm2'. '<br>';
      }
      ?>
      
    
      <h2>Rombi ümbermõõt</h2>
      <form action="#" method="get">
        <label for="a">Külg a</label>
        <input type="number" name="a" id="a"><br>
        <label for="b">Külg b</label>
        <input type="number" name="b" id="b"><br>
        <label for="h">Kõrgus h</label>
        <input type="number" name="h" id="h"><br>
        <label for="c">rombi külg</label>
        <input type="number" name="c" id="c"><br>
        <input type="submit" class="btn btn-success my-2" value="saada" id="arvuta">
      
      </form>
      <?php
      if ( ! empty($_GET) ) {
        $c = $_GET['c'];
        $u = 4*$c;
        echo 'Rombi ümbermõõt on' .$u. '<br>';

      }
    
      
      ?>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>