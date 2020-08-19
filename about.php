<?php

use Company\Page;
use \Company\Model\Skill;

$app->get('/sobre', function () {
    
    $page = new Page();

    $skills = Skill::listAllSkills();
    
    $page->setTpl("about",[
        "skill"=>$skills
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