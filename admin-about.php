<?php

use \Company\PageAdmin;
use \Company\DB\Sql;
use \Company\Model\Team;
use \Company\Model\AboutUs;
use \Company\Model\Skill;
use \Company\Model\Testimonials;

$app->get('/admin/about-us', function(){

    $pageAdmin = new PageAdmin();

    $textSkill = new Skill();

    $aboutUs = new AboutUs();

    $textSkill->get(1);

    $aboutUs->get(1);

    $skills = Skill::listAllSkills();

    $clients = AboutUs::listAllClients();
    
    $pageAdmin->setTpl('about-us',[        
        'aboutUs'=>$aboutUs->getValues(),
        'textSkill'=>$textSkill->getValues(),
        'skills'=>$skills,
        'clients'=>$clients
    ]);

    exit;
});

$app->post('/admin/skill-update', function($id_skill){       

    $skill = new Skill();

    $skill->setData($_POST);     
    
    $skill->saveSkill();   

    header("Location: /admin/about-us");
    exit;
   
});


$app->post('/admin/about-team', function(){

    $team = new Team();

    $team->setData($_POST);  
   
    $team->saveAboutTeam();   

    header("Location: /admin/team");
    exit;
});



$app->post('/admin/text-skill', function(){

    $textSkill = new Skill();

    $textSkill->setData($_POST);     
    
    $textSkill->saveTextSkill();   

    header("Location: /admin/about-us");
    exit;
});

$app->post('/admin/skill/create', function(){

    $skill = new Skill();

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

$app->post('/admin/client-update', function($id_skill){       

    $client = new AboutUs();

    $client->setData($_POST);     
    
    $client->saveClient();   

    header("Location: /admin/about-us");
    exit;
   
});


$app->get('/admin/team', function(){

    $pageAdmin = new PageAdmin();

    $team = Team::listAllTeam();

    $aboutTeam = new Team();

    $aboutTeam->get(1);
    
    $pageAdmin->setTpl('team', [
        'teams'=>$team,
        'aboutTeam'=>$aboutTeam->getvalues()
    ]);

    exit;
});

$app->post('/admin/team-create', function(){

    $team = new Team();

    $team->setData($_POST);  
   
    $team->saveTeam();   

    if($_FILES["file"]["name"] !== "") $team->setPhoto($_FILES['file']);

    header("Location: /admin/team");
    exit;
});

$app->post('/admin/team-update', function($id_team){       

    $team = new Team();

    $team->setData($_POST);     
    
    $team->saveTeam();   

    if($_FILES["file"]["name"] !== "") $team->setPhoto($_FILES['file']);

    header("Location: /admin/team");
    exit;
   
});

$app->get("/admin/team/{id_team}/delete", function($request, $response){		
    
    $id_team = $request->getAttribute('id_team');
    
    $intId_team = (int)$id_team;    
    
    $team = new Team();    
	
    $team->getTeam($intId_team);  
    
    $team->deleteTeam();
    
    header("Location: /admin/team");
    exit;
});

$app->get("/admin/skills/{id_skill}/delete", function($request, $response){		
    
    $id_skill = $request->getAttribute('id_skill');
    
    $intId_skill = (int)$id_skill;    
    
    $skill = new Skill();    
	
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
   
    $testimonials->save();  

    if($_FILES["file"]["name"] !== "") $testimonials->setPhoto($_FILES['file']);

    header("Location: /admin/testimonials");
    exit;
});

$app->post('/admin/testimonials-update', function($id_testimonials){

    $testimonials = new Testimonials();

    $testimonials->setData($_POST);        
  
    $testimonials->save();    
    
    if($_FILES["file"]["name"] !== "") $testimonials->setPhoto($_FILES['file']);

    header("Location: /admin/testimonials");
    exit;
});

$app->get("/admin/testimonials/{id_testimonials}/delete", function($request, $response){		
    
    $id_testimonials = $request->getAttribute('id_testimonials');
    
    $intId_testimonials = (int)$id_testimonials;    
    
    $testimonials = new Testimonials();    
	
    $testimonials->get($intId_testimonials);  
    
    $testimonials->delete();   
    
    header("Location: /admin/testimonials");
    exit;
});


?>