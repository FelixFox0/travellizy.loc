<?php
$start = microtime(true);
require_once('parser.php');
$parser = new Parser;
if($argv != NULL){
    $parser->url = $argv[1];
}else{
    $parser->url = filter_input(INPUT_POST,'url');
}


if($error = $parser->index()){
    echo $error;
}