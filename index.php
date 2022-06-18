<?php

 require "db.php";

?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
<link rel="stylesheet" href="styles.css">
  </head>
  <body>
    
    <header>
 <h1>Рандомные цитаты</h1>
</header> 
<form method="get">
<input type="reset" name="resetButton" value="Сброс" class="resetButton"> <br>
<input type="number" name="numQuote" min="1" max="10" class="numQuote">
 <br>
 <input type="submit" name="submitButton" value="Вывести" class="submitButton">

</form>
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
   <p class="data"><?php echo date('Y'); ?></p>
 <footer>

  </body>
 </html>