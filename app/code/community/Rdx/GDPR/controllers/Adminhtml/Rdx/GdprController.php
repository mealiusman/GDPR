<?php
class Rdx_GDPR_Adminhtml_Rdx_GdprController extends Mage_Adminhtml_Controller_Action
{
    /**
     * Delete customer admin action
     */
    public function deleteCustomerAction() {
        if (!Mage::helper('rdx_gdpr')->isEnabled()) {
            return;
        }

        $customer = Mage::getModel('customer/customer')->load($this->getRequest()->getParam('id'));
        if (!$customer->getId()) {
            Mage::getSingleton('core/session')->addError('No customer ID provided.');
            $this->_redirect('adminhtml/dashboard/index');
            return;
        }

        Mage::getModel('rdx_gdpr/accountdeletion')->anonymiseCustomer($customer);

        $this->_redirect('adminhtml/customer/index');
        Mage::getSingleton('core/session')->addSuccess('The account has been successfully deleted, and all orders have been anonymised.');
        return;
    }

    /**
     * Send anonymise email admin action
     */
    public function sendAnonymiseEmailAction() {
        if (!Mage::helper('rdx_gdpr')->isEnabled()) {
            return;
        }

        $customer = Mage::getModel('customer/customer')->load($this->getRequest()->getParam('id'));
        if (!$customer->getId()) {
            Mage::getSingleton('core/session')->addError('No customer ID provided.');
            $this->_redirect('*');
            return;
        }

        /** @var Mage_Core_Model_Email_Template $email */
        $email = Mage::getModel('core/email_template')->loadDefault('rdx_gdpr_confirm');
        if ($email->getId()) {
            $email->sendTransactional($email->getId(), 'sales', $customer->getEmail(), $customer->getName(), array(
                'email' => $customer->getEmail(),
                'name' => $customer->getName(),
                'link' => Mage::getUrl('rdx_gdpr/customer/deleteaccount')
            ), 0);
        }

        $this->_redirect('adminhtml/customer/edit', array('id' => $customer->getId()));
        Mage::getSingleton('core/session')->addSuccess('Anonymisation email successfully sent.');
    }

    /**
     * Check the permission to run it
     *
     * @return boolean
     */
    protected function _isAllowed()
    {
        return Mage::getSingleton('admin/session')->isAllowed('rdx_gdpr');
    }
}