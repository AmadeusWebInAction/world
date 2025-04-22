<?php
variables([
	'link-to-site-home' => true,
	'link-to-section-home' => true,
]);

function site_before_render() {
	if (DEFINED('NODEPATH'))
		variable('submenu-at-node', true);

	if (function_exists('node_before_render')) node_before_render();
}

function enrichThemeVars($vars, $what) {
	if ($what == 'header' && variable('node') == 'index') {
		$vars['optional-slider'] = getSnippet('home-slider');
	}

	if (function_exists('enrichNodeThemeVars'))
		$vars = enrichNodeThemeVars($vars, $what);

	return $vars;
}

