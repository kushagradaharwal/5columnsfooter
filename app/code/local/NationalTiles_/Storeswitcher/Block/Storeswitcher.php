<?php
class NationalTiles_Storeswitcher_Block_Storeswitcher extends Mage_Core_Block_Template
{
	public function _prepareLayout()
    {
		return parent::_prepareLayout();
    }
    
     public function getStoreswitcher()     
     { 
        if (!$this->hasData('storeswitcher')) {
            $this->setData('storeswitcher', Mage::registry('storeswitcher'));
        }
        return $this->getData('storeswitcher');
        
    }
}