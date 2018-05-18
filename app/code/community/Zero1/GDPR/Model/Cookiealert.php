<?php
class Zero1_GDPR_Model_Cookiealert extends Mage_Core_Block_Template
{
    public function getCmsPageUrl()
    {
        return Mage::helper('cms/page')->getPageUrl(
            Mage::getModel('cms/page')->load(Mage::helper('zero1_gdpr')->getInformationPageIdentifier(), 'identifier')->getId()
        );
    }
}