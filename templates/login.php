<? if($errors){?>
<p class="message error">Доступ закрыт.</p>
<?} elseif($message == "ok") {?>
<p class="message ok">Доступ открыт.</p>
<?}?>
<form action="/admin.php" method="post" id="login_form">
    <fieldset>
        <legend>Авторизация</legend>
        <p>
            <label for="login">Логин <span class="required">*</span></label>
            <input type="text" name="login" id="login"/>
        </p>
        <p>
            <label for="password">Пароль <span class="required">*</span></label>
            <input type="password" name="password" id="password"/>
        </p>
        <input type="hidden" name="authorisation" value="1"/>
        <p>
            <button type="submit">Отправить</button>
        </p>
    </fieldset>
</form>