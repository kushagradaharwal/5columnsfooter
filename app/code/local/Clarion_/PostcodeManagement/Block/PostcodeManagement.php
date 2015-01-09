<?php
class Clarion_PostcodeManagement_Block_PostcodeManagement extends Mage_Core_Block_Template
{
	public function _prepareLayout()
    {
		return parent::_prepareLayout();
    }
    
     public function getPostcodeManagement()     
     { 
        if (!$this->hasData('postcodemanagement')) {
            $this->setData('postcodemanagement', Mage::registry('postcodemanagement'));
        }
        return $this->getData('postcodemanagement');
        
    }
}