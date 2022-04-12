<?php

namespace application\core;

class View 
{
	public $path;
	public $route;
	public $layout = 'default';

	public function __construct($route)
	{
		$this->route = $route;
		$this->path = $route['controller'].'/'.$route['action'];
	}

	public function render($vars = [])
	{
		extract($vars);
		$path = 'application/views/'.$this->path.'.php';
		if(file_exists($path))
		{
			ob_start();
			require $path;
			$content = ob_get_clean();
			require 'application/views/layouts/'.$this->layout.'.php';
		}
	}

	public function message($message)
	{
		echo sprintf('<script type="text/javascript">
		var win=window.open("","popup","width=200,height=200,left=300,top=400,menubar=0,resizable=0,scrollbars=0,titlebar=0,toolbar=0",true);
		win.document.writeln("%s");
		</script>', $message); 
	}

	public function redirect($url)
	{
		header('location: /'.$url);
		exit;
	}
}