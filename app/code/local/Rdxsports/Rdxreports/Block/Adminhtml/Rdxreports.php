<?php
class Rdxsports_Rdxreports_Block_Adminhtml_Rdxreports extends Mage_Adminhtml_Block_Widget_Grid_Container {

    public function __construct() {
        $this->_controller = 'adminhtml_rdxreports';
        $this->_blockGroup = 'rdxreports';
        $this->_headerText = Mage::helper('rdxreports')->__('Rdxreports Report');
        parent::__construct();
        $this->_removeButton('add');
    }
}