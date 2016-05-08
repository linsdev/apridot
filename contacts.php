<?php $title = '— Контакты';
require 'h.php' ?>

<style>
p {
margin-bottom: 2mm;
}
form {
display: block;
margin-left: auto;
margin-right: auto;
max-width: 10cm;
width: 97%;
}
input {
font-size: 130%;
font-family: Arial,Helvetica,FreeSans,"Liberation Sans","Nimbus Sans L",sans-serif;
width: 100%;
margin: 0;
}
textarea {
font-size: 130%;
font-family: Arial,Helvetica,FreeSans,"Liberation Sans","Nimbus Sans L",sans-serif;
width: 100%;
height: 4cm;
margin: 0;
}
@media handheld and (orientation: portrait) {
input {
font-size: 120%;
}
textarea {
font-size: 120%;
height: 2cm;
} }
@media handheld and (orientation: landscape) {
textarea {
font-size: 120%;
height: 1.5cm;
} }
</style>

<div class="block">
	<form action="send" method="post">
		<p><input type="text" name="name" placeholder='Введите ваше имя'>
		<p><input type="email" name="email" placeholder='Введите ваш e-mail'>
		<p><textarea name="text" placeholder='Введите текст сообщения'></textarea>
		<p><input type="submit" value='Отправить' style='font-size: 150%;'>
	</form>
</div>

<?php require 'f.php' ?>