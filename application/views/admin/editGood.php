		<div class="content">
		<div class="form-header">Редактировать товар</div>
		<form class="input-form" action="/admingoodEdited" method="post" enctype="multipart/form-data | text/plain">
			<div class="input-div">
				<label class="input-label">Старое наименование товара</label>
				<input type="text" name="good" value="<?php echo $goods_name; ?>" readonly="readonly">
			</div>
			<div class="input-div">
				<label class="input-label">Новое наименование товара</label>
				<input type="text" name="name" value="<?php echo $goods_name; ?>">
			</div>
			<div class="input-div">
				<label class="input-label">Характеристики</label>
				<textarea name="info"><?php echo $info ?></textarea>
			</div>
			<div class="input-div">
				<label class="input-label">Цена</label>
				<input type="text" name="price" value="<?php echo $price; ?>">
			</div>
			<div class="input-div">
				<label class="input-label">Категория товара</label>
				<select name="category">
					
					<option <?php if($id_cat == 1) echo "selected";  ?>>Aprilia</option>
					<option <?php if($id_cat == 2) echo "selected";  ?>>Suzuki</option>
					<option <?php if($id_cat == 3) echo "selected";  ?>>Yamaha</option>
				</select>
			</div>
			<div class="input-div">
				<label class="input-label">Выберите файл картинки</label>
				<input type="file" name="img" value="<?php echo $img; ?>">
			</div>
			<div class="input-div">
				<button type="submit">Сохранить</button>
			</div>
		</form>
	</div>