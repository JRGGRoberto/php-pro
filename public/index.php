<?php

// echo phpinfo();
// exit;

require 'bootstrap.php';

try {
    router();
} catch (Exception $e) {
    var_dump($e->getMessage());
}
