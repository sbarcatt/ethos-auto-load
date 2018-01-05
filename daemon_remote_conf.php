<?php

//YOUR REMOTE CONF URL
$your_config_url="https://configmaker.com/my/VirtualEarnestWhiteHagfish.txt";

//TIME TO CHECK - IN SECONDS
$time_check=5;

//ROUTE TO SAVE LENGTH
$LOCAL_CONF = '/home/ethos/length.txt';


while (TRUE) {
	check_file($LOCAL_CONF,retrieve_server_config($your_config_url));
	sleep($time_check);
}



function retrieve_server_config($url){
	$text = file_get_contents($url);
	$size = strlen($text);
	return $size;
}



function check_file($file,$size){
	//Use the function is_file to check if the file already exists or not.
	if(!is_file($file)){
		file_put_contents($file, $size);
	}
	else{
		if(read_file($file)!=$size)
		{
			file_put_contents($file, $size);
			echo "Remote Conf Change\n";
			echo "Execute command putconf && minestop\n";
			shell_exec('putconf && minestop');
			echo "Execute command r\n";
			shell_exec('r');
		}

	}
}


function read_file($file){
	$myfile = fopen($file, "r") or die("Unable to open file!");
	return fread($myfile,filesize($file));
	fclose($myfile);
}


?>