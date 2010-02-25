<?php
class Flash {
	
	
	
	static function addMessage($message) {
		$_SESSION['flash'] .= '<li class="error_li">'.$message.'</li>';
	}
		
	static function displayFlash() {
		if ($_SESSION['flash'] != ''){
			echo '<div id="flash_messages_container">'."\n";
			echo '<ul id="flash_message_list">'."\n";
			echo $_SESSION['flash']."\n";
			echo '</ul>'."\n";
			echo '</div>'."\n";
			$_SESSION['flash'] = '';
		}
	}
	
	
	
	
	
	
}
?>