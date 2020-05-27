<?php

use Company\PageAdmin;

$app->get('/admin', function(){

    $pageAdmin = new PageAdmin();

    $pageAdmin->setTpl('index');

    exit;
});


?>