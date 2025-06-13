<?php

use Symfony\Component\Console\Application;

require __DIR__.'/../vendor/autoload.php';

// load .env vars
$dotenv = Dotenv\Dotenv::createUnsafeImmutable(__DIR__.'/..');
$dotenv->load();

// load core helpers
require __DIR__.'/../src/Helpers/helpers.php';

function set_application_info(Application $application): void
{
    $application->setName(env('APP_NAME', 'PHP Console Tool'));
    $application->setVersion(env('APP_VERSION', '1.0.0'));
}
