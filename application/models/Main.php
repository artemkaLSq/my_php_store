<?php

namespace application\models;

use application\core\Model;

class Main extends Model
{

	public function getGoods($id_cat)
	{
		$result = $this->db->row('SELECT id, goods_name, info, price, img FROM goods WHERE id_cat ='.$id_cat);
		return $result;
	}

	public function getGood($id)
	{
		$result = $this->db->row('SELECT goods_name, info, price, img FROM goods WHERE id ='.$id);
		return $result;
	}

}