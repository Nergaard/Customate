<?php
 if(!isset($_GET['pg'])) {  // sjekker om $_GET['pg'] ikke inneholder en verdi
    $pg = 'main';           // Hvis ikke $_GET['pg'] inneholder en verdi --> Gi variabelen $pg verdien 'main'
 } else {
    $pg = 'main';      // Hvis $_GET['pg'] inneholder en verdi --> Gi variabelen $get innholdet i $_GET['pg']
 }

      if($pg == 'main') include('pages/main.php');
?>
