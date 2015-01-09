<?php
class Clarion_PostcodeManagement_Block_Adminhtml_PostcodeManagement extends Mage_Adminhtml_Block_Widget_Grid_Container
{
  public function __construct()
  {
    $this->_controller = 'adminhtml_postcodemanagement';
    $this->_blockGroup = 'postcodemanagement';
    $this->_headerText = Mage::helper('postcodemanagement')->__('Item Manager');
    $this->_addButtonLabel = Mage::helper('postcodemanagement')->__('Add Item');
    parent::__construct();
  }
}