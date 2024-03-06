<?php

/**
 * Bright Cloud Studio's Isotope Custom Alias
 *
 * Copyright (C) 2024 Bright Cloud Studio
 *
 * @package    bright-cloud-studio/isotope-custom-alias
 * @link       https://www.brightcloudstudio.com/
 * @license    http://opensource.org/licenses/lgpl-3.0.html
**/


namespace Bcs\Backend;

use Haste\Haste;
use Haste\Input\Input;
use Isotope\Isotope;
use Isotope\Interfaces\IsotopeProduct;
use Isotope\Interfaces\IsotopeProductCollection;
use Isotope\Model\Product;
use Isotope\Model\ProductCollection\Order;


class IsotopeCustomAlias extends \Isotope\Backend\Product\Alias
{
    public function saveCustom($varValue, \DataContainer $dc)
    {
        $autoAlias = false;
        $varValue  = (string) $varValue;

        // Generate alias if there is none
        if ('' === $varValue) {
            $autoAlias = true;
            $act       = Input::get('act');

            if ('edit' === $act || 'overrideAll' === $act) {
                $varValue = (string) (Input::post('name') ?: Input::post('sku'));
            } elseif ('editAll' === $act) {
                $varValue = (string) (Input::post('name_'.$dc->id) ?: Input::post('sku_'.$dc->id));
            }
        }

        if ('' === $varValue) {
            $varValue = (string) ($dc->activeRecord->name ?: $dc->activeRecord->sku);
        }

        if ('' === $varValue) {
            $varValue = $dc->id;
        }

        $varValue = \StringUtil::standardize(strip_tags($varValue));

        $objAlias = \Database::getInstance()
            ->prepare('SELECT id FROM tl_iso_product WHERE id=? OR alias=?')
            ->execute($dc->id, $varValue)
        ;

        // Check whether the product alias exists
        if ($objAlias->numRows > 1) {
            if (!$autoAlias) {
                throw new \OverflowException(sprintf($GLOBALS['TL_LANG']['ERR']['aliasExists'], $varValue));
            }

            $varValue .= '.' . $dc->id;
        }

        // Get the first three characters, if it is 'id-' then return a stripped down version of our alias
        $check = $varValue[0] . $varValue[1] . $varValue[2];
        if($check == 'id-')
            return substr($varValue, 3);
        return $varValue;
    }
}
