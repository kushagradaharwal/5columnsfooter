<?php

class NationalTiles_Storeswitcher_Block_Adminhtml_Storeswitcher_Edit_Tab_Form extends Mage_Adminhtml_Block_Widget_Form
{
  protected function _prepareForm()
  {
      $form = new Varien_Data_Form();
      $this->setForm($form);
      $fieldset = $form->addFieldset('storeswitcher_form', array('legend'=>Mage::helper('storeswitcher')->__('Item information')));
     
      $fieldset->addField('title', 'text', array(
          'label'     => Mage::helper('storeswitcher')->__('Title'),
          'class'     => 'required-entry',
          'required'  => true,
          'name'      => 'title',
      ));

      $fieldset->addField('filename', 'file', array(
          'label'     => Mage::helper('storeswitcher')->__('File'),
          'required'  => false,
          'name'      => 'filename',
	  ));
		
      $fieldset->addField('status', 'select', array(
          'label'     => Mage::helper('storeswitcher')->__('Status'),
          'name'      => 'status',
          'values'    => array(
              array(
                  'value'     => 1,
                  'label'     => Mage::helper('storeswitcher')->__('Enabled'),
              ),

              array(
                  'value'     => 2,
                  'label'     => Mage::helper('storeswitcher')->__('Disabled'),
              ),
          ),
      ));
     
      $fieldset->addField('content', 'editor', array(
          'name'      => 'content',
          'label'     => Mage::helper('storeswitcher')->__('Content'),
          'title'     => Mage::helper('storeswitcher')->__('Content'),
          'style'     => 'width:700px; height:500px;',
          'wysiwyg'   => false,
          'required'  => true,
      ));
     
      if ( Mage::getSingleton('adminhtml/session')->getStoreswitcherData() )
      {
          $form->setValues(Mage::getSingleton('adminhtml/session')->getStoreswitcherData());
          Mage::getSingleton('adminhtml/session')->setStoreswitcherData(null);
      } elseif ( Mage::registry('storeswitcher_data') ) {
          $form->setValues(Mage::registry('storeswitcher_data')->getData());
      }
      return parent::_prepareForm();
  }
}