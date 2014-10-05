<? 
	
	define ('FAKE_INDEX_MODE', 1);
    require "lazyload.php";

	function get_url_path ($add_slash = TRUE)
	{
		$url = $_SERVER['REQUEST_URI'];
		$purl = parse_url($url);
		$path = $purl['path'];
		if ($add_slash && substr($path, -1) !== '/') $path .= '/';
		return $path;
	}

	function is_index ()
	{
		return (get_url_path() == '/');
	}

    if(isset($_GET["lazy"]) && $_GET["lazy"] !== ""){
        header('Content-Type: text/html; charset=windows-1251');
        echo getObjects($_GET["lazy"]);
    } elseif (FAKE_INDEX_MODE && is_index()) {
		require 'index-template.php';
	} else {
		require 'system/core.php'; e2 ();
	}
	
?>
