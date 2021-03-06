<?php
/**
 * @link       http://superdweebie.com
 * @package    Sds
 * @license    MIT
 */
namespace Sds\Common\Zone;

/**
 * Can be used to implement the Sds\Common\Zone\ActiveZoneAwareInterface
 *
 * @since   1.0
 * @author  Tim Roediger <superdweebie@gmail.com>
 */
trait ActiveZoneAwareTrait {

    /**
     * @var string
     */
    protected $activeZone;

    /**
     * Pass the active zone to a class
     *
     * @param string $activeZone
     */
    public function setActiveZone($activeZone){
        $this->activeZone = (string) $activeZone;
    }
}