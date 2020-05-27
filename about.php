<?php

use Company\Page;


$app->get('/sobre', function () {
    
    $page = new Page();
    
    $page->setTpl("about");   

    exit;
});

$app->get('/equipe', function () {
    
    $page = new Page();
    
    $page->setTpl("team");   

    exit;
});

$app->get('/testemunhas', function () {
    
    $page = new Page();
    
    $page->setTpl("testimonials");   

    exit;
});

?>