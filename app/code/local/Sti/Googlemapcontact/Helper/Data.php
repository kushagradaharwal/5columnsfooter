<?php

class Sti_Googlemapcontact_Helper_Data extends Mage_Core_Helper_Abstract
{

    public function EnableDisable()
    {
       return Mage::getStoreConfig("googlemapcontact/googlemapcontact/contactsgooglemapyesorno");  
    }
    
    public function getAddress()
    {
       return Mage::getStoreConfig("googlemapcontact/googlemapcontact/contactsgooglemapaddress"); 
    }
    
    public function getmapheight()
    {
       return Mage::getStoreConfig("googlemapcontact/googlemapcontact/contactsgooglemapheight"); 
    }
    
    public function getmapimage()
    {
       return Mage::getStoreConfig("googlemapcontact/googlemapcontact/contactsgooglemapmarkerimg"); 
    }
    public function getmapapi()
    {
       return Mage::getStoreConfig("googlemapcontact/googlemapcontact/contactsgooglemapapikey"); 
    }
    public function getlayout()
    {
       return Mage::getStoreConfig("googlemapcontact/googlemapcontact/contactsgooglemappagelayout"); 
    }
    
    public function getdefaultstoreaddress()
    {
       return Mage::getStoreConfig("general/store_information/address"); 
    }
    
    public function getmodulenabledisablevalue()
    {
       return Mage::getStoreConfig("googlemapcontact/googlemapcontact/enable"); 
    }

    public function getmapbordercolor()
    {
	  return Mage::getStoreConfig("googlemapcontact/googlemapcontact/contactsgooglemapdesign"); 
	}
    
	public function getmapborderwidth()
    {
	  return Mage::getStoreConfig("googlemapcontact/googlemapcontact/contactsgooglemapborderwidth"); 
	}
	
	public function getmapposition()
    {
	  return Mage::getStoreConfig("googlemapcontact/googlemapcontact/contactsgooglemapmapposition"); 
	}
	
	public function getmapborderenable()
    {
	  return Mage::getStoreConfig("googlemapcontact/googlemapcontact/enableborder"); 
	}
}