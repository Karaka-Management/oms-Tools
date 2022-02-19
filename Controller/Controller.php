<?php
/**
 * Karaka
 *
 * PHP Version 8.0
 *
 * @package   Modules\Tools
 * @copyright Dennis Eichhorn
 * @license   OMS License 1.0
 * @version   1.0.0
 * @link      https://karaka.app
 */
declare(strict_types=1);

namespace Modules\Tools\Controller;

use phpOMS\Module\ModuleAbstract;

/**
 * Tools class.
 *
 * @package Modules\Tools
 * @license OMS License 1.0
 * @link    https://karaka.app
 * @since   1.0.0
 */
class Controller extends ModuleAbstract
{
    /**
     * Module path.
     *
     * @var string
     * @since 1.0.0
     */
    public const PATH = __DIR__ . '/../';

    /**
     * Module version.
     *
     * @var string
     * @since 1.0.0
     */
    public const VERSION = '1.0.0';

    /**
     * Module name.
     *
     * @var string
     * @since 1.0.0
     */
    public const NAME = 'Tools';

    /**
     * Module id.
     *
     * @var int
     * @since 1.0.0
     */
    public const ID = 1003300000;

    /**
     * Localization files.
     *
     * @var string[]
     * @since 1.0.0
     */
    protected static array $localization = [
    ];

    /**
     * Providing.
     *
     * @var string[]
     * @since 1.0.0
     */
    protected static array $providing = [
        'Navigation',
    ];

    /**
     * Dependencies.
     *
     * @var string[]
     * @since 1.0.0
     */
    protected static array $dependencies = [];
}
