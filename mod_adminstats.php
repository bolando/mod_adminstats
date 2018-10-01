<?php
// blokowanie bezpośredniego uruchomienia
defined('_JEXEC') or die;
// włączenie klasy modelu z jej metodami
require_once dirname(__FILE__) . '/helper.php';
 
$artykuly = ModAdminStats::pokazArtykuly();
$menu = ModAdminStats::pokazMenu();
$users = ModAdminStats::pokazUzytkownikow();
$betterpreview = ModAdminStats::sprawdzBetterPreview();
$imagesizer = ModAdminStats::sprawdzImageSizer();
$jchoptimize = ModAdminStats::sprawdzJCHOptimize();
$tabele = ModAdminStats::sprawdzWielkoscTabel($params);
$notatka = ModAdminStats::pobierzNotatke();
$wersjaPHP = ModAdminStats::wersjaPHP();
if (class_exists('RSFirewallConfig')) {
	$config = @RSFirewallConfig::getInstance();
	$grade = $config->get('grade');
	$last = $config->get('system_check_last_run');
}

//przygotowanie do załadowania stylów
$doc =& JFactory::getDocument();

//stworzenie pliku JSON z danymi do pobrania przez system solmedia.pl
$dane = 'jsonCallback({"php":"' . $wersjaPHP . '", "artykuly":"'. $artykuly->a .'", "last":"'. $last .'", "users":"'. $users .'"})';
//echo "$wersjaPHP $artykuly $users";
$fp2 = fopen(dirname(__FILE__) . '/adminstats.json', "w");
if (!fputs($fp2, $dane)) {echo "błąd zapisu";}

//włączenie domyślnego layoutu
require JModuleHelper::getLayoutPath('mod_adminstats');
