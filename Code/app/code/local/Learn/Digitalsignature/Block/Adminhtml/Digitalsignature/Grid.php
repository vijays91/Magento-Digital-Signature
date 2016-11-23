<?php
/**
 * Integrate Digital Signature
 *
 * @category   Digital Signature
 * @package    Learn_Digitalsignature
 * @author     Vijayakumar
 *
 */

class Learn_Digitalsignature_Block_Adminhtml_Digitalsignature_Grid extends Mage_Adminhtml_Block_Widget_Grid
{
    public function __construct() {
        parent::__construct();
        $this->setId('digital_signature_grid');
        $this->setDefaultSort('entity_id');
        $this->setDefaultDir('DESC');
        $this->setSaveParametersInSession(true);
        $this->setUseAjax(true);
    }

	/**
     * Retrieve collection class
     *
     * @return string
     */
    protected function _getCollectionClass() {
        return 'sales/order';
    }

    protected function _prepareCollection() {
        $collection = Mage::getModel($this->_getCollectionClass())->getCollection();
        $collection->addAttributeToFilter('digital_signature_name', array('neq' => array(null)));
        //print_r($collection->getData());
        $this->setCollection($collection);
        return parent::_prepareCollection();
    }

    protected function _prepareColumns() {
        $this->addColumn('entity_id', array(
            'header' 	=> Mage::helper('digitalsignature')->__('ID'),
            'width'  	=> '5%',
            'type'   	=> 'text',
            'align'   	=> 'center',
            'index'  	=> 'entity_id',
        ));

        $this->addColumn('real_order_id', array(
            'header' 	=> Mage::helper('digitalsignature')->__('Order #'),
            'width'  	=> '30%',
            'type'   	=> 'text',
            'index'  	=> 'increment_id',
			'renderer'	=> 'Learn_Digitalsignature_Block_Adminhtml_Digitalsignature_Renderer_Orderdata'
        ));

        $this->addColumn('digital_signature_name', array(
            'header'	=> Mage::helper('digitalsignature')->__('Name'),
            'width' 	=> '30%',
            'type'  	=> 'text',
            'index' 	=> 'digital_signature_name',
        ));

        $this->addColumn('digital_signature', array(
            'header'	=> Mage::helper('digitalsignature')->__('Signature'),
            'width' 	=> '35%',
            // 'type'  	=> 'text',
            'index' 	=> 'digital_signature_name',
			'filter' 	=> false,
			'sortable'  => false,
			'renderer'	=> 'Learn_Digitalsignature_Block_Adminhtml_Digitalsignature_Renderer_DigitalFont'
        ));

        return parent::_prepareColumns();
    }

    public function getRowUrl($row) {
        return $this->getUrl('*/*/view', array('order_id' => $row->getId()));
    }

    public function getGridUrl() {
      return $this->getUrl('*/*/grid', array('_current'=>true));
    }
}