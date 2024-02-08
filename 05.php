<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>php harjutused</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    
  
  </head>
  <body>
    <div class="container">
    <h1>Harjutus 05</h1>

    <?php


    $nimed = array ("Subaru","BMW","Acura","Mercedes-Benz","Lexus","GMC","Volvo","Toyota");

    sort($nimed);
    
    echo    '<div class="row">';
    foreach ($nimed as $nimed) {
        echo '<div class="col-md-3">' . $nimed . '</div>';

    }

    ?>

    <h2> tüdrukute loend imelikult</h2>

  <?php
  // Tüdrukute nimede massiiv
    
  $autod = array("Subaru","BMW","Acura","Mercedes-Benz","Lexus","GMC","Volvo","Toyota");

  // Väljasta esimesed 3 nime
  echo '<p><strong>Esimesed 3 nime:</strong> ';
  for ($i = 0; $i < 3; $i++) {
      echo $autod[$i] . ' ';
  }
  echo '</p>';

  // Väljasta viimane nimi
  $viimane = end($autod);
  echo '<p><strong>Viimane nimi:</strong> ' . $viimane . '</p>';

  // Väljasta üks suvaline nimi
  $suvalinei = rand(0, count($autod) - 1);
  $suvalinenimi = $autod[$suvalinei];
  echo '<p><strong>Üks suvaline nimi:</strong> ' . $suvalinenimi . '</p>';
  ?>

<div class="container mt-5">
  <h2>Autod märkide loeng</h2>

  <?php
  // Tüdrukute nimede ja VIN koodide massiivid
  $auto_mark = array("Subaru", "BMW", "Acura", "Mercedes-Benz", "Lexus", "GMC", "Volvo", "Toyota", "Volkswagen", "Volkswagen", "GMC", "Jeep", "Saab", "Hyundai", "Subaru", "Mercedes-Benz",
      "Honda", "Kia", "Mercedes-Benz", "Chevrolet", "Chevrolet", "Porsche", "Buick", "Dodge", "GMC", "Dodge", "Nissan", "Dodge", "Jaguar", "Ford", "Honda", "Toyota", "Jeep",
      "Kia", "Buick", "Chevrolet", "Subaru", "Chevrolet", "Chevrolet", "Pontiac", "Maybach", "Chevrolet", "Plymouth", "Dodge", "Nissan", "Porsche", "Nissan", "Mercedes-Benz",
      "Suzuki", "Nissan", "Ford", "Acura", "Volkswagen", "Lincoln", "Mazda", "BMW", "Mercury", "Mitsubishi", "Ram", "Audi", "Kia", "Pontiac", "Toyota", "Acura", "Toyota", "Toyota",
      "Chevrolet", "Oldsmobile", "Acura", "Pontiac", "Lexus", "Chevrolet", "Cadillac", "GMC", "Jeep", "Audi", "Acura", "Acura", "Honda", "Dodge", "Hummer", "Chevrolet", "BMW",
      "Honda", "Lincoln", "Hummer", "Acura", "Buick", "BMW", "Chevrolet", "Cadillac", "BMW", "Pontiac", "Audi", "Hummer", "Suzuki", "Mitsubishi", "Jeep", "Buick", "Ford");

  $vin_koodid = array("1GKS1GKC8FR966658", "1FTEW1C87AK375821", "1G4GF5E30DF760067", "1FTEW1CW9AF114701", "WAUGGAFC8CN433989", "3G5DA03E83S704506", "4JGDA2EB0DA207570",
      "1FTEW1E88AK070552", "SAJWA0F77F8732763", "JHMFA3F21BS660717", "JTHBP5C29C5750730", "WA1LFAFP9DA963060", "3D7TT2CT6BG521976", "WVWN7EE961049",
      "2C3CA5CG3BH341234", "YV4952CFXC162587", "KNALN4D71F5805172", "JN1CV6EK7BM903692", "5FRYD3H84EB186765", "WAUL64B83N441878", "WDDGF4HBXCF845665",
      "WAUKF78E45A133973", "JN1BY0AR2AM022612", "WA1EY74L69D931520", "3GYFNGEYXBS290465", "1D7CW2GK4AS059336", "JN8AZ1FY5EW087447", "WAUBF78E57A343355",
      "SCFFBCCD8AG695133", "WBAWC73548E143482", "3GYFNGE38DS093883", "SCBCP73WC348460", "JN8AE2KPXE9353316", "2C3CDXDT2EH018229", "1G6AH5SX7D0325662",
      "WVWED7AJ7DW431402", "1FTKR1AD3AP316066", "WBAKF5C52CE612586", "1FTNX2A57AE16083", "WAUCFAFR1AA166821", "SCFFDAAM3EG486065", "1G4PR5SK5F4821043",
      "1C3CDFCB4ED858321", "1N6AD0CW8EN722090", "1NXBU4EE0AZ438077", "2T1BPRHE7FC131594", "JH4KB1637C451183", "1C4NJCBA7ED747024", "WAUHF68P86A736691",
      "3D7TT2HT1AG96429", "5GADX23L96D250838", "5FRYD3H25FB985936", "1G4GG5E30DF126304", "KNADH5A38B6072755", "WAUBFAFL1BA477979", "3C63DRL4CG674293",
      "1G6AR5SX0E0834815", "1NXBU4EE2AZ309838", "WAUKGBFB4AN797783", "JN1AJ0HP8AM801887", "WAUPL68E25A448831", "WA1C8BFP3FA535374", "WAUHE78P78A019744",
      "TRURD38J081400551", "1G4HP52K95428171", "5N1CR2MN1EC607241", "5UMDU93417L322773", "1G6AJ5S35F09585", "JN1CV6AP3BM234743", "SCBCR63W66C842051",
      "SCFFDCBD2AG509467", "WBA3C1C58CA664091", "1D7RW2BK6BS922303", "WAUDH98E67A546009", "2HNYB1H46CH683844", "3VW467AT4DM257275", "WDDGF4HB7CA515172",
      "2G61W5S88E9666199", "5GADV33W17D256205", "2C3CDXDT9CH683075", "2G4GU5X0E9989574", "WAUJC58E53A641651", "WDDEJ7KB3CA053774", "3D73M3CL6AG890452",
      "5GAER13D19J026924", "1G4HC5EM1BU329204", "3VWML7AJ6CM772736", "3C6TD4HT2CG011211", "JTDZN3EU2FJ023675", "JN8AZ1MU4CW041721", "KNAFX5A82F5991024",
      "1N6AA0CJ1D57470", "WAUEG98E76A780908", "WAUAF78E96A920706", "1GT01XEG8FZ268942", "1FTEW1CW4AF371278", "JN1AZ4EH8DM531691", "WAUEKAFBXAN294295",
      "1N6AA0EDXFN868772", "WBADW3C59DJ422810");

  // Leia autode arv
  $autode_arv = count($auto_mark);
  echo '<p><strong>Autode arv:</strong> ' . $autode_arv . '</p>';

  // Kontrolli, kas massiivid on ühepikkused
  if (count($auto_mark) == count($vin_koodid)) {
      echo '<p><strong>Massiivid on ühepikkused.</strong></p>';

      // Leia eraldi Toyota ja Audi arv nimekirjast
      $toyota_arv = 0;
      $audi_arv = 0;

      foreach ($auto_mark as $auto_mark) {
          if ($auto_mark == "Toyota") {
              $toyota_arv++;
          } elseif ($auto_mark == "Audi") {
              $audi_arv++;
          }
      }

      echo '<p><strong>Toyotade arv:</strong> ' . $toyota_arv . '</p>';
      echo '<p><strong>Audide arv:</strong> ' . $audi_arv . '</p>';

      // Leia ja väljasta VIN koodid, mille märkide arv on väiksem kui 17
      echo '<p><strong>VIN koodid, mille märkide arv on väiksem kui 17:</strong></p>';
      foreach ($vin_koodid as $vin_kood) {
          if (strlen($vin_kood) < 17) {
              echo '<p>' . $vin_kood . '</p>';
          }
      }

  } else {
      echo '<p><strong>Viga: Massiivid ei ole ühepikkused.<p><strong>';
  }

  
  ?>
    <h2>Keskmise palga arvutamine</h2>
    <?php
    $palgad = array(1220,1213,1295,1312,1298,1354,1296,1286,1292,1327,1369,1455);

    //palga kogu summa
    $palkade_summa = array_sum($palgad);

    //leian mitu palga numbrit on antud
    $palkade_arv = count($palgad);

    //keskmise arvutamine
    if ($palkade_arv > 0) {
        $keskmine_palk = $palkade_summa / $palkade_arv;
        echo '<p><strong>Aastal 2018 keskmine palk oli:</strong> ' . round($keskmine_palk,2);

    } else {
        echo '<p><strong>Andmed puuduvad<p></strong>';
    }



    ?>


<div class="container mt-5">
  <h2>Firmade Nimekiri</h2>

  <?php
  // Firma nimede massiiv
  $firmade_nimed = array("Kimia", "Mynte", "Voomm", "Twiyo", "Layo", "Talane", "Gigashots", "Tagchat", "Quaxo", "Voonyx", "Kwilith", "Edgepulse", "Eidel", "Eadel", "Jaloo", "Oyope", "Jamia");

  // Korrastab firma nimed
  sort($firmade_nimed);

  // Kuvab firma nimed
  echo '<p><strong>Firmade nimed:</strong></p>';
  echo '<ul>';
  foreach ($firmade_nimed as $firma_nimi) {
      echo '<li>' . $firma_nimi . '</li>';
  }
  echo '</ul>';

  // Kuvab firma nimed eemaldamisvõimalusega
  if (isset($_GET['eemalda_nimi'])) {
      $eemaldatav_nimi = $_GET['eemalda_nimi'];
      $index = array_search($eemaldatav_nimi, $firmade_nimed);

      if ($index !== false) {
          unset($firmade_nimed[$index]);
          echo '<p><strong>' . $eemaldatav_nimi . ' eemaldati nimekirjast.</strong></p>';
      } else {
          echo '<p><strong>' . $eemaldatav_nimi . ' ei leitud nimekirjast.</strong></p>';
      }
  }

  
  
  ?>
  <form method="get" class="mt-3">
  <div class="form-group">
    <label for="eemalda_nimi">Sisesta nimi, mida soovid eemaldada:</label>
    <input type="text" class="form-control" id="eemalda_nimi" name="eemalda_nimi" required>
  </div>
  <button type="submit" class="btn btn-danger">Eemalda</button>
</form>



<?php

$riigid = [
    "Indonesia", "Canada", "Kyrgyzstan", "Germany", "Philippines",
    "Philippines", "Canada", "Philippines", "South Sudan", "Brazil",
    "Democratic Republic of the Congo", "Indonesia", "Syria", "Sweden",
    "Philippines", "Russia", "China", "Japan", "Brazil", "Sweden", "Mexico", "France",
    "Kazakhstan", "Cuba", "Portugal", "Czech Republic"
];

$pikim_nimi = "";
$pikim_margid = 0;

//Leiab kõige pikema riigi nime
foreach ($riigid as $riik) {
    $riigi_margid = strlen($riik);
    
    if ($riigi_margid > $pikim_margid) {
        $pikim_nimi = $riik;
        $pikim_margid = $riigi_margid;
    }
}
//Prindib kõige pikema nime ja selle märgi arvu
echo "Kõige pikema riigi nimi on: " . $pikim_nimi ."<br>" ;
echo "Märkide arv: " . $pikim_margid ;

?>
<br>
<?php

    $nimed = ["瀚聪","月松","雨萌","展博","雪丽","哲恒","慧妍","博裕","宸瑜","奕漳",
    "思宏","伟菘","彦歆","睿杰","尹智","琪煜","惠茜","晓晴","志宸","博豪",
    "璟雯","崇杉","俊誉","军卿","辰华","娅楠","志宸","欣妍","明美"];


    sort($nimed);
    
    echo "Esimene nimi: " .$nimed[0] . "<br>";
    echo "Viimane nimi: " .end($nimed) ;




?>







<?php
    $nimed = ["Feake","Bradwell","Dreger","Bloggett","Lambole","Daish","Lippiett","
    Blackie","Stollenbeck","Houseago","Dugall","Sprowson","Kitley","Mcenamin",
    "Allchin","Doghartie","Brierly","Pirrone","Fairnie","Seal","Scoffins",
    "Galer","Matevosian","DeBlase","Cubbin","Izzett","Ebi","Clohisey",
    "Prater","Probart","Samwaye","Concannon","MacLure","Eliet","Kundt","Reyes"];

    $otsitav_nimi = "Dreger";

    if (in_array($otsitav_nimi,$nimed)) {

        $sonum = "Nimi '$otsitav_nimi' on leitud massiivist ";
        $alert = "success";

    } else {
        $sonum = "Nimi '$otsitav_nimi' ei leitud massiivist";
        $alert = "danger";

    }


?>

<div class="container mt-5">
    <div class="alert alert-<?php echo $alert_class; ?>" role="alert">
    <?php echo $sonum; ?>



    <br>
    
<?php

    $pildid = [
        "prentice.jpg", "freeland.jpg", "peterus.jpg", "devlin.jpg", "gabriel.jpg", "pete.jpg"
    ];

    // Loome img kataloogi, kui see puudub
    if (!file_exists('img')) {
        mkdir('img');
    }

    // Kopeerime profiilipildid img kataloogi
    foreach ($pildid as $pilt) {
        copy($pilt, 'img/' . $pilt);
    }

    //Kuvab kolmanda pildi 
    $kolmas_pilt = $pildid[2];
    echo "Kolmas pilt: <img src='img/$kolmas_pilt' alt='$kolmas_pilt'><br>";

    //Kuvab kõik pildid
    echo "Kõik pildid:<br>";
    foreach ($pildid as $pilt) {
        echo "<img src='img/$pilt' alt='$pilt' style='margin: 5px;'>";
    }

    
    echo "<div class='container mt-4'><div class='row'>";
    foreach ($pildid as $pilt) {
        echo "<div class='col-md-2'><img src='img/$pilt' alt='$pilt' class='img-fluid'></div>";
    }
    echo "</div></div>";

?>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>