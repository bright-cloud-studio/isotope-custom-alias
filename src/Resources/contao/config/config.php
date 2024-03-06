<?php

/**
 * @copyright  Bright Cloud Studio
 * @author     Bright Cloud Studio
 * @package    Contao CE Grouping
 * @license    LGPL-3.0+
 * @see	       https://github.com/bright-cloud-studio/isotope-custom-alias
 */
  

$GLOBALS['TL_DCA']['tl_iso_product']['fields']['alias']['save_callback'][''] = array('Bcs\Backend\IsotopeCustomAlias', 'saveCustom');




?>
