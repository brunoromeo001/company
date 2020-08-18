<?php

namespace Company\Model;

use \Company\DB\Sql;
use \Company\Model;

class Testimonials extends Model{

  public function get($id_testimonial)
	{
		
		$sql = new Sql();
		
		$results = $sql->select("SELECT * FROM tb_testimonials WHERE id_testimonial = :id_testimonial", [
			':id_testimonial'=>$id_testimonial
		]);
		
		$this->setData($results[0]);
	}	

	public static function listAllTestimonials()
  {

    $sql = new Sql();

    return $sql->select("SELECT * FROM tb_testimonials");    

	}
	
	public function save()
	{
		
		$sql = new Sql();
	
		$results = $sql->select("CALL sp_testimonials_save(:id_testimonial, :name_testimonial, :profession_testimonial, :testimonial)", array(
			":id_testimonial"=>$this->getid_testimonial(),
			":name_testimonial"=>$this->getname_testimonial(),
			":profession_testimonial"=>$this->getprofession_testimonial(),
			":testimonial"=>$this->gettestimonial()      
		));
		
		$this->setData($results[0]);			
	} 

	public function delete()
	{		
		$sql = new Sql();
		
		$sql->query("DELETE FROM tb_testimonials WHERE id_testimonials = :id_testimonials", [
			':id_testimonials'=>$this->getid_testimonials()
		]);
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
			"testimonials" . DIRECTORY_SEPARATOR .
			"testimonial-" . $this->getid_testimonial() . ".jpg";
		
		imagejpeg($image, $dist);
		
		imagedestroy($image);
	}


}

?>