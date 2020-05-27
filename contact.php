<?php

use Company\Page;

$app->get('/contato', function () {
    
    $page = new Page();
    
    $page->setTpl("contact");   

    exit;
});


?>