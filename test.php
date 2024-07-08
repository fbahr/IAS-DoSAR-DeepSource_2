<?php

@eval("echo \"This is a basic test!\", PHP_EOL;");
$str = base64_encode("phpinfo();");
$md5 = md5($str);
if ($md5) {
	@eval(base64_decode($str));
}
