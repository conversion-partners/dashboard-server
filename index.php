<?php

require 'Singleton.php';
include_once dirname(__FILE__).'/config.php';

if ($config->getDebug()) {
    error_reporting(E_ALL);
    ini_set('display_errors', '1');
}

include_once dirname(__FILE__).'/app.php';
