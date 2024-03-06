<?php

/*
* Bright Cloud Studio's Isotope Export Orders
* Copyright (C) 2023-2024 Bright Cloud Studio
*
* @package    bright-cloud-studio/isotope-export-orders
* @link       https://www.brightcloudstudio.com/
* @license    http://opensource.org/licenses/lgpl-3.0.html
*/

namespace Bcs\Backend;

use Isotope\Model\Payment;
use Isotope\Model\ProductCollection\Order;
use Isotope\Model\Shipping;

class IsotopeCustomAlias
{
    public function saveCustom($varValue, DataContainer $dc)
    {
        echo "HIT";
        die();
        
        $varValue  = (string) $varValue;
        $varValue = "BING BONG";
    }
}
