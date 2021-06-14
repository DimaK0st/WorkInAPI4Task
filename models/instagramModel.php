<?php
$content = file_get_contents('https://www.instagram.com/explore/tags/Даманск/');
$pos = strpos($content, 'var file = ');/*
$content = substr($content, $pos);
$pos = strpos($content, ';');
$content = substr($content, 12, $pos);*/
echo $content;
