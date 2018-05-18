<?php
class Rdx_GDPR_Helper_Data extends Mage_Core_Helper_Abstract
{
    const XML_PATH_GDPR_ENABLED = 'rdx_gdpr/configuration/enabled';
    const XML_PATH_INFORMATION_PAGE = 'rdx_gdpr/configuration/cms_page';
    const XML_PATH_GDPR_SUCCESSMESSAGE = 'rdx_gdpr/configuration/successmessage';

    public function isEnabled()
    {
        return (bool)Mage::getStoreConfig(self::XML_PATH_GDPR_ENABLED);
    }

    public function getSuccessMessage()
    {
        return Mage::getStoreConfig(self::XML_PATH_GDPR_SUCCESSMESSAGE);
    }

    public function getInformationPageIdentifier($store = null)
    {
        return Mage::getStoreConfig(self::XML_PATH_INFORMATION_PAGE, $store);
    }
}