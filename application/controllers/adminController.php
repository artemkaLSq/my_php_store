<?php

namespace application\controllers;

use application\core\Controller;

class adminController extends Controller
{

	public function __construct($route)
	{
		parent::__construct($route);
		$this->view->layout = 'admin';
	}

	public function loginAction() 
	{
		if(isset($_SESSION['admin']))
		{
			$this->view->redirect('adminaddGood');
		}

		if(!empty($_POST))
		{
			if(!$this->model->loginValidate($_POST))
			{
				$this->view->message($this->model->error);
			}
			else
			{
				$_SESSION['admin'] = true;
				$this->view->redirect('adminaddGood');
			}
		}
		$this->view->render();
	}

	public function addGoodAction() 
	{
		if(!empty($_POST))
		{
			$id = $this->model->goodAdd($_POST);
		}
		$this->view->render();
	}

	public function editGoodAction()
	{
		$result = $this->model->getGoodByName($_POST['good']);
		$vars = [
			'goods_name' => $result[0]['goods_name'],
			'img' => $result[0]['img'],
			'info' => $result[0]['info'],
			'price' => $result[0]['price'],
			'id_cat' => $result[0]['id_cat']
		];
		$this->view->render($vars);
	}

	public function goodEditedAction()
	{
		$id = $this->model->getGoodId($_POST['good']);
		$this->model->editGood($_POST, $id);
		$this->view->redirect('adminedit');		
	}
	
	public function editAction() 
	{
		$result = $this->model->getGoodsList();
		$vars = [
			'goods' => $result
		];
		$this->view->render($vars);		
	}

	public function deleteGoodAction() 
	{
		$result = $this->model->getGoodsList();
		$vars = [
			'goods' => $result
		];
		$this->view->render($vars);
	}

	public function goodDeletedAction()
	{
		$this->model->deleteGood($_POST['name']);
		$this->view->redirect('admindeleteGood');		
	}


	public function codeEditAction() 
	{
		$vars = [
			'main' => file_get_contents('C:/xampp/htdocs/application/views/main/main.php'),
			'about' => file_get_contents('C:/xampp/htdocs/application/views/main/about.php'),
			'contacts' => file_get_contents('C:/xampp/htdocs/application/views/main/contacts.php')
		];

		if(!empty($_POST))
		{
		 file_put_contents('C:/xampp/htdocs/application/views/main/main.php', $_POST['main']);
		 file_put_contents('C:/xampp/htdocs/application/views/main/about.php', $_POST['about']);
		 file_put_contents('C:/xampp/htdocs/application/views/main/contacts.php', $_POST['contacts']);
		}
		$this->view->render($vars);
	}

	public function logoutAction() 
	{
		unset($_SESSION['admin']);
		$this->view->redirect('adminlogin');
	}

}