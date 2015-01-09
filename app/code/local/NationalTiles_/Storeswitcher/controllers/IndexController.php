<?php
class NationalTiles_Storeswitcher_IndexController extends Mage_Core_Controller_Front_Action
{
    public function indexAction()
    {
    	
    	/*
    	 * Load an object by id 
    	 * Request looking like:
    	 * http://site.com/storeswitcher?id=15 
    	 *  or
    	 * http://site.com/storeswitcher/id/15 	
    	 */
    	/* 
		$storeswitcher_id = $this->getRequest()->getParam('id');

  		if($storeswitcher_id != null && $storeswitcher_id != '')	{
			$storeswitcher = Mage::getModel('storeswitcher/storeswitcher')->load($storeswitcher_id)->getData();
		} else {
			$storeswitcher = null;
		}	
		*/
		
		 /*
    	 * If no param we load a the last created item
    	 */ 
    	/*
    	if($storeswitcher == null) {
			$resource = Mage::getSingleton('core/resource');
			$read= $resource->getConnection('core_read');
			$storeswitcherTable = $resource->getTableName('storeswitcher');
			
			$select = $read->select()
			   ->from($storeswitcherTable,array('storeswitcher_id','title','content','status'))
			   ->where('status',1)
			   ->order('created_time DESC') ;
			   
			$storeswitcher = $read->fetchRow($select);
		}
		Mage::register('storeswitcher', $storeswitcher);
		*/

			
		$this->loadLayout();     
		$this->renderLayout();
    }
}