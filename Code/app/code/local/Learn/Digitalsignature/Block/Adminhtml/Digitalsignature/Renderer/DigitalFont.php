<?php
/**
 * Integrate Digital Signature
 *
 * @category   Digital Signature
 * @package    Learn_Digitalsignature
 * @author     Vijayakumar
 *
 */

class Learn_Digitalsignature_Block_Adminhtml_Digitalsignature_Renderer_DigitalFont extends Mage_Adminhtml_Block_Widget_Grid_Column_Renderer_Abstract
{
	public function render(Varien_Object $row) {
		$digital_signature_name = $row->getData('digital_signature_name');
		$digital_font = '<div class="typed grid_sign">'. $digital_signature_name . '</div>';
		return  $digital_font;
	}
}