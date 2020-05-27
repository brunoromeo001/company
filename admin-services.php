<?php

use Company\PageAdmin;

$app->get('/admin/services', function(){

    $pageAdmin = new PageAdmin();

    $pageAdmin->setTpl('services');

    exit;
});

?>