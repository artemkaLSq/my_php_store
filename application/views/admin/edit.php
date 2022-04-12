		<div class="content">
		<div class="form-header">Изменить товар</div>
		<form class="input-form" action="/admineditGood" method="post" enctype="multipart/form-data | text/plain">
			<div class="input-div">
				<label class="input-label">Товар</label>
				<select name="good">
					<?php foreach ($goods as $val): ?>
					<option><?php echo $val['goods_name']; ?></option>
					<?php endforeach; ?>
				</select>
			</div>
			<div class="input-div">
				<button type="submit">Изменить</button>
			</div>
			</form>
	</div>