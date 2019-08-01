<?php
 if(!isset($_GET['pg'])) {  // sjekker om $_GET['pg'] ikke inneholder en verdi
    $pg = 'main';           // Hvis ikke $_GET['pg'] inneholder en verdi --> Gi variabelen $pg verdien 'main'
 } else {
    $pg = $_GET['pg'];      // Hvis $_GET['pg'] inneholder en verdi --> Gi variabelen $get innholdet i $_GET['pg']
 }

      if($pg == 'main') include('pages/main.php');
      if($pg == 'logginn') include('pages/logg_inn.php');
      if($pg == 'storeview') include('pages/store_overview.php');
      if($pg == 'showcustom') include('pages/show_custom.php');
      if($pg == 'kontakt') include('pages/kontakt.php');
?>
