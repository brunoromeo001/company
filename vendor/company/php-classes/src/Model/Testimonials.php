<?php

namespace Company\Model;

use \Company\DB\Sql;
use \Company\Model;

class Testimonials extends Model{

  public function get($id_testimonials)
	{
		
		$sql = new Sql();
		
		$results = $sql->select("SELECT * FROM tb_testimonials WHERE id_testimonials = :id_testimonials", [
			':id_testimonials'=>$id_testimonials
		]);
		
		$this->setData($results[0]);
	}	

	public static function listAllTestimonials()
  {

    $sql = new Sql();

    return $sql->select("SELECT * FROM tb_testimonials");    

	}
	
	public function saveTestimonials()
	{
		
		$sql = new Sql();
	
		$results = $sql->select("CALL sp_testimonials_save(:id_testimonials, :name_testimonials, :profession_testimonials, :testimonials)", array(
			":id_testimonials"=>$this->getid_testimonials(),
			":name_testimonials"=>$this->getname_testimonials(),
			":profession_testimonials"=>$this->getprofession_testimonials(),
			":testimonials"=>$this->gettestimonials()      
		));
		
		$this->setData($results[0]);			
	} 

	public function deleteTestimonials()
	{		
		$sql = new Sql();
		
		$sql->query("DELETE FROM tb_testimonials WHERE id_testimonials = :id_testimonials", [
			':id_testimonials'=>$this->getid_testimonials()
		]);
	}

}

?>