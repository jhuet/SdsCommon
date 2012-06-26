<?php
/**
 * @link       http://superdweebie.com
 * @package    Sds
 * @license    MIT
 */
namespace SdsCommon\Auth\AuthInterface;

/**
 *
 * @since   1.0
 * @author  Tim Roediger <superdweebie@gmail.com>
 */
interface AuthUserInterface {
     
    /**
     * 
     * @return boolean
     */
    public function getIsGuest();

    /**
     * 
     * @param boolean $isGuest
     */
    public function setIsGuest($isGuest);
    
    /**
     * Returns encrypted password
     * 
     * @return string
     */
    public function getPassword();
     
    /**
     * 
     * @param string $plaintext
     */
    public function setPassword($plaintext);    
}