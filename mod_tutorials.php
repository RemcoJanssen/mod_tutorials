<?php
defined('_JEXEC') or die;
require_once __DIR__ . '/helper.php';
$list = mod_tutorialsHelper::getList($params);
$moduleclass_sfx = htmlspecialchars($params->get('moduleclass_sfx'));
require JModuleHelper::getLayoutPath('mod_tutorials',$params->get('layout', 'default'));

