<?php
require_once 'vendor/autoload.php';use Pj8912\PhpBardApi\Bard;
$_ENV['_BARD_API_KEY'] = "ENTER_YOUR_KEY";
$bard = new Bard();
while(True){
  try{
    echo "\n";
    $input_text =readline("\U0001F464You: ");
    $result = $bard->get_answer($input_text);             
    $content = $result["content"];
    print("\U0001F916 Bard: ".$content."\n");
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
