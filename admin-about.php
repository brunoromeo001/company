<?php

use \Company\PageAdmin;
use \Company\DB\Sql;

$app->get('/admin/testimonials', function(){

    $pageAdmin = new PageAdmin();
    
    $pageAdmin->setTpl('testimonials');

    exit;
});
?>