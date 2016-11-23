<?php
/**
 * Integrate Digital Signature
 *
 * @category   Digital Signature
 * @package    Learn_Digitalsignature
 * @author     Vijayakumar
 *
 */

class Learn_Digitalsignature_Block_Adminhtml_Digitalsignature_Edit_Form extends Mage_Adminhtml_Block_Widget_Form
{

	/*
	 *
	 * Form generation.
	 *
	 */
	protected function _prepareForm() {
		$viewForm = new Varien_Data_Form(
			array(
            	'id' => 'view_form',
        	)
		);		
		$viewForm->setUseContainer(true);		
        $this->setForm($viewForm);		
		$fieldset = $viewForm->addFieldset('digi_sign_view_form', array(
            'legend'	=> Mage::helper('digitalsignature')->__('View Digital Signature'),
            'class'		=> 'fieldset-wide',
            )
        );		
		$value =   Mage::registry('digi_sign_order_data')->getData();
        $url = Mage::helper('adminhtml')->getUrl("adminhtml/sales_order/view", array('order_id'=> $value['entity_id']));
        $fieldset->addField('increment_id', 'note', array(
            'label'     => Mage::helper('digitalsignature')->__('Order Id'),
            'text'      => '<a href="'. $url .'">'. $value['increment_id']. '</a>',
        ));		
		$fieldset->addField('Digital Signature Name', 'note', array(
			'label'     => Mage::helper('digitalsignature')->__('Signature'),
			'text'      => '<div id="digital_sign" style="width: 365px;">
								<div id="sign">
									<div class="typed grid_sign">'. $value['digital_signature_name']. '</div>
								</div>
							</div>
							<br />
							',
		));
		$fieldset->addField('Digital Signature', 'note', array(
			'label'     => Mage::helper('digitalsignature')->__('Digital Signature'),
			'text'      => '<div id="digi_sign" style="width: 365px;">
								<div class="sigPad signed digiSignViewform">
									<canvas class="pad" width="360" height="55"></canvas>
								</div>
							</div>
							<br />
							',
		));
		if ( Mage::getSingleton('adminhtml/session')->getdigiSignOrderData() ) {
		 	$viewForm->setValues(Mage::getSingleton('adminhtml/session')->getdigiSignOrderData());
			Mage::getSingleton('adminhtml/session')->getdigiSignOrderData(null);
		} elseif ( Mage::registry('digi_sign_order_data') ) {
			$viewForm->setValues(Mage::registry('digi_sign_order_data')->getData());
		}
		return parent::_prepareForm();
	}

	/*
	 *
	 * View (PHTML) function.
	 *
	 */
	public function getDigitalSignature() {
		return Mage::registry('digi_sign_order_data')->getDigitalSignature();
	}
}