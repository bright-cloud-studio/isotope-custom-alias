<?php

/**
 * @copyright  Bright Cloud Studio
 * @author     Bright Cloud Studio
 * @package    Contao CE Grouping
 * @license    LGPL-3.0+
 * @see	       https://github.com/bright-cloud-studio/isotope-custom-alias
 */

namespace Bcs\IsotopeCustomAliasBundle\ContaoManager;
use Contao\ManagerPlugin\Bundle\Config\BundleConfig;
use Contao\ManagerPlugin\Bundle\BundlePluginInterface;
use Contao\ManagerPlugin\Bundle\Parser\ParserInterface;

class Plugin implements BundlePluginInterface
{
    /**
     * {@inheritdoc}
     */
    public function getBundles(ParserInterface $parser)
    {
        return [
            BundleConfig::create('Bcs\IsotopeCustomAliasBundle\BcsIsotopeCustomAliasBundle')->setLoadAfter(['Contao\CoreBundle\ContaoCoreBundle']),
        ];
    }
}
