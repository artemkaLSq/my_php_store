		<div class="content">
		<div class="form-header">Добавить товар</div>
		<form class="input-form" action="/adminaddGood" method="post" enctype="multipart/form-data | text/plain">
			<div class="input-div">
				<label class="input-label">Наименование товара</label>
				<input type="text" name="name">
			</div>
			<div class="input-div">
				<label class="input-label">Характеристики</label>
				<textarea name="info"></textarea>
			</div>
			<div class="input-div">
				<label class="input-label">Цена</label>
				<input type="text" name="price">
			</div>
			<div class="input-div">
				<label class="input-label">Категория товара</label>
				<select name="category">
					<option>Aprilia</option>
					<option>Suzuki</option>
					<option>Yamaha</option>
				</select>
			</div>
			<div class="input-div">
				<label class="input-label">Выберите файл картинки</label>
				<input type="file" name="img">
			</div>
			<div class="input-div">
				<button type="submit">Добавить</button>
			</div>
		</form>
	</div>