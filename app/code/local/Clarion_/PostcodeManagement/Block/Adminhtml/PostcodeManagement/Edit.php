<?php

class Clarion_PostcodeManagement_Block_Adminhtml_PostcodeManagement_Edit extends Mage_Adminhtml_Block_Widget_Form_Container
{
    public function __construct()
    {
        parent::__construct();
                 
        $this->_objectId = 'id';
        $this->_blockGroup = 'postcodemanagement';
        $this->_controller = 'adminhtml_postcodemanagement';
        
        $this->_updateButton('save', 'label', Mage::helper('postcodemanagement')->__('Save Item'));
        $this->_updateButton('delete', 'label', Mage::helper('postcodemanagement')->__('Delete Item'));
		
        $this->_addButton('saveandcontinue', array(
            'label'     => Mage::helper('adminhtml')->__('Save And Continue Edit'),
            'onclick'   => 'saveAndContinueEdit()',
            'class'     => 'save',
        ), -100);

        $this->_formScripts[] = "
            function toggleEditor() {
                if (tinyMCE.getInstanceById('postcodemanagement_content') == null) {
                    tinyMCE.execCommand('mceAddControl', false, 'postcodemanagement_content');
                } else {
                    tinyMCE.execCommand('mceRemoveControl', false, 'postcodemanagement_content');
                }
            }

            function saveAndContinueEdit(){
                editForm.submit($('edit_form').action+'back/edit/');
            }
        ";
    }

    public function getHeaderText()
    {
        if( Mage::registry('postcodemanagement_data') && Mage::registry('postcodemanagement_data')->getId() ) {
            return Mage::helper('postcodemanagement')->__("Edit Item '%s'", $this->htmlEscape(Mage::registry('postcodemanagement_data')->getTitle()));
        } else {
            return Mage::helper('postcodemanagement')->__('Add Item');
        }
    }
}