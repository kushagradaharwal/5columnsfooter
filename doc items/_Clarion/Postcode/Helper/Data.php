<?php

class Clarion_Postcode_Helper_Data extends Mage_Core_Helper_Abstract
{

    
    public function getstoresurl()
    {
        echo Mage::getBaseUrl( Mage_Core_Model_Store::URL_TYPE_WEB, true );
    }

   
    public function getconnection($sql)
    {
        
        return Mage::getSingleton('core/resource')->getConnection('core_read')->fetchAll($sql);
        
        
    }

    
    
    
    
    
}