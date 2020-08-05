<?php

use \Company\PageAdmin;
use \Company\DB\Sql;
use \Company\Model\Pricing;

$app->get('/admin/pricing', function(){

    $pageAdmin = new PageAdmin();

    $pricing = Pricing::listAll();

    $asked = Pricing::askedListAll();
    
    $pageAdmin->setTpl('pricing', [
        "pricings"=>$pricing,
        "askeds"=>$asked
    ]);

    exit;
});

$app->post('/admin/pricing', function(){

    $pricing = new Pricing();

    $pricing->setData($_POST);
    
    $pricing->save();    

    header("Location: /admin/pricing");
    exit;
});

$app->post('/admin/asked-create', function(){

    $asked = new Pricing();

    $asked->setData($_POST);
    
    $asked->saveAsked();    

    header("Location: /admin/pricing");
    exit;
});

$app->get("/admin/pricing/{id_pricing}/delete", function($request, $response){		
    
    
    $id_pricing = $request->getAttribute('id_pricing');
        
    $intId_pricing = (int)$id_pricing;    
    
    $pricing = new Pricing();    
	
    $pricing->get($intId_pricing);  
    
    $pricing->delete();
    	
    header("Location: /admin/pricing");
    exit;
});

?>