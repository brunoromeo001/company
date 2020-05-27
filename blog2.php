<?php

use Company\Page;

$app->get('/blog', function () {
    
    $page = new Page();
    
    $page->setTpl("blog");   

    exit;
});

?>