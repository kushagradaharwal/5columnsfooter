<?php

class NationalTiles_Storeswitcher_Model_Status extends Varien_Object
{
    const STATUS_ENABLED	= 1;
    const STATUS_DISABLED	= 2;

    static public function getOptionArray()
    {
        return array(
            self::STATUS_ENABLED    => Mage::helper('storeswitcher')->__('Enabled'),
            self::STATUS_DISABLED   => Mage::helper('storeswitcher')->__('Disabled')
        );
    }
}