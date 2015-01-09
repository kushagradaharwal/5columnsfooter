<?php

class NationalTiles_Storeswitcher_Model_Mysql4_Storeswitcher extends Mage_Core_Model_Mysql4_Abstract
{
    public function _construct()
    {    
        // Note that the storeswitcher_id refers to the key field in your database table.
        $this->_init('storeswitcher/storeswitcher', 'storeswitcher_id');
    }
}