<?php
 if(!isset($_GET['pg'])) {  // sjekker om $_GET['pg'] ikke inneholder en verdi
    $pg = 'main';           // Hvis ikke $_GET['pg'] inneholder en verdi --> Gi variabelen $pg verdien 'main'
 } else {
    $pg = $_GET['pg'];      // Hvis $_GET['pg'] inneholder en verdi --> Gi variabelen $get innholdet i $_GET['pg']
 }

   // Hvis $pg er lik 'filnavn' --> Inkluderer filen 'filnavn.php'

   // Alle elementer legges inne i denne if setningen.
   // Elementer som ikke skal fungere når man er logget inn, må legges inn begge plasser.
   if (isset($_SESSION['u_id'])) {
      // Åpne elementer
      if($pg == 'main') include('pages/main.php');
      #else if($pg == 'signup') include('pages/signup.php');

   }
?>
