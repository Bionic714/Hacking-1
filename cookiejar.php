<?php
    $pageURL = 'http';
    
    if ($_SERVER["HTTPS"] == "on") {$pageURL .= "s";}
        $pageURL .= "://";
    if ($_SERVER["SERVER_PORT"] != "80") {
        $pageURL .= $_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"].$_SERVER["REQUEST_URI"];
    } else {
        $pageURL .= $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
    }

    $ref = $pageURL;
    echo $ref;
    
    $file = fopen("cookie.txt","a+");
	fputs($file,"$ref");
	fputs($file,"\n");
	fclose($file);
?>