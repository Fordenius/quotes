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
<form>
<input type="reset" name="sbros" value="Сброс" class="reset"> <br>
<input type="number" name="numQuote" min="1" max="10" class="colich">
 <br>
 <input type="submit" name="button1" value="Вывести" class="button1">

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
   <p class="data">04.06.2022</p>
 <footer>

  </body>
 </html>