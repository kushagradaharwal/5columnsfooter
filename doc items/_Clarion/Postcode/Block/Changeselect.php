<?php
class Clarion_Postcode_Block_Changeselect extends Mage_Core_Block_Template
{
    protected function _construct()
    {
        parent::_construct();
        $this->setTemplate('postcode/changeselect.phtml');
    }
	
	public function _prepareLayout()
    {
		return parent::_prepareLayout();
    }
    
     public function getPostcode()     
     { 
        if (!$this->hasData('postcode')) {
            $this->setData('postcode', Mage::registry('postcode'));
        }
        return $this->getData('postcode');
        
    }
}