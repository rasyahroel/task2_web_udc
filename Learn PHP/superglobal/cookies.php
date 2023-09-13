<?php
// setcookie(name, value, expiration, path, domain, secure, httponly);
setcookie("user", "Rasya", time() + 86400 * 30);
print_r($_COOKIE);
