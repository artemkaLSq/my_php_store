<span class="head-text">Редактировать страницы</span>

<form action="/admincodeEdit" method="POST" class="center-form-page">


    <div class="form-group">
    	<label class="label1">Главная страница:</label><br>
		<textarea class="txt-area" name="main" id="text" cols="60" rows="10"><?php echo $main ?></textarea>
    </div>

 	<div class="form-group">
    	<label class="label1">О нас:</label><br>
		<textarea class="txt-area" name="about" cols="60" rows="10"><?php echo $about ?></textarea>
    </div>

    <div class="form-group">
    	<label class="label1">Контакты:</label><br>
		<textarea class="txt-area" name="contacts" cols="60" rows="10"><?php echo $contacts ?></textarea>
    </div>
    <div class="input-div-but">
    <button type="submit">Сохранить</button>
    </div>
    <br><br>
</form>