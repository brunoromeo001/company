<?php

use Company\Page;

$app->get('/', function () {
    
    $page = new Page();
    
    $page->setTpl("index");   

    exit;
});


?>