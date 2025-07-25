<?php

declare(strict_types=1);

namespace Quellenform\IconpackIconoir\Configuration;

/*
 * This file is part of the "iconpack_iconoir" Extension for TYPO3 CMS.
 *
 * Conceived and written by Stephan Kellermayr
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 */

use Quellenform\Iconpack\IconpackConfigurationInterface;
use TYPO3\CMS\Core\Configuration\ExtensionConfiguration;
use TYPO3\CMS\Core\Utility\GeneralUtility;

/**
 * Class IconpackConfiguration
 */
class IconpackConfiguration implements IconpackConfigurationInterface
{
    /**
     * Override styles from extConf.
     *
     * @param string $iconpackIdentifier
     * @param array $configuration
     *
     * @return array
     */
    public function configureIconpack(string $iconpackIdentifier, array $configuration): array
    {
        /** @var ExtensionConfiguration $extConf */
        $extConf = GeneralUtility::makeInstance(ExtensionConfiguration::class);
        $stylesEnabled = (string) trim($extConf->get('iconpack_iconoir', 'stylesEnabled'));
        if (!empty($stylesEnabled)) {
            $configuration['stylesEnabled'] = $stylesEnabled;
        }
        return $configuration;
    }
}
