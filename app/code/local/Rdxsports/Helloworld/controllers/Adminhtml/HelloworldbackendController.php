<?php
class Rdxsports_Helloworld_Adminhtml_HelloworldbackendController extends Mage_Adminhtml_Controller_Action
{

	protected function _isAllowed()
	{
		//return Mage::getSingleton('admin/session')->isAllowed('helloworld/helloworldbackend');
		return true;
	}

	public function indexAction()
    {
       $this->loadLayout();
	   $this->_title($this->__("Hello World"));
	   $this->renderLayout();
    }
}