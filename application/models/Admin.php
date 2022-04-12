<?php

namespace application\models;

use application\core\Model;

class Admin extends Model
{

	public $error;

	public function loginValidate($post)
	{	
		$config = require 'application/config/admin.php';
		if($config['login'] != $post['login'] or $config['password'] != $post['password'])
		{
			$this->error = 'Incorrect login or password';
			return false;
		}
		return true;
	}

	public function goodAdd($post)
	{
		$params = [
		'id' => '',
		'name' => $post['name'],
		'info' => $post['info'],
		'price' => $post['price'],
		'id_cat' => $post['category'],
		'img' => $post['img']
		];
		if($params['id_cat'] == 'Aprilia')
			$params['id_cat'] = 1;
		if($params['id_cat'] == 'Suzuki')
			$params['id_cat'] = 2;
		if($params['id_cat'] == 'Yamaha')
			$params['id_cat'] = 3;
		if(is_int($params['id_cat']))
			$this->db->query('INSERT INTO goods VALUES (:id, :name, :info, :price, :id_cat, :img)', $params);
		return $this->db->lastInsertId();
	}

	public function getGoodsList()
	{
		$result = $this->db->row('SELECT id, goods_name FROM goods');
		return $result;
	}

	public function getGoodByName($name)
	{
		$result = $this->db->row('SELECT goods_name, info, price, img, id_cat FROM goods WHERE goods_name = "'.$name.'"');
		return $result;
	}

	public function editGood($post, $id)
	{
		$params = [
		'id' => $id,
		'name' => $post['name'],
		'info' => $post['info'],
		'price' => $post['price'],
		'id_cat' => $post['category'],
		'img' => $post['img']
		];

		if($params['id_cat'] == 'Aprilia')
			$params['id_cat'] = 1;
		if($params['id_cat'] == 'Suzuki')
			$params['id_cat'] = 2;
		if($params['id_cat'] == 'Yamaha')
			$params['id_cat'] = 3;
		if(is_int($params['id_cat']))
			$this->db->query('UPDATE goods SET goods_name = :name, info = :info, price = :price, id_cat = :id_cat, img = :img WHERE id = :id', $params);
	}

	public function deleteGood($name)
	{
		$result = $this->db->row('DELETE FROM goods WHERE goods_name = "'.$name.'"');
	}

	public function getGoodId($name)
	{
		$result = $this->db->row('SELECT id FROM goods WHERE goods_name = "'.$name.'"');
		return $result[0]['id'];
	}

}