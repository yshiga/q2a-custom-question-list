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

// page
// qa_register_plugin_module('page', 'qa-test-page.php', 'qa_test_page', 'Test Page');
// process
// qa_register_plugin_module('process', 'qa-test-process.php', 'qa_test_process', 'Test Process');
// layer
qa_register_plugin_layer('qa-custom-qlist-layer.php', 'Custom Question List Layer');
// event
// qa_register_plugin_module('event', 'qa-test-event.php', 'qa_test_event', 'Test Event');
// override
// qa_register_plugin_overrides('qa-test-overrides.php');
