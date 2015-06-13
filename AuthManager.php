<?php
namespace Lukasss93PHP;

class AuthManager
{
	const CHARS_SALT="\!%&/()=?^{}[]@#+-_*:,;";
	
	private function __construct() { }
	
	public static function create_salt()
	{
		$array_chars=str_split(self::CHARS_SALT);
		$limit=5;
		
		$output=array();
		
		for($i=0; $i<$limit;$i++)
		{
			$output[]=$array_chars[rand(0,count($array_chars)-1)];
		}
		
		return implode($output);
	}
	
	public static function create_token($password)
	{
		return md5(md5($password).md5(time()).md5(rand(0,1000)));
	}
	
	public static function create_password($password,$salt)
	{
		return md5(md5($password).md5($salt));
	}
}

?>