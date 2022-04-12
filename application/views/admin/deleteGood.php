		<div class="content">
		<div class="form-header">Удалить товар</div>
		<form class="input-form" action="/admingoodDeleted" method="post" enctype="multipart/form-data | text/plain">
			<div class="input-div">
				<label class="input-label">Товар</label>
				<select name="name">
					<?php foreach ($goods as $val): ?>
					<option><?php echo $val['goods_name']; ?></option>
					<?php endforeach; ?>
				</select>
			</div>
			<div class="input-div">
				<button type="submit">Удалить</button>
			</div>
		</form>
	</div>