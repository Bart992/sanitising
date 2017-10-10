<?php


if(isset($_REQUEST["url"]));
{
	$url = filter_var($_REQUEST["url"], FILTER_SANITIZE_ENCODED);
	echo "url: ".$url."<br>";
}
?>
