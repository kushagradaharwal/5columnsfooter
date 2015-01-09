<?php

class NationalTiles_Storeswitcher_Block_Adminhtml_Storeswitcher_Edit_Tabs extends Mage_Adminhtml_Block_Widget_Tabs
{

  public function __construct()
  {
      parent::__construct();
      $this->setId('storeswitcher_tabs');
      $this->setDestElementId('edit_form');
      $this->setTitle(Mage::helper('storeswitcher')->__('Item Information'));
  }

  protected function _beforeToHtml()
  {
      $this->addTab('form_section', array(
          'label'     => Mage::helper('storeswitcher')->__('Item Information'),
          'title'     => Mage::helper('storeswitcher')->__('Item Information'),
          'content'   => $this->getLayout()->createBlock('storeswitcher/adminhtml_storeswitcher_edit_tab_form')->toHtml(),
      ));
     
      return parent::_beforeToHtml();
  }
}