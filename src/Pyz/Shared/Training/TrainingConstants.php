<?php

/**
 * This file is part of the Spryker Commerce OS.
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace Pyz\Shared\Training;

interface TrainingConstants
{
    /**
     * Specification:
     * - Enables commands from modules included by require-dev composer section.
     * - Must be set to false for environments where composer install --no-dev is performed.
     *
     * @api
     */
    public const CONFIGURATION_KEY = 'TRAINING:CONFIGURATION_KEY';
}
