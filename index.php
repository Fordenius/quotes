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
    
    $numQuote = $_GET['numQuote'];
    
    foreach ($quotes as  $quote) {
      echo "<p>{$quote}</p>";
    }
    ?>
  </p>
  </body>
 </html>