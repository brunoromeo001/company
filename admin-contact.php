<?php

use \Company\PageAdmin;
use \Company\DB\Sql;

$app->get('/admin/contact', function(){

    $pageAdmin = new PageAdmin();
    
    $pageAdmin->setTpl('contact');

    exit;
});
?>