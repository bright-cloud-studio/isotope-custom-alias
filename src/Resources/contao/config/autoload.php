<?php

/*
 * Bright Cloud Studio's Isotope Export Orders
 * Copyright (C) 2023-2024 Bright Cloud Studio
 *
 * @package    bright-cloud-studio/isotope-custom-alias
 * @link       https://www.brightcloudstudio.com/
 * @license    http://opensource.org/licenses/lgpl-3.0.html
*/

/* Register Classes */
ClassLoader::addClasses(array
(
    // Class that contains all of our functionality for the Isotope Hooks
    'Bcs\Backend\IsotopeCustomAlias'       => 'system/modules/isotope_custom_alias/library/Bcs/Backend/IsotopeCustomAlias.php',
));
