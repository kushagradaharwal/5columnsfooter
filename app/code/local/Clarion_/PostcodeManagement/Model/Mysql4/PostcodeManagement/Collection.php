<?php

class Clarion_PostcodeManagement_Model_Mysql4_PostcodeManagement_Collection extends Mage_Core_Model_Mysql4_Collection_Abstract
{
    public function _construct()
    {
        parent::_construct();
        $this->_init('postcodemanagement/postcodemanagement');
    }
}