<?php

class NationalTiles_Storeswitcher_Block_Adminhtml_Storeswitcher_Edit extends Mage_Adminhtml_Block_Widget_Form_Container
{
    public function __construct()
    {
        parent::__construct();
                 
        $this->_objectId = 'id';
        $this->_blockGroup = 'storeswitcher';
        $this->_controller = 'adminhtml_storeswitcher';
        
        $this->_updateButton('save', 'label', Mage::helper('storeswitcher')->__('Save Item'));
        $this->_updateButton('delete', 'label', Mage::helper('storeswitcher')->__('Delete Item'));
		
        $this->_addButton('saveandcontinue', array(
            'label'     => Mage::helper('adminhtml')->__('Save And Continue Edit'),
            'onclick'   => 'saveAndContinueEdit()',
            'class'     => 'save',
        ), -100);

        $this->_formScripts[] = "
            function toggleEditor() {
                if (tinyMCE.getInstanceById('storeswitcher_content') == null) {
                    tinyMCE.execCommand('mceAddControl', false, 'storeswitcher_content');
                } else {
                    tinyMCE.execCommand('mceRemoveControl', false, 'storeswitcher_content');
                }
            }

            function saveAndContinueEdit(){
                editForm.submit($('edit_form').action+'back/edit/');
            }
        ";
    }

    public function getHeaderText()
    {
        if( Mage::registry('storeswitcher_data') && Mage::registry('storeswitcher_data')->getId() ) {
            return Mage::helper('storeswitcher')->__("Edit Item '%s'", $this->htmlEscape(Mage::registry('storeswitcher_data')->getTitle()));
        } else {
            return Mage::helper('storeswitcher')->__('Add Item');
        }
    }
}