<?php

/* #1: PHPDeobfuscator eval output */ 
    echo "This is a basic test!", "\n";
/* END:#1 */
$str = base64_encode("phpinfo();");
$md5 = md5($str);
if ($md5) {
    @eval(base64_decode($str));
}
