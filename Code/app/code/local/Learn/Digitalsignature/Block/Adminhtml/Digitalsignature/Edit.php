<?php
/**
 * Integrate Digital Signature
 *
 * @category   Digital Signature
 * @package    Learn_Digitalsignature
 * @author     Vijayakumar
 *
 */

class Learn_Digitalsignature_Block_Adminhtml_Digitalsignature_Edit extends Mage_Adminhtml_Block_Widget_Form_Container
{
	public function __construct() {
		parent::__construct();
        $this->_objectId = 'id';
        $this->_blockGroup = 'price';
        $this->_controller = 'adminhtml_digitalsignature';
		$this->_removeButton('delete');
		$this->_removeButton('reset');
		$this->_removeButton('save');
		//$this->_removeButton('back');
	}
 
    public function getHeaderText() {
		return Mage::helper('digitalsignature')->__('View Digital Signature');
    }
	
	protected function _prepareLayout() {
		/* echo $this->_blockGroup . '/' . $this->_controller . '_' . $this->_mode . '_form'; */
		if ($this->_blockGroup && $this->_controller && $this->_mode) {
			$this->setChild('form', $this->getLayout()->createBlock('digitalsignature/adminhtml_digitalsignature_edit_form'));
		}
		return parent::_prepareLayout();
	}
}