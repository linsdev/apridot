<?php $title = '— Ошибка';
echo '<meta name="robots" content="nofollow">';
require 'h.php';
?>

<style>
@keyframes anim {
0%   { transform: scale3d(0.1, 0.1, 1); opacity: 0; }
45%  { transform: scale3d(1.07, 1.07, 1); opacity: 1; }
70%  { transform: scale3d(0.95, 0.95, 1) }
100% { transform: scale3d(1, 1, 1) }
}
@-webkit-keyframes anim {
0%   { -webkit-transform: scale3d(0.1, 0.1, 1); opacity: 0; }
45%  { -webkit-transform: scale3d(1.07, 1.07, 1); opacity: 1; }
70%  { -webkit-transform: scale3d(0.95, 0.95, 1) }
100% { -webkit-transform: scale3d(1, 1, 1) }
}
@-moz-keyframes anim {
0%   { -moz-transform: scale(0.1, 0.1); opacity: 0; }
45%  { -moz-transform: scale(1.07, 1.07); opacity: 1; }
70%  { -moz-transform: scale(0.95, 0.95) }
100% { -moz-transform: scale(1, 1) }
}
#er {
background: transparent;
text-align: left;
margin: 5mm 5% 5mm 5%;
max-width: 30cm;
animation-name: anim;
-webkit-animation-name: anim;
   -moz-animation-name: anim;
        animation-duration: 0.8s;
-webkit-animation-duration: .8s;
   -moz-animation-duration: 800ms;
}
h1 {
color: red;
}
</style>

<?php
// $id = intval(substr($_SERVER['REQUEST_URI'], -3)); // Три последних символа в запросе

$id = intval($_GET['c']);
if ($id < 400 || $id > 414 || $id == 402 || $id == 407 || $id == 409 || $id > 410 && $id < 414) $id = 0;
if (substr($_SERVER['REQUEST_URI'], -5)=='e.php') $id = 404;

// ассоциативный массив кодов и описаний
$a[400] = 'Неправильный запрос';
$a[401] = 'Требуется авторизация';
$a[403] = 'Доступ запрещен';
$a[404] = 'Файл не найден';
$a[405] = 'Недопустимый метод';
$a[406] = 'Непреемлимый запрос';
$a[408] = 'Время ожидания сервера истекло';
$a[410] = 'Файл был удалён';
$a[414] = 'Запрос слишком длинный';
$a[0]   = 'сервера';

// эта переменная содержит тело сообщения
$t = '<p>Запрошенный Вами URL: <b>http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'] . '</b>
<p>Ваш IP: <b>' . $_SERVER['REMOTE_ADDR'] . '</b>
<p>Ваш браузер: <b>' . $_SERVER['HTTP_USER_AGENT'] . '</b>';

if (isset($HTTP_REFERER)) $t .= '<p>Вы пришли со страницы: <b>' . $HTTP_REFERER . '</b>';
if (isset($HTTP_X_FORWARDER_FOR)) $t .= '<p>Ваш IP через прокси: <b>' . $HTTP_X_FORWARDER_FOR . '</b>';

$c = 'Ошибка ';
if ($id!=0) $c .= $id . ' — ';

echo '<div class="block"><div id="er"><h1 align="center">', $c,
	'<i>', $a[$id], '</i></h1><p>', $t, '</p></div></div>';

require 'f.php';