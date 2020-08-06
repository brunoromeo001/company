<?php

namespace Company\Model;

use \Company\DB\Sql;
use \Company\Model;

class AboutUs extends Model{
	

	public function getClients($id_client)
	{
		
		$sql = new Sql();
		
		$results = $sql->select("SELECT * FROM tb_clients WHERE id_client = :id_client", [
			':id_client'=>$id_client
		]);
		
		$this->setData($results[0]);
	}	

	public static function listAllClients()
 	{

		$sql = new Sql();

		return $sql->select("SELECT * FROM tb_clients");    

	}	
		
	public function saveClient()
	{
		
		$sql = new Sql();
	
		$results = $sql->select("CALL sp_client_save(:id_client, :name_client, :site_client)", array(
			":id_client"=>$this->getid_client(),
			":name_client"=>$this->getname_client(),
			":site_client"=>$this->getsite_client()
		));
		
		$this->setData($results[0]);			
	} 	  

	public function deleteClients()
	{		
		$sql = new Sql();
		
		$sql->query("DELETE FROM tb_clients WHERE id_client = :id_client", [
			':id_client'=>$this->getid_client()
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
