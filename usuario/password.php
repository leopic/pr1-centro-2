<?php
/**
 * password.php
 */

$passwordDelUsuario = "123";

$primeraPasada = password_hash($passwordDelUsuario, PASSWORD_BCRYPT);
$segundaPasada = password_hash($passwordDelUsuario, PASSWORD_BCRYPT);
echo $primeraPasada . "\n";
echo $segundaPasada . "\n";

if (password_verify($passwordDelUsuario, $primeraPasada)) {
    echo "el password coincide";
} else {
    echo "el password no coincide";
}

echo "\n";
