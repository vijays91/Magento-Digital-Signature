<?php
/**
 * Integrate Digital Signature
 *
 * @category   Digital Signature
 * @package    Learn_Digitalsignature
 * @author     Vijayakumar
 *
 */

class Learn_Digitalsignature_Block_Adminhtml_Digitalsignature extends Mage_Adminhtml_Block_Widget_Grid_Container
{
    public function __construct() {
        $this->_controller = 'adminhtml_digitalsignature';
        $this->_blockGroup = 'digitalsignature';
        $this->_headerText = Mage::helper('digitalsignature')->__('Digital Signature Reports');
        parent::__construct();
		$this->_removeButton('add');
    }
}