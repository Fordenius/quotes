<?php

 require "db.php";

?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
<link rel="stylesheet" href="CSS.css">
  </head>
  <body>
    
    <header>
 <h1>Рандомные цитаты</h1>
</header> 
 <div class="container">
    <?php
    $numQuote = $_GET['numQuote'];

    $sliceOfQuotes = array_slice($quotes, 0, $numQuote);
    shuffle($sliceOfQuotes);
    foreach ($sliceOfQuotes as  $quote) {
      echo "<p>{$quote}</p>";
    }
    ?>

  </div>
 <footer> 
   <p class="data">04.06.2022</p>
 <footer>

  </body>
 </html>