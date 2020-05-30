<?php

use Company\Page;
use Company\Model\Pricing;

$app->get('/precos', function () {
    
    $page = new Page();

    $plan = Pricing::listAll();
    
    $page->setTpl("pricing", [
        "plans"=>$plan
    ]);   

    exit;
});


?>
