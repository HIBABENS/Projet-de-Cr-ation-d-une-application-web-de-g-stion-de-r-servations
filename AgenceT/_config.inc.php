<?php
date_default_timezone_set('UTC');
define('SMARTY_DIR', 'smarty-php/libs/');
require_once(SMARTY_DIR . 'Smarty.class.php');
$tpl = new Smarty();
$tpl->debugging = 0;
$tpl->template_dir = 'views/';
$tpl->compile_dir = 'tmp/';
$tpl->config_dir = 'smarty-php/configs/';
$tpl->left_delimiter = '{';
$tpl->right_delimiter = '}';
// Settings
ini_set('error_reporting', E_ALL^E_NOTICE);
ini_set('display_errors', 'off');

// Miscellaneous Constants
define('RET', ' '.chr(10).chr(13));
define('SERVER', 'localhost');
define('BASE', 'TABASEDEDONNEES');
define('USER', 'LOGIN');
define('PASS', 'PASSWRD');