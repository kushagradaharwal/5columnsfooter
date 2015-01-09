<?php

class Sti_Googlemapcontact_Model_Position
{

   
 public function toOptionArray(){
       return array(
                    array('value' => 'Upper', 'label'=>Mage::helper('googlemapcontact')->__('Google map above Contact Form')),
                    array('value' => 'Below', 'label'=>Mage::helper('googlemapcontact')->__('Google map below Contact Form')),
        );   
    
 }
 
 }
