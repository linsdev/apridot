<?php $title = '— Портфолио';
require 'h.php' ?>
<style>
#list {
list-style: none;
padding: 0;
text-align: center;
}
#list li {
display: inline-block;
margin: 1mm;
background: url(imgs/monitor.png);
width: 571px;
height: 513px;
background-size: cover;
}
@-webkit-keyframes show { from { opacity: 0 } to { opacity: 1 } }
@-moz-keyframes show    { from { opacity: 0 } to { opacity: 1 } }
@-ms-keyframes show     { from { opacity: 0 } to { opacity: 1 } }
@-o-keyframes show      { from { opacity: 0 } to { opacity: 1 } }
@keyframes show         { from { opacity: 0 } to { opacity: 1 } }
#list li a {
display: block;
width: 100%;
height: 100%;
-webkit-animation: show 2s ease-in .5s;
   -moz-animation: show 2s ease-in .5s;
    -ms-animation: show 2s ease-in .5s;
     -o-animation: show 2s ease-in .5s;
        animation: show 2s ease-in .5s;
}
@media (orientation: portrait) and (max-width:720px) {
#list li {
width: 286px;
height: 257px;
}
}
</style>

<ul id='list'>
<?php
function i($url,$img,$title) {
echo "<li><a href='$url' target='_blank' style='
background: url($img) no-repeat 50% 14%;
background-size: 90.7% 63.4%;
' title='$title'></a>";
}
i('http://sevensecret.tk', 'imgs/sites/7secrets.jpg', 'Салон красоты &laquo;Seven Secrets&raquo;');
i('http://evilinc.tk', 'imgs/sites/evilinc.png', 'Форум &laquo;Evil Inc&raquo;');
?>
</ul>

<?php require 'f.php' ?>