<?php
variables([
	'link-to-site-home' => true,
	'link-to-section-home' => true,
	
]);

function enrichThemeVars($vars, $what) {
	if ($what == 'header' && variable('node') == 'index') {
		$vars['optional-slider'] = getSnippet('home-slider');
	}

	if (function_exists('enrichNodeThemeVars'))
		$vars = enrichNodeThemeVars($vars, $what);

	return $vars;
}

