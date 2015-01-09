<?php

class Clarion_PostcodeManagement_Model_PostcodeManagement extends Mage_Core_Model_Abstract
{
    public function _construct()
    {
        parent::_construct();
        $this->_init('postcodemanagement/postcodemanagement');
    }
}