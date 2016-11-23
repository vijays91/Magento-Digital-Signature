<?php
/**
 * Integrate Digital Signature
 *
 * @category   Digital Signature
 * @package    Learn_Digitalsignature
 * @author     Vijayakumar
 *
 */

class Learn_Digitalsignature_Adminhtml_DigitalsignatureController extends Mage_Adminhtml_Controller_Action
{
    /*
     *
     *
     */
    public function indexAction() {
        $this->loadLayout();
        $this->_title($this->__('Digital Signature'))->_title($this->__('Digital Signature'));
        $this->_setActiveMenu('digitalsignature/items');
        /* $this->getLayout()->getBlock('head')->setCanLoadExtJs(true); */        
        $breadcrumbTitle = Mage::helper('digitalsignature')->__('Digital Signature');
        $breadcrumbLabel = Mage::helper('digitalsignature')->__('Digital Signature');
        $this->_addBreadcrumb($breadcrumbLabel, $breadcrumbTitle);
        // $this->_addContent($this->getLayout()->createBlock('digitalsignature/adminhtml_digitalsignature_edit'));
        /* ->_addLeft($this->getLayout()->createBlock('productupdate/adminhtml_price_edit_tabs')); */
        $this->_addContent($this->getLayout()->createBlock('digitalsignature/adminhtml_digitalsignature'));
        $this->renderLayout();
    }

    /*
     *
     *
     */
    public function gridAction() {
        $this->loadLayout();
        $this->getResponse()->setBody(
               $this->getLayout()->createBlock('digitalsignature/adminhtml_digitalsignature_grid')->toHtml()
        );
    }

    /*
     *
     *
     */
    public function viewAction() {
        $order_id     = $this->getRequest()->getParam('order_id');
        $ordermodel  =Mage::getModel('sales/order')->load($order_id);
        if ($ordermodel->getId() || $order_id == 0)  {
            Mage::register('digi_sign_order_data', $ordermodel); 
            $this->loadLayout();
            $this->_setActiveMenu('digitalsignature/items');           
            $this->_addBreadcrumb(Mage::helper('adminhtml')->__('Digital Signature'), Mage::helper('adminhtml')->__('Digital Signature'));
            $this->_addBreadcrumb(Mage::helper('adminhtml')->__('Digital Signature'), Mage::helper('adminhtml')->__('Digital Signature'));           
            $this->getLayout()->getBlock('head')->setCanLoadExtJs(true);           
            $this->_addContent($this->getLayout()->createBlock('digitalsignature/adminhtml_digitalsignature_edit'));
            $this->renderLayout();
        } else {
            Mage::getSingleton('adminhtml/session')->addError(
                Mage::helper('digitalsignature')->__('Record does not exist')
            );
            $this->_redirect('*/*/');
        }
    }
}