<?php
/**
 * Date Period plugin for Craft CMS 3.x
 *
 * Twig extension for PHP Date Period
 *
 * @link      https://billymedia.co.uk
 * @copyright Copyright (c) 2021 Billy Patel
 */

namespace billymedia\dateperiod\twigextensions;

use billymedia\dateperiod\DatePeriod;

use Craft;
use DateInterval;
use Twig\Extension\AbstractExtension;
use Twig\TwigFilter;
use Twig\TwigFunction;

/**
 * @author    Billy Patel
 * @package   DatePeriod
 * @since     1
 */
class DatePeriodTwigExtension extends AbstractExtension
{
    // Public Methods
    // =========================================================================

    /**
     * @inheritdoc
     */
    public function getName()
    {
        return 'DatePeriod';
    }

    /**
     * @inheritdoc
     */
    public function getFilters()
    {
        return [
            new TwigFilter('datePeriod', [$this, 'datePeriodFilter']),
        ];
    }

    // /**
    //  * @inheritdoc
    //  */
    public function getFunctions()
    {
      return [
        new TwigFunction('datePeriod', [$this, 'datePeriodFilter']),
      ];
    }


    /**
     * Creates a DatePeriod object.
     * It allows iteration over a set of dates and times, recurring at regular intervals, over a given period.
     *
     * @param DateTime $start The start date of the period
     * @param DateTime $end The end date of the period
     * @param DateInterval $interval The interval between recurrences within the period
     * @return array
     */
    public function datePeriodFilter($start, $end, $interval = '1 day')
    {

        $interval = DateInterval::createFromDateString($interval);
        $datePeriod = new \DatePeriod($start, $interval, $end);

        return $datePeriod;
    }
}
