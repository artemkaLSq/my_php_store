<table class="goods">
		<tr>
			<th> Наименование </th>
			<th> Фото </th>
			<th> Характеристики </th>
			<th> Цена (тыс. руб) </th>
		</tr>
<?php foreach ($goods as $val): ?>
	<tr>
		<td><a href="/good<?php echo $val['id']; ?>"><?php echo $val['goods_name']; ?></a></td>
		<td><img class="good-photo" src="/resources/img/<?php echo $val['img']; ?>"></td>
		<td><?php echo $val['info']; ?></td>
		<td><?php echo $val['price']; ?></td>
	</tr>
<?php endforeach; ?>
</table>