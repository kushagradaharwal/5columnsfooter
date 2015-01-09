<?php

class Sti_Googlemapcontact_Model_Layoutoptions
{

   
 public function toOptionArray(){
       return array(
                    array('value' => '1column', 'label'=>Mage::helper('googlemapcontact')->__('1column')),
                    array('value' => '2columns-left', 'label'=>Mage::helper('googlemapcontact')->__('2columns-left')),
                    array('value' => '2columns-right', 'label'=>Mage::helper('googlemapcontact')->__('2columns-right')),
                    array('value' => '3columns', 'label'=>Mage::helper('googlemapcontact')->__('3columns'))
        );   
    
 }
 
 }
