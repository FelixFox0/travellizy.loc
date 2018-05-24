<?php

require_once('parser.php');
$parser = new Parser;
if($argv != NULL){
    $parser->url = $argv[1];
}elseif(isset($_POST['url'])){
    $parser->url = filter_input(INPUT_POST,'url');
}

if($error = $parser->validate()){
    echo $error;
}else{
    $parser->index();
}
