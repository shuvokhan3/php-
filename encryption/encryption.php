<?php
$plainText = "Hello world";

//replace a with b ,b with c ,c with d;
for($i = 0 ; $i < strlen($plainText) ;$i++){
    $letter = $plainText[$i];
    $aschii = ord($letter);
    echo $aschii ." ";
    $newLetter = $aschii+1;
    $encryptedText .= $newLetter;
}
echo $encryptedText;