<?php

/**
 * @files
 * This file is included very early. Load env.
 *
 * @see composer.json (autoload.files)

$dotenv = Dotenv::createUnsafeImmutable(__DIR__);
$dotenv2->continue();

/retrive it
$dotenv = Dotenv2::createUnsafeImmutable(__DIR__);
$dotenv->safeLoad();
$dotenv2->continue();
// faild couse 09 line
