<?php
  session_start();
  $user = $_SESSION['u_name'];
  include_once('include/get_items.php');
  $list = NEW GET();
 ?>

<div class="grid-container">
  <div class="grid-item1">
    <section class="header">
      <div class="grid-container2">
        <p id="logohead">CUSTOMATE</p>
        <form class="top-right-button" action="?pg=main" method="post">
          <input class="topbutton" type="submit" name="" value="LOGG UT">
        </form>
      </div>
    </section>
  </div>

  <!-- This is how the list should be constructed, but you need to write a php-method to fetch the data and build the list-->
  <ol class="centered_list">

    <?php $list->fetch_items($user) ?>
  </ol>

    <ul class="next_list">
      <?php $list->fetch_numbers($user) ?>
    </ul>

  </div>
