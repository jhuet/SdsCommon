<?php
/**
 * @link       http://superdweebie.com
 * @package    Sds
 * @license    MIT
 */
namespace SdsCommon\Stamp;

use SdsCommon\User\UserInterface;

/**
 * Interface to add updated by stamp to object
 *
 * @since   1.0
 * @author  Tim Roediger <superdweebie@gmail.com>
 */
interface UpdatedByInterface{

    /**
     * The user who updated
     *
     * @param /SdsCommon/User/UserInterface $user
     */
    public function setUpdatedBy(UserInterface $user);

    /**
     * Return the user name of the user who updated
     *
     * @param string
     */
    public function getUpdatedBy();
}
