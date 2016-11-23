<?php
/**
 * Integrate Digital Signature
 *
 * @category   Digital Signature
 * @package    Learn_Digitalsignature
 * @author     Vijayakumar
 *
 */

class Learn_Digitalsignature_Block_Checkout_Agreements extends Mage_Checkout_Block_Agreements
{
	protected function _toHtml() {
		if(Mage::helper('digitalsignature')->ds_enable()) {
        	$this->setTemplate('digitalsignature/checkout/agreements.phtml');
    	}
        return parent::_toHtml();
    }
}
