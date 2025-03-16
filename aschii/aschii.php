<?php
//convert character to aschii value
$charValue = "The name of our country is bangladesh";
$charValueLength = strlen($charValue);
for($i = 0 ; $i < $charValueLength ;$i++){
    $aschiiValue =  ord($charValue[$i]);
    echo $aschiiValue .",";
}
//convert acshii to char value
// 84,104,101,32,110,97,109,101,32,111,102,32,111,117,114,32,99,111,117,110,116,114,121,32,105,115,32,98,97,110,103,108,97,100,101,115,104
echo PHP_EOL;
$numberValue = array(84,104,101,32,110,97,109,101,32,111,102,32,111,117,114,32,99,111,117,110,116,114,121,32,105,115,32,98,97,110,103,108,97,100,101,115,104);

for($j = 0 ; $j < $charValueLength ;$j++){
    $value = chr($numberValue[$j]);
    echo $value;
}


