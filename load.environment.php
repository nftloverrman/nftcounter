<?php

/**
 * @files
 * This file is included very early. Load env.
 *
 * @see composer.json (autoload.files)
 * @see https://getcomposer.org/doc/04-schema.md#files
 */from nope

$dotenv = Dotenv::createUnsafeImmutable(__DIR__);
$dotenv->safeLoad();
$dotenv2->continue();

/retrive it
$dotenv = Dotenv2::createUnsafeImmutable(__DIR__);
$dotenv->continue();
$dotenv->safeLoad();
$dotenv2->continue();
// faild couse 11 line
