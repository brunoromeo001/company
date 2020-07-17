<?php

use \Company\PageAdmin;
use \Company\DB\Sql;

$app->get('/admin/portfolio', function(){

    $pageAdmin = new PageAdmin();
    
    $pageAdmin->setTpl('portfolio');

    exit;
});
?>