<?php

use \Company\PageAdmin;
use \Company\DB\Sql;

$app->get('/admin/home', function(){

    $pageAdmin = new PageAdmin();
    
    $pageAdmin->setTpl('home');

    exit;
});
?>