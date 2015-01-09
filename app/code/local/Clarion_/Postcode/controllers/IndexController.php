<?php
class Clarion_Postcode_IndexController extends Mage_Core_Controller_Front_Action
{
    public function indexAction()
    {
    	
    	/*
    	 * Load an object by id 
    	 * Request looking like:
    	 * http://site.com/postcode?id=15 
    	 *  or
    	 * http://site.com/postcode/id/15 	
    	 */
    	/* 
		$postcode_id = $this->getRequest()->getParam('id');

  		if($postcode_id != null && $postcode_id != '')	{
			$postcode = Mage::getModel('postcode/postcode')->load($postcode_id)->getData();
		} else {
			$postcode = null;
		}	
		*/
		
		 /*
    	 * If no param we load a the last created item
    	 */ 
    	/*
    	if($postcode == null) {
			$resource = Mage::getSingleton('core/resource');
			$read= $resource->getConnection('core_read');
			$postcodeTable = $resource->getTableName('postcode');
			
			$select = $read->select()
			   ->from($postcodeTable,array('postcode_id','title','content','status'))
			   ->where('status',1)
			   ->order('created_time DESC') ;
			   
			$postcode = $read->fetchRow($select);
		}
		Mage::register('postcode', $postcode);
		*/

			
		$this->loadLayout();     
		$this->renderLayout();
    }
}