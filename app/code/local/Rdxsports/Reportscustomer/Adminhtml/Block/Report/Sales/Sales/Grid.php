<?php
class Rdxsports_Reportscustomer_Block_Adminhtml_Report_Sales_Sales_Grid extends Mage_Adminhtml_Block_Report_Sales_Sales_Grid
{
    protected $_columnGroupBy = 'period';

    public function __construct()
    {print 'I M HEREre';exit;
        parent::__construct();




        $this->setCountTotals(true);
    }

}
?>