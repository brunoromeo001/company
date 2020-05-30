<?php

namespace Company\Model;

use \Company\DB\Sql;
use \Company\Model;

class Pricing extends Model{

  public function get($id_pricing)
	{
		
		$sql = new Sql();
		
		$results = $sql->select("SELECT * FROM tb_pricing WHERE id_pricing = :id_pricing", [
			':id_pricing'=>$id_pricing
		]);
		
		$this->setData($results[0]);
	}	

  public static function listAll()
  {

    $sql = new Sql();

    return $sql->select("SELECT * FROM tb_pricing ORDER BY pricing ");    

  }

  public function save()
	{
		
		$sql = new Sql();
	
		$results = $sql->select("CALL sp_pricing_save(:id_pricing, :plan, :pricing, :deteils, :advanced)", array(
			":id_pricing"=>$this->getid_princing(),
      ":plan"=>$this->getplan(),
      ":pricing"=>$this->getpricing(),
      ":deteils"=>$this->getdeteils(),
      ":advanced"=>$this->getadvanced()
		));
		
		$this->setData($results[0]);			
  } 
  
  public function delete()
	{		
		$sql = new Sql();
		
		$sql->query("DELETE FROM tb_pricing WHERE id_pricing = :id_pricing", [
			':id_pricing'=>$this->getid_pricing()
		]);
	}

}

?>
