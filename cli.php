<?php

require 'db.php';

$numQuote = $argv[1];

$sliceOfQuotes = array_slice($quotes, 0, $numQuote);

shuffle($sliceOfQuotes);

foreach ($sliceOfQuotes as $quote) {
    echo $quote . PHP_EOL;
}