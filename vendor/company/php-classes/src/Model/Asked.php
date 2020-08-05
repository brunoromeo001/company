<?php

namespace Company\Model;

use \Company\DB\Sql;
use \Company\Model;

class Asked extends Model{
    
	public function get($id_asked)
	{
		
		$sql = new Sql();
		
		$results = $sql->select("SELECT * FROM tb_askeds WHERE id_asked = :id_asked", [
			':id_asked'=>$id_asked
		]);
		
		$this->setData($results[0]);
	}

	public function save()
	{
		
		$sql = new Sql();
	
		$results = $sql->select("CALL sp_asked_save(:id_asked, :asked, :answer)", array(
			":id_asked"=>$this->getid_asked(),
			":asked"=>$this->getasked(),
			":answer"=>$this->getanswer()
		));
		
		$this->setData($results[0]);			
	} 
	 
	public function delete()
	{		
		$sql = new Sql();
		
		$sql->query("DELETE FROM tb_askeds WHERE id_asked = :id_asked", [
			':id_asked'=>$this->getid_asked()
		]);
	}
}


?>