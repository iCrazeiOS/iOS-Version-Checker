<?php
if(stripos($_SERVER['HTTP_USER_AGENT'],"iPod") === false && stripos($_SERVER['HTTP_USER_AGENT'],"iPhone") === false && stripos($_SERVER['HTTP_USER_AGENT'],"iPad") === false){
	$version = 'Not on iOS';
} else {
	$version = preg_replace("/(.*) OS ([0-9]*)_(.*)/","$2", $_SERVER['HTTP_USER_AGENT']);
}
echo $version;
?>