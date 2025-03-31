<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');

define('SITEPATH', __DIR__);
include_once '../core/framework/1-entry.php';

runFrameworkFile('site');
