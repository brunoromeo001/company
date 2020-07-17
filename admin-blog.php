<?php

use \Company\PageAdmin;
use \Company\DB\Sql;



$app->get('/admin/blog', function(){

    $pageAdmin = new PageAdmin();
    
    $pageAdmin->setTpl('blog');

    exit;
});
?>