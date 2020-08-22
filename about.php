<?php

use Company\Page;
use \Company\Model\Skill;
use \Company\Model\Client;
use \Company\Model\Team;

$app->get('/sobre', function () {
    
    $page = new Page();

    $skills = Skill::listAllSkills();
    $clients = Client::listAll();
    $team = Team::listAllTeam();
    $aboutTeam = new Team();

    $aboutTeam->get(1);
    
    $page->setTpl("about",[
        "skill"=>$skills,
        "client"=>$clients,
        "team"=>$team,
        'aboutTeam'=>$aboutTeam->getvalues()
    ]); 

    exit;
});

$app->get('/equipe', function () {
    
    $page = new Page();
    
    $page->setTpl("team");   

    exit;
});

$app->get('/testemunhas', function () {
    
    $page = new Page();
    
    $page->setTpl("testimonials");   

    exit;
});

?>