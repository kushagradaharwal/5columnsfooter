<?php

class Clarion_PostcodeManagement_Block_Adminhtml_PostcodeManagement_Edit_Tab_Form extends Mage_Adminhtml_Block_Widget_Form
{
  protected function _prepareForm()
  {
      $form = new Varien_Data_Form();
      $this->setForm($form);
      $fieldset = $form->addFieldset('postcodemanagement_form', array('legend'=>Mage::helper('postcodemanagement')->__('Item information')));
     
      $fieldset->addField('title', 'text', array(
          'label'     => Mage::helper('postcodemanagement')->__('Title'),
          'class'     => 'required-entry',
          'required'  => true,
          'name'      => 'title',
      ));

      $fieldset->addField('filename', 'file', array(
          'label'     => Mage::helper('postcodemanagement')->__('File'),
          'required'  => false,
          'name'      => 'filename',
	  ));
		
      $fieldset->addField('status', 'select', array(
          'label'     => Mage::helper('postcodemanagement')->__('Status'),
          'name'      => 'status',
          'values'    => array(
              array(
                  'value'     => 1,
                  'label'     => Mage::helper('postcodemanagement')->__('Enabled'),
              ),

              array(
                  'value'     => 2,
                  'label'     => Mage::helper('postcodemanagement')->__('Disabled'),
              ),
          ),
      ));
     
      $fieldset->addField('content', 'editor', array(
          'name'      => 'content',
          'label'     => Mage::helper('postcodemanagement')->__('Content'),
          'title'     => Mage::helper('postcodemanagement')->__('Content'),
          'style'     => 'width:700px; height:500px;',
          'wysiwyg'   => false,
          'required'  => true,
      ));
     
      if ( Mage::getSingleton('adminhtml/session')->getPostcodeManagementData() )
      {
          $form->setValues(Mage::getSingleton('adminhtml/session')->getPostcodeManagementData());
          Mage::getSingleton('adminhtml/session')->setPostcodeManagementData(null);
      } elseif ( Mage::registry('postcodemanagement_data') ) {
          $form->setValues(Mage::registry('postcodemanagement_data')->getData());
      }
      return parent::_prepareForm();
  }
}