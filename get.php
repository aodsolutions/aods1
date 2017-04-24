
<?php
$file = 'chat.txt';
$searchfor = '';


header('Content-Type: text/plain');


$contents = file_get_contents($file);

$pattern = preg_quote($searchfor, '/');

$pattern = "/^.*$pattern.*\$/m";

if(preg_match_all($pattern, $contents, $matches)){
   echo "Found matches:\n";
   echo implode("\n", $matches[0]);
}
else{
   echo "No matches found";
}

?>