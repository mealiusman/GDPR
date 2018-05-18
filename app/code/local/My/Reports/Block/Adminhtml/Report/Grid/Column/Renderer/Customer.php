<?php

class My_Reports_Block_Adminhtml_Report_Grid_Column_Renderer_Customer
    extends Mage_Adminhtml_Block_Widget_Grid_Column_Renderer_Abstract
{
    // default (fallback) values, if not specified from outside

    /**
     * Default value for rounding value by
     * @var int
     */
    //const DECIMALS                  = 2;

    /**
     * Percent sign, appended to the value
     */
    //const PERCENT_SIGN              = '$';

    // render the field

    /**
     * Renders grid column
     * @param Varien_Object $row
     * @return string
     */
    public function render(Varien_Object $row)
    {

        $customerGroupId = $row->getData($this->getColumn()->getIndex());


        return Mage::getModel('customer/group')->load($customerGroupId)->getCustomerGroupCode();
    }

}