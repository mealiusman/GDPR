<?php

class Rdxsports_Reportscustomer_Model_Observer {

    public function appendCustomSalesReportFilters($_observer)
    {
        $_block = $_observer->getBlock();
        if (!isset($_block)) {
            return $this;
        }

        /*
         * Get customer groups
         */
        /*$customerGroups = Mage::getModel('customer/group')->getCollection();
        //print_r($customerGroups);exit;

        foreach ($customerGroups as $Group) {

            $customerGroupsArray[$Group->getCustomerGroupId()] = $Group->getCustomerGroupCode();

        }*/

        //Mage_Sales_Block_Adminhtml_Report_Filter_Form_Order
        //Mage::log($_block->getType());
        if ($_block->getType() == 'sales/adminhtml_report_filter_form_order') {
            $_form = $_block->getForm();
            $fieldset = $_form->getElement('base_fieldset');

            /*$fieldset->addField('customer_group_id', 'select', array(
                'name'      => 'customer_group_id',
                'options'   => $customerGroupsArray,
                'label'     => Mage::helper('reports')->__('Customer Group'),
                'title'     => Mage::helper('reports')->__('Customer Group')
            ));*/




        }

        //$this->_addColumnToGrid($_block);

        //if ($_block->getType() == 'adminhtml/sales_order_grid') {
            /* @var $block Mage_Adminhtml_Block_Customer_Grid */
            //$this->_addColumnToGrid($_block, $customerGroupsArray);
        //}
    }

    protected function _addColumnToGrid($grid)
    {

        /*$groups = Mage::getResourceModel('customer/group_collection')
            ->addFieldToFilter('customer_group_id', array('gt' => 0))
            ->load()
            ->toOptionHash();
        $groups[0] = 'Guest';*/


        /* @var $block Mage_Adminhtml_Block_Customer_Grid */
        /*$grid->addColumn('customer_group_id', array(
            'header' => Mage::helper('customer')->__('Customer Group'),
            'index' => 'customer_group_id',
            //'filter_index' => 'customer_group_id',
            'type' => 'text',
            //'options' => $customerGroupsArray,
        ));*/
    }
}