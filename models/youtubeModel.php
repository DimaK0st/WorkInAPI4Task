<?php

if($_POST['urlVideo']!="") {
    require('../views/youtubePage.php');
    $ytarray = explode("/", $_POST['urlVideo']);
    $ytendstring = end($ytarray);
    $ytendarray = explode("?v=", $ytendstring);
    $ytendstring = end($ytendarray);
    $ytendarray = explode("&", $ytendstring);
    $ytcode = $ytendarray[0];
    echo "<div class='frame'><iframe width='1280' height='720' src=\"http://www.youtube.com/embed/$ytcode\" frameborder=\"0\" allowfullscreen></iframe></div>";}
else{
    echo "Введена не корректная ссылка";
    require('../views/youtubePage.php');
}