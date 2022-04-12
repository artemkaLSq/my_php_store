<!DOCTYPE html>
<html>
<head>
    <title>Панель администратора</title>
<link rel="stylesheet" type="text/css" href="/resources/styles/admin.css">
<meta http-equiv="content-type" content="text/html; charset=utf-8">
</head>
<body>
	<?php if ($this->route['action'] != 'login'): ?>
	<div class="sidebar">
	<div class="sidebar-cont">
		<ul class="adminMenu">
			<li><a href="/adminaddGood">Добавить товар</a></li>
			<li><a href="/adminedit"> Изменить товар</a> </li>
			<li><a href="/admindeleteGood"> Удалить товар</a> </li>
			<li><a href="/admincodeEdit"> Редактировать код </a></li>
			<li><a href="/adminlogout"> Выход </a></li>
		</ul>
	</div>
	</div>
	<?php endif; ?>
	

		<?php echo $content; ?>


</body>
</html>