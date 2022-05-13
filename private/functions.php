<?php 
	function url_for($current_url){
		if($current_url[0] != '/'){
			$current_url = '/' . $current_url ;
		}
		return PUBLIC_PATH . $current_url ;
	}

	function u($string=""){
		return urlencode($string) ;
	}

	function raw_u($string=""){
		return rawurlencode($string) ;
	}

	function h($string=""){
		return htmlspecialchars($string) ;
	}
?>