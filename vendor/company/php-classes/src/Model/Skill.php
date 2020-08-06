<?php

namespace Company\Model;

use \Company\DB\Sql;
use \Company\Model;

class Skill extends Model{

  public function get($id_text_skill)
	{
		
		$sql = new Sql();
		
		$results = $sql->select("SELECT * FROM tb_text_skill WHERE id_text_skill = :id_text_skill", [
			':id_text_skill'=>$id_text_skill
		]);
		
		$this->setData($results[0]);
	}	

	public function getSkills($id_skill)
	{
		
		$sql = new Sql();
		
		$results = $sql->select("SELECT * FROM tb_skills WHERE id_skill = :id_skill", [
			':id_skill'=>$id_skill
		]);				

		$this->setData($results[0]);	

		return $results;
  }

  public static function listTextSkill()
  {

		$sql = new Sql();

		return $sql->select("SELECT * FROM tb_text_skill");    

	}
		
	public static function listAllSkills()
	{

		$sql = new Sql();

		return $sql->select("SELECT * FROM tb_skills");    

  }	
  
  public function saveTextSkill()
	{
		
		$sql = new Sql();
	
		$results = $sql->select("CALL sp_text_skill_save(:id_text_skill, :text_skill)", array(
			":id_text_skill"=>1,
      ":text_skill"=>$this->gettext_skill()
		));
		
		$this->setData($results[0]);			
  } 

  	public function saveSkill()
	{
		
		$sql = new Sql();
	
		$results = $sql->select("CALL sp_skill_save(:id_skill, :name_skill, :value_skill)", array(
			":id_skill"=>$this->getid_skill(),
			":name_skill"=>$this->getname_skill(),
			":value_skill"=>$this->getvalue_skill()
		));
		
		$this->setData($results[0]);			
  } 
  
  public function deleteSkills()
	{		
		$sql = new Sql();
		
		$sql->query("DELETE FROM tb_skills WHERE id_skill = :id_skill", [
			':id_skill'=>$this->getid_skill()
		]);
	}	

}

?>