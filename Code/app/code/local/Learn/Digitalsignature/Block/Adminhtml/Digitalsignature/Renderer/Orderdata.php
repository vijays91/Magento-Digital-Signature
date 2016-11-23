<?php
/**
 * Integrate Digital Signature
 *
 * @category   Digital Signature
 * @package    Learn_Digitalsignature
 * @author     Vijayakumar
 *
 */

class Learn_Digitalsignature_Block_Adminhtml_Digitalsignature_Renderer_Orderdata extends Mage_Adminhtml_Block_Widget_Grid_Column_Renderer_Abstract
{
	public function render(Varien_Object $row) {
		$order_id = $row->getId();
		$order_increment_id = $row->getData('increment_id');
		$url = Mage::helper('adminhtml')->getUrl("adminhtml/sales_order/view", array('order_id'=> $order_id));
		$ret_data =  '<a href="'. $url .'">'. $order_increment_id . '</a>';
		return  $ret_data;
	}
}