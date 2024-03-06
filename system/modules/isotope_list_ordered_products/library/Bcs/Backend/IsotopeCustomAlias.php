<?php

/**
 * Bright Cloud Studio's Isotope List Ordered Products
 *
 * Copyright (C) 2023 Bright Cloud Studio
 *
 * @package    bright-cloud-studio/isotope-list-ordered-products
 * @link       https://www.brightcloudstudio.com/
 * @license    http://opensource.org/licenses/lgpl-3.0.html
**/


namespace Bcs\Backend;

use Haste\Haste;
use Isotope\Isotope;
use Isotope\Interfaces\IsotopeProduct;
use Isotope\Interfaces\IsotopeProductCollection;
use Isotope\Model\Product;
use Isotope\Model\ProductCollection\Order;


class IsotopeCustomAlias extends \Isotope\Backend\Product\Alias
{
    public function saveCustom($varValue, DataContainer $dc)
    {
        $autoAlias = false;
        $varValue  = (string) $varValue;

        $varValue = "BING BONG NOISE";

        return $varValue;
    }
}
