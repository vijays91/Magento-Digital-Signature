<?php
/**
 * Integrate Digital Signature
 *
 * @category   Digital Signature
 * @package    Learn_Digitalsignature
 * @author     Vijayakumar
 *
 */
 
class Learn_Digitalsignature_Helper_Data extends Mage_Core_Helper_Abstract
{

	const XML_PATH_DS_ACTIVE     	  = 'digitalsignature/settings/active';
	const XML_PATH_DS_REQUIRED   	  = 'digitalsignature/settings/required';
	const XML_PATH_DS_FRONTEND_NAME   = 'digitalsignature/settings/frontend_name';
	const XML_PATH_DS_FRONTEND_JQUERY = 'digitalsignature/settings/jquery_frontend';
	const XML_PATH_DS_BACKEND_JQUERY  = 'digitalsignature/settings/jquery_backend';

	private function conf($code, $store = null) {
        return Mage::getStoreConfig($code, $store);
    }

    public function ds_enable($store = null) {
		return $this->conf(self::XML_PATH_DS_ACTIVE, $store);
	}
	public function ds_frontend_jquery($store = null) {
		return $this->conf(self::XML_PATH_DS_FRONTEND_JQUERY, $store);
	}
	public function ds_backend_jquery($store = null) {
		return $this->conf(self::XML_PATH_DS_BACKEND_JQUERY, $store);
	}	
	public function ds_fronend_name($store = null) {
		return $this->conf(self::XML_PATH_DS_FRONTEND_NAME, $store);
	}

    /*
	 * Frontend jQuery Enable
     */
	public function jquery_frontend_enable($store = null) {
		if(self::ds_enable() == 1 && self::ds_frontend_jquery() == 1) {
			return "js/digital_signature/jquery.min.js";
		}
		return "js/digital_signature/jquery.conflict.js";
	}

    /*
	 * Backend jQuery Enable
     */
	public function jquery_backend_enable($store = null) {
		if(self::ds_enable() == 1 && self::ds_backend_jquery() == 1) {
			return "js/digital_signature/jquery.min.js";
		}
		return "js/digital_signature/jquery.conflict.js";
	}
}

