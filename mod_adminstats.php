<?php
// blokowanie bezpo�redniego uruchomienia
defined('_JEXEC') or die;
// w��czenie klasy modelu z jej metodami
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

//przygotowanie do za�adowania styl�w
$doc =& JFactory::getDocument();

//w��czenie domy�lnego layoutu
require JModuleHelper::getLayoutPath('mod_adminstats');
