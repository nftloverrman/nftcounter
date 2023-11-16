<?php

/**
 * @files
 * This file is included very early. Load env.
 *
 * @see composer.json (autoload.files)
 * @see https://getcomposer.org/doc/04-schema.md#files

$dotenv = Dotenv::createUnsafeImmutable(__DIR__);
$dotenv2->continue();

/retrive it
$dotenv = Dotenv2::createUnsafeImmutable(__DIR__);
$dotenv->safeLoad();
$dotenv2->continue();
// faild couse 09 line
