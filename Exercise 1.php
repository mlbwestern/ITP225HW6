<?php

$hash = readline("What would you like to turn into hash?");
$choice = readline("Would you like to use md5 or sha1?");

if ($choice == "md5"){
    echo md5($hash);
}
elseif($choice == "sha1"){
    echo sha1($hash);
}
else{
    echo "invalid hash type specified. Shutting down.";
}

?>