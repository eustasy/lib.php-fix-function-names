<?php

// Report all PHP errors (see changelog)
error_reporting(E_ALL);
// Report all PHP errors
error_reporting(-1);
// Same as error_reporting(E_ALL);
ini_set('error_reporting', E_ALL);

include 'generate.php';
include 'lib.php-fix-function-names.php';

echo 'END';
