<?php

$pw = password_hash('nozomi', PASSWORD_DEFAULT);
echo $pw;
echo "<br>";
var_dump(password_verify('nozomi',$pw));
