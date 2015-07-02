<?php
namespace UtilityPHP;

class AuthManager
{
	const CHARS_SALT="!%&/()=?^{}[]@#+-_*:,;";

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

    public static function validate_password($normal,$salt,$encrypted)
    {
        if(md5(md5($normal).md5($salt))==$encrypted)
        {
            return true;
        }
        else
        {
            return false;
        }
    }
}

?>