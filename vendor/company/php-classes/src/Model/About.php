<?php

namespace Company\Model;

use \Company\DB\Sql;
use \Company\Model;

class About extends Model{

  public function get($id_team)
	{
		
		$sql = new Sql();
		
		$results = $sql->select("SELECT * FROM tb_team WHERE id_team = :id_team", [
			':id_team'=>$id_team
		]);
		
		$this->setData($results[0]);
	}	

  public static function listAllTeam()
  {

    $sql = new Sql();

    return $sql->select("SELECT * FROM tb_team ORDER BY name_team");    

	}
	
	public static function listAboutTeam()
  {

    $sql = new Sql();

    return $sql->select("SELECT * FROM tb_about_team");    

	}	
	
	public function saveAboutTeam()
	{
		
		$sql = new Sql();
	
		$results = $sql->select("CALL sp_about_team_save(:id_about_team, :text_about)", array(
			":id_about_team"=>$this->getid_about_team(),
      ":text_about"=>$this->gettext_about()
		));
		
		$this->setData($results[0]);			
  } 

  public function saveTeam()
	{
		
		$sql = new Sql();
	
		$results = $sql->select("CALL sp_team_save(:id_team, :name_team, :function_team, :facebook_team, :twitter_team, :instagram_team, :linkedin_team)", array(
			":id_team"=>$this->getid_team(),
      ":name_team"=>$this->getname_team(),
      ":function_team"=>$this->getfunction_team(),
      ":facebook_team"=>$this->getlink_facebook(),
      ":twitter_team"=>$this->getlink_twitter(),
      ":instagram_team"=>$this->getlink_instagram(),      
      ":linkedin_team"=>$this->getlink_linkedin()
		));
		
		$this->setData($results[0]);			
	} 	
  
  public function deleteTeam()
	{		
		$sql = new Sql();
		
		$sql->query("DELETE FROM tb_team WHERE id_team = :id_team", [
			':id_team'=>$this->getid_team()
		]);
	}

	public function checkPhotoTeam()
	{
		
		if (file_exists(
			$_SERVER['DOCUMENT_ROOT'] . DIRECTORY_SEPARATOR .
			"res" . DIRECTORY_SEPARATOR .
			"assets" . DIRECTORY_SEPARATOR .
			"img" . DIRECTORY_SEPARATOR .
			"team" . DIRECTORY_SEPARATOR .
			$this->getidteam() . ".jpg"
		)){
			
			$url = "/res/assets/img/team/" . $this->getidteam() . ".jpg";
		}else{
			
			$url = "/res/assets/img/deault.jpg";
		}
		
		return $this->setdesphoto($url);
		
	}

	public function getValues()
	{
		
		$this->checkPhoto();
		
		$values = parent::getValues();
		
		return $values;
	}
	
	public function setPhoto($file)
	{
		
		$extension = explode('.', $file['name']);
		$extension = end($extension);
		
		switch ($extension){
			
			case "jpg":
			case "jpeg":
			$image = imagecreatefromjpeg($file["tmp_name"]);
			break;
			
			case "gif":			
			$image = imagecreatefromgif($file["tmp_name"]);
			break;
			
			case "png":			
			$image = imagecreatefrompng($file["tmp_name"]);
			break;	
		}
		
		$dist = $_SERVER['DOCUMENT_ROOT']. DIRECTORY_SEPARATOR .
			"res" . DIRECTORY_SEPARATOR .
			"assets" . DIRECTORY_SEPARATOR .
			"img" . DIRECTORY_SEPARATOR .
			"team" . DIRECTORY_SEPARATOR .
			$this->getidteam() . ".jpg";
		
		imagejpeg($image, $dist);
		
		imagedestroy($image);
		
		$this->checkPhoto();
	}		
}

?>