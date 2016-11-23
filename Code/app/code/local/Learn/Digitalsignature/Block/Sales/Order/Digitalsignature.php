<?php
/**
 * Integrate Digital Signature
 *
 * @category   Digital Signature
 * @package    Learn_Digitalsignature
 * @author     Vijayakumar
 *
 */

class Learn_Digitalsignature_Block_Sales_Order_Digitalsignature extends Mage_Core_Block_Template
{
	/*
	 * Get the Digital Signature Value
	 */
	public function getDigitalSignatureValue() {
		return $this->getOrder()->getDigitalSignature();
	}

	/*
	 * Get the Digital Signature Name Value
	 */
	public function getDigitalSignatureNameValue() {
		return $this->getOrder()->getDigitalSignatureName();
	}

	public function getOrder() {
		return Mage::registry('current_order');
	}
}
