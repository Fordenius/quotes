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

    $sliceOfQuotes = array_slice($quotes, 0, $numQuote);

    foreach ($sliceOfQuotes as  $quote) {
      echo "<p>{$quote}</p>";
    }
    ?>
  </p>
  </body>
 </html>