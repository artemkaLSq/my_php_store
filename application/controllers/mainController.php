<?php

namespace application\controllers;

use application\core\Controller;

class mainController extends Controller
{
	public function mainAction() {
		$this->view->render();
	}

	public function aboutAction() {
		$this->view->render();
	}

	public function contactsAction() {
		$this->view->render();
	}

	public function categoryAction(){
		$result = $this->model->getGoods($this->route['id']);
		$vars = [
			'goods' => $result
		];
		$this->view->render($vars);

	}

	public function goodAction() {
		$result = $this->model->getGood($this->route['id']);
		$vars = [
			'goods_name' => $result[0]['goods_name'],
			'img' => $result[0]['img'],
			'info' => $result[0]['info'],
			'price' => $result[0]['price']
		];
		$this->view->render($vars);
	}

}