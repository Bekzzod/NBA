<?php
class NBACore
{
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
?>