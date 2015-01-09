<?php

class Clarion_PostcodeManagement_Block_Adminhtml_PostcodeManagement_Edit_Tabs extends Mage_Adminhtml_Block_Widget_Tabs
{

  public function __construct()
  {
      parent::__construct();
      $this->setId('postcodemanagement_tabs');
      $this->setDestElementId('edit_form');
      $this->setTitle(Mage::helper('postcodemanagement')->__('Item Information'));
  }

  protected function _beforeToHtml()
  {
      $this->addTab('form_section', array(
          'label'     => Mage::helper('postcodemanagement')->__('Item Information'),
          'title'     => Mage::helper('postcodemanagement')->__('Item Information'),
          'content'   => $this->getLayout()->createBlock('postcodemanagement/adminhtml_postcodemanagement_edit_tab_form')->toHtml(),
      ));
     
      return parent::_beforeToHtml();
  }
}