<?php
/**
 * @link       http://superdweebie.com
 * @package    Sds
 * @license    MIT
 */
namespace Sds\Common\CreditCard;

/**
 *
 * @since   1.0
 * @author  Tim Roediger <superdweebie@gmail.com>
 */
interface ExpiryInterface{

    public function __construct($month, $year);

    public function getMonth();

    public function getYear();
}
