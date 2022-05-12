<?php 
	function url_for($current_url){
		if($current_url[0] != '/'){
			$current_url = '/' . $current_url ;
		}
		return PUBLIC_PATH . $current_url ;
	}

?>