<?php

use \Company\PageAdmin;
use \Company\DB\Sql;
use \Company\Model\About;
use \Company\Model\AboutUs;
use \Company\Model\Testimonials;

$app->get('/admin/about-us', function(){

    $pageAdmin = new PageAdmin();

    $textSkill = AboutUs::listTextSkill();
    $skills = AboutUs::listAllSkills();
    $clients = AboutUs::listAllClients();
    
    $pageAdmin->setTpl('about-us',[
        'textSkill'=>$textSkill,
        'skills'=>$skills,
        'clients'=>$clients
    ]);

    exit;
});

$app->post('/admin/about-team', function(){

    $team = new About();

    $team->setData($_POST);  
   
    $team->saveAboutTeam();   

    header("Location: /admin/team");
    exit;
});

$app->post('/admin/text-skill', function(){

    $textSkill = new AboutUs();

    $textSkill->setData($_POST);     
    
    $textSkill->saveTextSkill();   

    header("Location: /admin/about-us");
    exit;
});

$app->post('/admin/skill/create', function(){

    $skill = new AboutUs();

    $skill->setData($_POST);     
    
    $skill->saveSkill();   

    header("Location: /admin/about-us");
    exit;
});

$app->post('/admin/client/create', function(){

    $client = new AboutUs();

    $client->setData($_POST);     
    
    $client->saveClient();   

    header("Location: /admin/about-us");
    exit;
});

$app->get('/admin/team', function(){

    $pageAdmin = new PageAdmin();

    $team = About::listAllTeam();

    $aboutTeam = About::listAboutTeam();
    
    $pageAdmin->setTpl('team', [
        'teams'=>$team,
        'about_team'=>$aboutTeam
    ]);

    exit;
});

$app->post('/admin/team', function(){

    $team = new About();

    $team->setData($_POST);  
   
    $team->saveTeam();

   //$team->setPhoto($_FILES["file"]);

    if($_FILES["file"]["name"] !== "") $team->setPhoto($_FILES['file']);

    header("Location: /admin/team");
    exit;
});


$app->get("/admin/team/{id_team}/delete", function($request, $response){		
    
    $id_team = $request->getAttribute('id_team');
    
    $intId_team = (int)$id_team;    
    
    $team = new About();    
	
    $team->get($intId_team);  
    
    $team->deleteTeam();
    
    header("Location: /admin/team");
    exit;
});

$app->get("/admin/skills/{id_skill}/delete", function($request, $response){		
    
    $id_skill = $request->getAttribute('id_skill');
    
    $intId_skill = (int)$id_skill;    
    
    $skill = new AboutUs();    
	
    $skill->getSkills($intId_skill);  

    $skill->deleteSkills(); 

    header("Location: /admin/about-us");
    exit;
});

$app->get("/admin/client/{id_client}/delete", function($request, $response){		
    
    $id_client = $request->getAttribute('id_client');
    
    $intId_client = (int)$id_client;    
    
    $client = new AboutUs();    
	
    $client->getClients($intId_client);  
    
    $client->deleteClients();         

    header("Location: /admin/about-us");
    exit;
});

// Rotas da página de depoimentos

$app->get('/admin/testimonials', function(){

    $pageAdmin = new PageAdmin();

    $testimonial = Testimonials::listAllTestimonials();
    
    $pageAdmin->setTpl('testimonials',[
        'testimonials'=>$testimonial    
    ]);

    exit;
});

$app->post('/admin/testimonials', function(){

    $testimonials = new Testimonials();

    $testimonials->setData($_POST);  
   
    $testimonials->saveTestimonials();  

    header("Location: /admin/testimonials");
    exit;
});

$app->get("/admin/testimonials/{id_testimonials}/delete", function($request, $response){		
    
    $id_testimonials = $request->getAttribute('id_testimonials');
    
    $intId_testimonials = (int)$id_testimonials;    
    
    $testimonials = new Testimonials();    
	
    $testimonials->get($intId_testimonials);  
    
    $testimonials->deleteTestimonials();   
    
    header("Location: /admin/testimonials");
    exit;
});


?>