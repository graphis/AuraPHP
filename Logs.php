<?php
namespace AuraPHP;

class Logs
{
	private function __construct() { }
	
	public static function set($log)
	{
		$file=fopen("logs.".explode(".",basename($_SERVER['PHP_SELF']))[0].".txt","a+");
		fwrite($file, "[".date("d/m/Y H:i:s")."] ".$log."\n");
		fclose($file);
	}
}

?>