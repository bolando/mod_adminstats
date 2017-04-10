<?php
class ModAdminStats
{
    /**
     * Retrieves the hello message
     *
     * @param   array  $params An object containing the module parameters
     *
     * @access public
     */    
    public static function pokazArtykuly()
    {
        
		$db = JFactory::getDbo();
		$db->setQuery("SELECT COUNT(*) as a, COUNT(DISTINCT catid) as b FROM #__content");
		$wynik = $db->loadObjectList();
		return $wynik[0];
    }
	public static function pokazMenu()
    {
        
		$db = JFactory::getDbo();
		$db->setQuery("SELECT COUNT(*) as a, COUNT(DISTINCT menutype) as b FROM #__menu WHERE menutype != '' AND client_id = 0");
		$wynik = $db->loadObjectList();
		return $wynik;
    }
	public static function pokazUzytkownikow()
    {
        
		$db = JFactory::getDbo();
		$db->setQuery("SELECT COUNT(*) as a FROM #__users");
		$wynik = $db->loadObjectList();
		return $wynik[0]->a;
    }
	public static function sprawdzBetterPreview()
    {
        
		$db = JFactory::getDbo();
		$db->setQuery("SELECT * FROM #__extensions WHERE name = 'plg_system_betterpreview'");
		$wynik = $db->loadObjectList();
		if ($wynik[0]->enabled == 1) {return "Tak";} 
		else {return "Nie";};
    }
	public static function sprawdzImageSizer()
    {
        
		$db = JFactory::getDbo();
		$db->setQuery("SELECT * FROM #__extensions WHERE name LIKE '%sizer%'");
		$wynik = $db->loadObjectList();
		if ($wynik[0]->enabled == 1) {return "Tak";} 
		else {return "Nie";};
    }
	public static function sprawdzJCHOptimize()
    {
        
		$db = JFactory::getDbo();
		$db->setQuery("SELECT * FROM #__extensions WHERE name = '%optimize'");
		$wynik = $db->loadObjectList();
		if ($wynik[0]->enabled == 1) {return "Tak";} 
		else {return "Nie";};
    }
	public static function sprawdzWielkoscTabel(&$params) {
        
		$db = JFactory::getDbo();
		$iletabel = $params->get('iletabel');
		//print_r($params);
		if (!$iletabel) $iletabel = 5;
		//$iletabel = 5;
		$db->setQuery("SELECT table_schema as `nazwa`, table_name AS tabela, round(((data_length + index_length) / 1024 / 1024), 2) `rozmiar` FROM information_schema.TABLES ORDER BY (data_length + index_length) DESC LIMIT $iletabel");
		$wynik = $db->loadObjectList();
		return $wynik;
    }
	public static function pobierzNotatke()
    {
		$db = JFactory::getDbo();
		$db->setQuery("SELECT note FROM #__modules WHERE module = 'mod_adminstats'");
		$wynik = $db->loadObjectList();
		return $wynik[0]->note;

	}
	
}
?>