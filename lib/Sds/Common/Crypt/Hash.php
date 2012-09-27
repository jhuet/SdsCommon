<?php
/**
 * @link       http://superdweebie.com
 * @package    Sds
 * @license    MIT
 */
namespace Sds\Common\Crypt;

use Sds\Common\User\AuthInterface;

/**
 *
 * @since   1.0
 * @author  Tim Roediger <superdweebie@gmail.com>
 *
 */
class Hash implements HashInterface, SaltInterface {

    const chars = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';

    const saltLength = 30;

    /**
     * Creates a sha1 hash of a string using a salt, and prepends that salt
     * to the return string
     *
     * @param string $salt
     * @param string $plaintext
     * @return string
     */
    public static function hash($salt, $plaintext){
        return sha1($salt.$plaintext);
    }

    public static function hashAndPrependSalt($salt, $plaintext){
        return $salt . self::hash($salt, $plaintext);
    }

    /**
     * Extracts the salt from a password hash previously generated by self::hash, and
     * uses the same salt to encrypt the plaintext
     *
     * @param \Sds\Common\Auth\AuthInterface $identity
     * @param string $plaintext
     * @return string
     */
    public static function hashPassword(AuthInterface $identity, $plaintext){
        $dbPassword = $identity->getPassword();
        $salt = substr($dbPassword, 0, self::saltLength);
        return self::hashAndPrependSalt($salt, $plaintext);
    }

    /**
     * Generates a random string
     *
     * @return string
     */
    public static function generateSalt(){
        return substr(str_shuffle(str_repeat(self::chars,10)),0,self::saltLength);
    }

    public static function getSalt(){
        return self::generateSalt();
    }
}

