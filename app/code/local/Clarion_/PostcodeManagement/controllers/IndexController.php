<?php
class Clarion_PostcodeManagement_IndexController extends Mage_Core_Controller_Front_Action
{
    public function indexAction()
    {
    	
    	/*
    	 * Load an object by id 
    	 * Request looking like:
    	 * http://site.com/postcodemanagement?id=15 
    	 *  or
    	 * http://site.com/postcodemanagement/id/15 	
    	 */
    	/* 
		$postcodemanagement_id = $this->getRequest()->getParam('id');

  		if($postcodemanagement_id != null && $postcodemanagement_id != '')	{
			$postcodemanagement = Mage::getModel('postcodemanagement/postcodemanagement')->load($postcodemanagement_id)->getData();
		} else {
			$postcodemanagement = null;
		}	
		*/
		
		 /*
    	 * If no param we load a the last created item
    	 */ 
    	/*
    	if($postcodemanagement == null) {
			$resource = Mage::getSingleton('core/resource');
			$read= $resource->getConnection('core_read');
			$postcodemanagementTable = $resource->getTableName('postcodemanagement');
			
			$select = $read->select()
			   ->from($postcodemanagementTable,array('postcodemanagement_id','title','content','status'))
			   ->where('status',1)
			   ->order('created_time DESC') ;
			   
			$postcodemanagement = $read->fetchRow($select);
		}
		Mage::register('postcodemanagement', $postcodemanagement);
		*/

			
		$this->loadLayout();     
		$this->renderLayout();
    }
}