<?php
class NBACore
{
    static $pagesWithNoHeader = ['/', '/index.php'];
    static $__properties = ['title' => 'NBA'];
    static $__properties_dict = [
        'title' => '<!--##__TITLE__##-->',
        'css' => '<!--##__CSS__##-->',
        'js' => '<!--##__JS__##-->',
    ];

    static function SetProperty($property, $value)
    {
        NBACore::$__properties[$property] = $value;
    }
    static function FillProperty($property, $value)
    {
        if($property=='css')
        {
            $value = "<link href='{$value}' rel='stylesheet'>";
        }
        if($property=='js')
        {
            $value = "<script src='{$value}'></script>";
        }
        NBACore::$__properties[$property] .= $value;
    }

	static function ShowHeader()
	{
		include($_SERVER['DOCUMENT_ROOT'].'/header.php');
	}
	
	static function ShowFooter()
	{
		include($_SERVER['DOCUMENT_ROOT'].'/footer.php');
	}
	
	static function ShowRequestedPage($page)
	{
		NBACore::normalizeUri($page);
		if(file_exists($page))
			include($page);
		else
		{
			http_response_code(404);
			include($_SERVER['DOCUMENT_ROOT'] . '/404.php');
		}

	}
	
	static private function normalizeUri(&$uri)
	{
		$fileName = end(explode('/', $uri));
		if(!strpos($fileName, '.php'))
				$uri.="index.php";	
	}
}

function FillProperties($buffer)
{
    foreach(NBACore::$__properties_dict as $prop => $template)
    {
        $value = NBACore::$__properties[$prop];
        if($value && $template)
            $buffer = str_replace($template, $value, $buffer);
    }
    return $buffer;
}
?>