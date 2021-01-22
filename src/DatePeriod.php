<?php
/**
 * Date Period plugin for Craft CMS 3.x
 *
 * Twig extension for PHP Date Period
 *
 * @link      https://billymedia.co.uk
 * @copyright Copyright (c) 2021 Billy Patel
 */

namespace billymedia\dateperiod;

use billymedia\dateperiod\twigextensions\DatePeriodTwigExtension;

use Craft;
use craft\base\Plugin;
use craft\services\Plugins;
use craft\events\PluginEvent;

use yii\base\Event;

/**
 * Class DatePeriod
 *
 * @author    Billy Patel
 * @package   DatePeriod
 * @since     1
 *
 */
class DatePeriod extends Plugin
{
    // Static Properties
    // =========================================================================

    /**
     * @var DatePeriod
     */
    public static $plugin;

    // Public Properties
    // =========================================================================

    /**
     * @var string
     */
    public $schemaVersion = '1';

    /**
     * @var bool
     */
    public $hasCpSettings = false;

    /**
     * @var bool
     */
    public $hasCpSection = false;

    // Public Methods
    // =========================================================================

    /**
     * @inheritdoc
     */
    public function init()
    {
        parent::init();
        self::$plugin = $this;

        Craft::$app->view->registerTwigExtension(new DatePeriodTwigExtension());

    }

    // Protected Methods
    // =========================================================================

}
