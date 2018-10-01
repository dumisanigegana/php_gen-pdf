<?php 

$url = $_POST["url"];
$contents = @file_get_contents($url);

$myfile = $_POST["out"].'.html';
$mypage = fopen("./sites/".$myfile, "w") or die("Unable to open file!");
fwrite($mypage, $contents);
fclose($mypage);
?>