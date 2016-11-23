<?php
/**
 * Integrate Digital Signature
 *
 * @category   Digital Signature
 * @package    Learn_Digitalsignature
 * @author     Vijayakumar
 *
 */
 
$this->startSetup();
$this->addAttribute('order', 'digital_signature', array(
	'type'          => 'text',
	'label'         => 'Digital Signature',
	'visible'       => true,
	'required'      => false,
));
 
$this->endSetup();