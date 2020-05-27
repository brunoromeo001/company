<?php

use Company\Page;

$app->get('/precos', function () {
    
    $page = new Page();
    
    $page->setTpl("pricing");   

    exit;
});


?>