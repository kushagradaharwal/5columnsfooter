<?php

class Clarion_PostcodeManagement_Model_Mysql4_PostcodeManagement extends Mage_Core_Model_Mysql4_Abstract
{
    public function _construct()
    {    
        // Note that the postcodemanagement_id refers to the key field in your database table.
        $this->_init('postcodemanagement/postcodemanagement', 'postcodemanagement_id');
    }
}