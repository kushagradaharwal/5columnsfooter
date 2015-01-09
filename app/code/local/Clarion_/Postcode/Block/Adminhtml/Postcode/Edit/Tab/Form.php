<?php

class Clarion_Postcode_Block_Adminhtml_Postcode_Edit_Tab_Form extends Mage_Adminhtml_Block_Widget_Form
{
  protected function _prepareForm()
  {
      $form = new Varien_Data_Form();
      $this->setForm($form);
      $fieldset = $form->addFieldset('postcode_form', array('legend'=>Mage::helper('postcode')->__('Item information')));
     
      $fieldset->addField('store_id', 'text', array(
          'label'     => Mage::helper('postcode')->__('Store Id'),
          'required'  => false,
          'name'      => 'store_id',
          'readonly' => true,
      ));

    
     
      $fieldset->addField('postcode', 'textarea', array(
          'name'      => 'postcode',
          'label'     => Mage::helper('postcode')->__('Postcode'),
          'title'     => Mage::helper('postcode')->__('Postcode'),
          'style'     => 'width:700px; height:200px;',
          'wysiwyg'   => false,
          'required'  => false,
          'readonly' => false,
      ));
      
      $fieldset->addField('storename', 'text', array(
          'label'     => Mage::helper('postcode')->__('Store Name'),
          'required'  => false,
          'name'      => 'storename',
          'readonly' => true,
      ));

      
     
      if ( Mage::getSingleton('adminhtml/session')->getPostcodeData() )
      {
          $form->setValues(Mage::getSingleton('adminhtml/session')->getPostcodeData());
          Mage::getSingleton('adminhtml/session')->setPostcodeData(null);
      } elseif ( Mage::registry('postcode_data') ) {
          $form->setValues(Mage::registry('postcode_data')->getData());
      }
      return parent::_prepareForm();
  }
}