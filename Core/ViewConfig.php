<?php
/**
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * @copyright (c) ProudCommerce | 2021
 * @link          www.proudcommerce.com
 * @package       pcDisableAmzPay
 * @version       1.0.0
 **/

namespace ProudCommerce\DisableAmzPay\Core;

use OxidEsales\Eshop\Core\Registry;

class ViewConfig extends ViewConfig_parent
{

    /**
     * @return bool true|false
     */
    public function showAmazonLoginButton()
    {
        $returnValue = parent::showAmazonLoginButton();
        if ($this->_checkDisabledAmzClass()) {
            return false;
        }

        return $returnValue;
    }

    /**
     * @return bool true|false
     */
    public function showAmazonPayButton()
    {
        $returnValue = parent::showAmazonPayButton();
        if ($this->_checkDisabledAmzClass()) {
            return false;
        }

        return $returnValue;
    }

    /**
     * @return bool
     */
    protected function _checkDisabledAmzClass()
    {
        $classes = Registry::getConfig()->getShopConfVar('pcDisableAmzPay_classes');
        if (!empty($classes) && in_array($this->getActiveClassName(), $classes)) {
            return true;
        }

        return false;
    }

}
