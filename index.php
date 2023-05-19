<?php
require_once 'vendor/autoload.php';
use Pj8912\PhpBardApi\Bard;
mb_internal_encoding('UTF-8');
mb_http_output('UTF-8');
header('Content-Type: text/html; charset=utf-8');
$_ENV['_BARD_API_KEY'] = "ENTER_YOUR_KEY";
$bard = new Bard();
while(True){
	try{
		echo "\n";
	  	echo "You are chatting with Google's BARD";
	  	echo "\n";
    	  	$input_text =readline("\u{1F464} You: ");
    		$result = $bard->get_answer($input_text);             
    		$content = $result["content"];
    		echo "\n";
    		print("\u{1F916} Bard: ".$content);
    		echo "\n";
    		for ($i = 0; $i < 100; $i++) {
	    	echo "*";
    		}
    		echo "\n\n";
  	}
	catch(Exception $e){
		echo "err ".$e->getMessage();
	}
}
?>
