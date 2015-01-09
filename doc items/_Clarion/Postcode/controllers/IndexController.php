<?php
class Clarion_Postcode_IndexController extends Mage_Core_Controller_Front_Action
{
    public function indexAction()
    {
    	
		//$url ="http://192.168.1.63/orangedev/index.php/qld_wa";
		//echo $this->_redirectUrl($url);
		




		
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
	
	
	public function getPopupvalAction()
	
	{
	 //$port_melbornsql = "select postcode,storename from mgt_postcode where  store_id = '".$_POST['store_id']."";
	// echo $_POST['store_id'];die;
	 $this->getResponse()->setBody($this->getLayout()->createBlock('postcode/changeselect')
        ->setStoreId($_POST['store_id'])
        ->toHtml());
	}	
	 
//$store_port_melborndata = Mage::helper("postcode")->getconnection($port_melbornsql);
//$store_port_melborndata_array = array();
//foreach($store_port_melborndata as $store_port_melborndata_val)
//{
  //$store_port_melborndata_array[] =  $store_port_melborndata_val['postcode'];
//}
//echo $store_port_melborndata_array[0];
	
//}
}