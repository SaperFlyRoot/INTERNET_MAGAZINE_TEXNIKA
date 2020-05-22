<?php
session_start();
include_once 'dbconnect.php';
?>
<!doctype html>
<?php include("layouts/header.php");  ?>
<html lang="ru">
<body>
  <?php   if (isset($_SESSION['usr_id'])) { ?>
<h2 id="h2">По вопросам пишите нам</h2>
<div class="col-md-12">
  <div class="col-md-6">
<div class="sms">
  <form class="contact_form" action="send/mail.php" method="post">
    <p>
            <label style="color: black;" for="name">Имя:</label>
            <input type="text"  name="name" placeholder="Введите ваше имя" required />
        </p>
        <p>
            <label style="color: black;" for="email">Email:</label>
            <input type="email" name="email" placeholder="Введите электронный адрес" required />
            <span style="color: black;" class="form_hint">Правильный формат "name@something.com"</span>
        </p>
        <p>
            <label style="color: black;" for="tel">Телефон:</label>
            <input type="tel" name="tel" placeholder="Введите номер телефона" required />
            <span style="color: black;" class="form_hint">Правильный формат "+7-123-4567890"</span>
        </p>
        <p>
            <label style="color: black;"for="message">Текст сообщения:</label><br>
            <textarea style="width:300px;" name="message" cols="40" rows="4" required ></textarea>
        </p>
        <input name="bezspama" type="text" style="display:none" value="" />
        <p>
            <button class="submit" type="submit">Отправить сообщение</button>
        </p>
</form>
</div>
</div>
<script type="text/javascript">
$(function(){
  'use strict';
$('#form').on('submit', function(e){
    e.preventDefault();
    var fd = new FormData( this );
    $.ajax({
      url: 'o_magazine.php',
      type: 'POST',
      contentType: false,
      processData: false,
      data: fd,
      success: function(msg){
if(msg == 'ok') {
  alert('Отправлено')
} else {
  alert('Ошибка')
}
      }
    });
  });
});
</script>
  <div class="col-md-6">
<div class="o_magazine">
<p>Данный интернет-магазин разработан в рамках Дипломного проекта</p>
<p>Данный товар не является настящим!</p>
<P>Разработчик Кадыров Эрнест</p>
  <p>Студент 4-го курса</p>
  <p>Группы И-1-16</p>
  <p>Факультет ФЭМИиТ</p>
  <p>Государственное бюджетное образовательное учреждение высшего образования Республики Крым Крымский инженерно-педагогический университет имени Февзи Якубова</p>
</div>
</div>
</div>
<?php } else echo "<p id='order_error'>", "Требуется авторизоваться!", "<br>",'<i><a style="color:red;" href="login.php">Перейти к авторизации</a></i>',"</p>"; ?>
</body>
<?php include("layouts/footer.php");  ?>
