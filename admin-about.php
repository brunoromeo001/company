<?php

use \Company\PageAdmin;
use \Company\DB\Sql;



$app->get('/admin/about-us', function(){

    $pageAdmin = new PageAdmin();
    
    $pageAdmin->setTpl('about-us');

    exit;
});

$app->get('/admin/team', function(){

    $pageAdmin = new PageAdmin();
    
    $pageAdmin->setTpl('team');

    exit;
});

$app->get('/admin/testimonials', function(){

    $pageAdmin = new PageAdmin();
    
    $pageAdmin->setTpl('testimonials');

    exit;
});

?>