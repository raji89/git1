<?php
class Pw_Manageproducts_IndexController extends Mage_Core_Controller_Front_Action
{
    public function indexAction()
    {
		$this->loadLayout();     
		$this->renderLayout();
    }

    echo $this->getLayout()->createBlock('manageproducts/manageproducts')
->setBlockId('manageproducts')->toHtml() ;
}
?>