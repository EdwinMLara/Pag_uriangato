<?php
	$file = @readfile($_GET['file']);
	if(!$file){
		header("Content-disposition: attachment; filename=$file");
		header("Content-type: application/octet-stream");
	}
?>