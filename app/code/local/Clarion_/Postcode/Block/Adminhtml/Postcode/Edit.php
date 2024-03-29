<?php

class Clarion_Postcode_Block_Adminhtml_Postcode_Edit extends Mage_Adminhtml_Block_Widget_Form_Container
{
    public function __construct()
    {
        parent::__construct();
                 
        $this->_objectId = 'id';
        $this->_blockGroup = 'postcode';
        $this->_controller = 'adminhtml_postcode';
        
        $this->_updateButton('save', 'label', Mage::helper('postcode')->__('Save Item'));
        $this->_updateButton('delete', 'label', Mage::helper('postcode')->__('Delete Item'));
		
        $this->_addButton('saveandcontinue', array(
            'label'     => Mage::helper('adminhtml')->__('Save And Continue Edit'),
            'onclick'   => 'saveAndContinueEdit()',
            'class'     => 'save',
        ), -100);

        $this->_formScripts[] = "
            function toggleEditor() {
                if (tinyMCE.getInstanceById('postcode_content') == null) {
                    tinyMCE.execCommand('mceAddControl', false, 'postcode_content');
                } else {
                    tinyMCE.execCommand('mceRemoveControl', false, 'postcode_content');
                }
            }

            function saveAndContinueEdit(){
                editForm.submit($('edit_form').action+'back/edit/');
            }
        ";
    }

    public function getHeaderText()
    {
        if( Mage::registry('postcode_data') && Mage::registry('postcode_data')->getId() ) {
            return Mage::helper('postcode')->__("Edit Item '%s'", $this->htmlEscape(Mage::registry('postcode_data')->getTitle()));
        } else {
            return Mage::helper('postcode')->__('Add Item');
        }
    }
}