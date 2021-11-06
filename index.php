<?php

require_once('./vendor/autoload.php');

use App\Parser;

$parser = new Parser("config.txt");
$conf = $parser->parse();
var_dump($conf);

?>