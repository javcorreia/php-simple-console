<?php

require __DIR__.'/../vendor/autoload.php';

use Symfony\Component\Console\Application;

function register_commands(Application $application): void
{
    $directory = __DIR__ . '/../src/Commands/';
    $iterator = new RecursiveIteratorIterator(
        new RecursiveDirectoryIterator($directory, FilesystemIterator::SKIP_DOTS)
    );

    foreach ($iterator as $file) {
        if ($file->isFile()) {
            $namespace = 'AppConsole\\'.str_replace('/', '\\', str_replace('src/', '', substr($file->getPath(), strpos($file->getPath(), 'src/')))).'\\';
            $command = $namespace.$file->getBaseName('.php');
            $application->add(new $command());
        }
    }

    unset($iterator, $directory);
}
