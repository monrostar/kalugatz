<?php

require __DIR__ . '/vendor/autoload.php';

use App\Core\Main;

try {
    new Main();
} catch (\Exception $e) {
    echo $e->getMessage();
    exit(1);
}
