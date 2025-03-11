<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');

define('SITEPATH', __DIR__);
include_once '../core/framework/1-entry.php';

if (variable('node') == 'index') {
	variable('sub-theme', 'splash');
}

function enrichThemeVars($vars, $what) {
	if ($what == 'header' && variable('node') == 'index') {
		$vars['optional-slider'] = getSnippet('home-slider');
	}

	return $vars;
}

runFrameworkFile('site');
