<?php
/**
 * Integrate Digital Signature
 *
 * @category   Digital Signature
 * @package    Learn_Digitalsignature
 * @author     Vijayakumar
 *
 */

class Learn_Digitalsignature_Model_Observer extends Varien_Object
{
	public function checkoutTypeOnepageSaveOrder($observer) {
		$digital_sign = Mage::app()->getRequest()->getPost('output');
		$digital_sign = trim($digital_sign);
		$digital_sign = (string) $digital_sign;
		$observer->getOrder()->setData('digital_signature', $digital_sign);

		$digital_sign_name = Mage::app()->getRequest()->getPost('name');
		$digital_sign_name = trim($digital_sign_name);
		$digital_sign_name = (string) $digital_sign_name;		
		$observer->getOrder()->setData('digital_signature_name', $digital_sign_name);
		// Mage::log($digital_sign_name, null, 'signature.log');
		// $observer->getEvent()->getOrder()->setData('digital_signature', $digital_sign);		
    }
}