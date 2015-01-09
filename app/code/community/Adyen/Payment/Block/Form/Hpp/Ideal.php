<?php

/**
 * Adyen Payment Module
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@magentocommerce.com so we can send you a copy immediately.
 *
 * @category	Adyen
 * @package	Adyen_Payment
 * @copyright	Copyright (c) 2011 Adyen (http://www.adyen.com)
 * @license	http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */
/**
 * @category   Payment Gateway
 * @package    Adyen_Payment
 * @author     Adyen
 * @property   Adyen B.V
 * @copyright  Copyright (c) 2014 Adyen BV (http://www.adyen.com)
 */



/**
 * Class Adyen_Payment_Block_Form_Hpp_Ideal
 * @method Adyen_Payment_Model_Adyen_Hpp_Ideal getMethod()
 */
class Adyen_Payment_Block_Form_Hpp_Ideal extends Mage_Payment_Block_Form {

    protected function _construct()
    {
        $this->setTemplate('adyen/form/hpp/ideal.phtml');
        parent::_construct();
    }

    public function getShowIdealLogos()
    {
        return $this->getMethod()->getShowIdealLogos();
    }

    public function getIssuers()
    {
        return $this->getMethod()->getIssuers();
    }

    public function getIssuerImageUrl($issuer) {
        $_bankFile = strtoupper(str_replace(" ", '', $issuer['label']));
        return $this->getSkinUrl('images'.DS.'adyen'.DS. $_bankFile . ".png");
    }
}
