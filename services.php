<?php

use Company\Page;

$app->get('/servicos', function () {
    
    $page = new Page();
    
    $page->setTpl("services");   

    exit;
});


?>