<?php

namespace Company\Model;

use \Company\DB\Sql;
use \Company\Model;

class AboutUs extends Model{

	public function get($id_about_us)
	{
		
		$sql = new Sql();
		
		$results = $sql->select("SELECT * FROM tb_about_us WHERE id_about_us = :id_about_us", [
			':id_about_us'=>$id_about_us
		]);
		
		$this->setData($results[0]);
	}		

}

?>
