<?php


$GLOBALS['TL_DCA']['tl_iso_product']['fields']['alias']['save_callback'] = array
(
  array('Bcs\Backend\IsotopeCustomAlias', 'saveCustom'),
);
