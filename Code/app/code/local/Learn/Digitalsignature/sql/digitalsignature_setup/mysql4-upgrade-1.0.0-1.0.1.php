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
$this->addAttribute('order', 'digital_signature_name', array(
	'type'          => 'varchar',
	'label'         => 'Digital Signature Name',
	'visible'       => true,
	'required'      => false,
));
 
$this->endSetup();