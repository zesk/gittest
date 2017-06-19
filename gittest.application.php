<?php

define("ZESK_APPLICATION_ROOT", __DIR__ . "/");

require_once __DIR__ . '/vendor/autoload.php';

$zesk = zesk\Kernel::singleton();
$app = Application::instance();

return $app->configure();