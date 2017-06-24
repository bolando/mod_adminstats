<?php
// blokowanie bezpoœredniego uruchomienia
defined('_JEXEC') or die;
// w³¹czenie klasy modelu z jej metodami
require_once dirname(__FILE__) . '/helper.php';
 
$artykuly = ModAdminStats::pokazArtykuly();
$menu = ModAdminStats::pokazMenu();
$users = ModAdminStats::pokazUzytkownikow();
$betterpreview = ModAdminStats::sprawdzBetterPreview();
$imagesizer = ModAdminStats::sprawdzImageSizer();
$jchoptimize = ModAdminStats::sprawdzJCHOptimize();
$tabele = ModAdminStats::sprawdzWielkoscTabel($params);
$notatka = ModAdminStats::pobierzNotatke();
if (class_exists('RSFirewallConfig')) {
	$config = @RSFirewallConfig::getInstance();
	$grade = $config->get('grade');
	$last = $config->get('system_check_last_run');
}

//przygotowanie do za³adowania stylów
$doc =& JFactory::getDocument();

//w³¹czenie domyœlnego layoutu
require JModuleHelper::getLayoutPath('mod_adminstats');
