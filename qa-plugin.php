<?php

/*
	Plugin Name: Custom Question List Plugin
	Plugin URI:
	Plugin Description: To shorten the title of the list of questions.
	Plugin Version: 1.0
	Plugin Date: 2016-07-21
	Plugin Author: 38qa.net
	Plugin Author URI: http://38qa.net/
	Plugin License: GPLv2
	Plugin Minimum Question2Answer Version: 1.7
	Plugin Update Check URI:
*/

if (!defined('QA_VERSION')) { // don't allow this page to be requested directly from browser
	header('Location: ../../');
	exit;
}

// layer
qa_register_plugin_layer('qa-custom-qlist-layer.php', 'Custom Question List Layer');
