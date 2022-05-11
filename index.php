<?php

 require "db.php";

?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
  </head>
  <body>
  <p>
    <?php
  
    foreach ($quotes as  $quote) {
      echo "<p>{$quote}</p>";
    }
    ?>
  </p>
  </body>
 </html>