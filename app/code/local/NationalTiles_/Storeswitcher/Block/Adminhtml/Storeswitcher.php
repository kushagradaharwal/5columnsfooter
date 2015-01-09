<?php
class NationalTiles_Storeswitcher_Block_Adminhtml_Storeswitcher extends Mage_Adminhtml_Block_Widget_Grid_Container
{
  public function __construct()
  {
    $this->_controller = 'adminhtml_storeswitcher';
    $this->_blockGroup = 'storeswitcher';
    $this->_headerText = Mage::helper('storeswitcher')->__('Item Manager');
    $this->_addButtonLabel = Mage::helper('storeswitcher')->__('Add Item');
    parent::__construct();
  }
}