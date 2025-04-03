<?php

declare(strict_types = 1);

foreach(glob(__DIR__.DIRECTORY_SEPARATOR.'tests'.DIRECTORY_SEPARATOR.'*.php') as $file){
	echo 'Run : ',basename($file),PHP_EOL;
	include($file);
}

?>
