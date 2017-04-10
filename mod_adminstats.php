<?php
// No direct access
defined('_JEXEC') or die;
// Include the syndicate functions only once
require_once dirname(__FILE__) . '/helper.php';
 
$artykuly = ModAdminStats::pokazArtykuly();
$menu = ModAdminStats::pokazMenu();
$users = ModAdminStats::pokazUzytkownikow();
$betterpreview = ModAdminStats::sprawdzBetterPreview();
$imagesizer = ModAdminStats::sprawdzImageSizer();
$jchoptimize = ModAdminStats::sprawdzJCHOptimize();
$tabele = ModAdminStats::sprawdzWielkoscTabel($params);
$notatka = ModAdminStats::pobierzNotatke();
$config = @RSFirewallConfig::getInstance();
$grade = $config->get('grade');
$last = $config->get('system_check_last_run');

require JModuleHelper::getLayoutPath('mod_adminstats');
