<?php

use Company\Page;

$app->get('/portifolio', function () {
    
    $page = new Page();
    
    $page->setTpl("portfolio");   

    exit;
});


?>