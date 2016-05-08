<?php require 'h.php' ?>
<style>
<?php require 'css/service-list.css' ?>
#motto {
font-size: 3.5em;
font-family: Verdana,"Bitstream Vera Sans","DejaVu Sans","Liberation Sans",Geneva,sans-serif;
color: white;
text-shadow: 0px 0px 10px rgba(0,0,0,.7);
background: url(imgs/apricots.jpg);
}
@media screen and (min-width: 1024px) and (max-resolution: 120dppx) {
#motto {
-webkit-transition: all 0.5s linear;
   -moz-transition: all 0.5s linear;
     -o-transition: all 0.5s linear;
        transition: all 0.5s linear;
-webkit-filter: grayscale(.5) contrast(1.2);
filter: grayscale(.5) contrast(1.2);
}
#motto:hover {
-webkit-filter: grayscale(0) contrast(1);
filter: grayscale(0) contrast(1);
}
}
@media (max-width: 800px) { #motto { font-size: 3.15em; } }
@media (max-width: 750px) { #motto { font-size: 3em; } }
@media (max-width: 700px) { #motto { font-size: 2.85em; } }
@media (max-width: 650px) { #motto { font-size: 2.7em; } }
@media (max-width: 600px) { #motto { font-size: 2.55em; } }
@media (max-width: 550px) { #motto { font-size: 2.4em; } }
@media (max-width: 500px) { #motto { font-size: 2.25em; } }

#motto a { color: #93c9ff; }
#motto a:hover {
color: white;
text-shadow: 0px 0px 8px white;
border-bottom: none;
}

#quizForm {
display: inline-block;
overflow: hidden;
width: 100%;
max-width: 400px;
height: 305px;
border: 0;
}
@media (max-width: 1023px) { #quizForm { height: 330px; } }
@media (max-width: 335px) {
#motto { font-size: 2em; }
#quizForm { height: 355px; }
}

#epigraph {
display: inline-block;
font-family: Georgia,"Bitstream Charter","Century Schoolbook L","Liberation Serif",Times,serif;
font-style: italic;
font-size: 1.3em;
text-align: justify;
margin-right: 1cm;
margin-top: 2mm;
}
@media (max-width: 780px) { #epigraph { font-size: 1.2em; } }
@media (max-width: 600px) { #epigraph { margin-right: 0; } }
@media (max-width: 545px) { #epigraph { font-size: 1.1em; } }
@media (max-width: 515px) { #epigraph { font-size: 1em; } }
</style>

<div class='block' id='motto'>
Ваши будущие клиенты ищут Вас в интернете, но пока не находят.<br>
Пора это <a href='contacts.php'>исправить</a>
</div>

<div class='block' id='b'>
	<div class='right'>
		<div id='epigraph'>
			Если бизнес Вы открыли, сообщите сразу нам.<br>
			Форму можете заполнить на странице &laquo;заказать&raquo;,<br>
			Или прямо без стесненья позвоните нам сейчас.<br>
			И быть можете спокойны, будет сайт Вам через&hellip;<br>
			Deadline устанавливается при личной встречи.
		</div>
	</div>
	<h1>Что мы Вам можем предложить?</h1>
	<div class='list' style='margin-top: 0mm'>
		<img src='imgs/developer.png'/>
		<h2>Разработку сайта</h2>
		Сайт компании &ndash; это визитная карточка бизнеса. Ваше представительство в интернете.<br>
		Опишите подробно свою сферу деятельности, и мы подберем для вас оптимальное решение.<br>
		Вы получите качественный современный сайт, созданный с нуля или на основе шаблонных решений.<br>
		Будет проведена его оптимизация для корректного отображения на любом устройстве с доступом в интернет.
		<p><a href='contacts.php'>Заказать</a>
	</div>
	<div class='list'>
		<img src='imgs/support.png'/>
		<h2>Техническую поддержку сайта</h2>
		Что бы Ваш сайт работал круглосуточно без сбоев, имел только актуальный контент,<br>
		нужно каждый день следить за его исправностью и наполнять нужной информацией.<br>
		Предоставьте это нам.
		<p><a href='contacts.php'>Заказать</a>
	</div>
</div>

<?php require 'f.php' ?>
