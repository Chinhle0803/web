<?php
/**
 * Part of Date_HumanDiff
 *
 * PHP version 5
 *
 * @category Date
 * @package  Date_HumanDiff
 * @author   Christian Weiske <cweiske@php.net>
 * @license  http://www.gnu.org/copyleft/lesser.html LGPL
 * @link     http://pear.php.net/package/Date_HumanDiff
 */
require_once 'Date/HumanDiff/LocaleArray.php';

/**
 * German translation of the english messages.
 *
 * @category Date
 * @package  Date_HumanDiff
 * @author   Christian Weiske <cweiske@php.net>
 * @license  http://www.gnu.org/copyleft/lesser.html LGPL
 * @version  Release: @package_version@
 * @link     http://pear.php.net/package/Date_HumanDiff
 */
class Date_HumanDiff_Locale_vn extends Date_HumanDiff_LocaleArray
{
    /**
     * Translation array.
     * Key is the english variant, value the german translation.
     *
     * @var array
     */
    public $trans = array(
        'just now'       => 'mới đây',
        'a minute ago'   => '1 phút trước',
        '%d minutes ago' => '%d phút trước',
        'an hour ago'    => '1 giờ trước',
        '%d hours ago'   => '%d giờ trước',
        'yesterday'      => 'hôm qua',
        '%d days ago'    => '%d ngày trước',
        'a week ago'     => 'tuần trước',
        '%d weeks ago'   => '%d tuần trước',
        'a month ago'    => '1 tháng trước',
        '%d months ago'  => '%d tháng trước',
        'a year ago'     => '1 năm trước',
        '%d years ago'   => '%d năm trước',

        'in a moment'   => 'gleich',
        'in a minute'   => 'in einer Minute',
        'in %d minutes' => 'in %d Minuten',
        'in an hour'    => 'in einer Stunde',
        'in %d hours'   => 'in %d Stunden',
        'tomorrow'      => 'morgen',
        'in %d days'    => 'in %d Tagen',
        'in a week'     => 'in einer Woche',
        'in %d weeks'   => 'in %d Wochen',
        'in a month'    => 'in einem Monat',
        'in %d months'  => 'in %d Monaten',
        'in a year'     => 'in einem Jahr',
        'in %d years'   => 'in %d Jahren',
    );
}
?>
