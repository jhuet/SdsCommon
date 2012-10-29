<?php
/**
 * @link       http://superdweebie.com
 * @package    Sds
 * @license    MIT
 */
namespace Sds\Common\Validator;

/**
 *
 * @since   1.0
 * @author  Tim Roediger <superdweebie@gmail.com>
 */
class ValidatorFactory
{

    public static function createGroup($validatorDefinitions){

        $validators = [];

        foreach ($validatorDefinitions as $validatorDefinition){
            $validators[] = self::create($validatorDefinition);
        }

        return new ValidatorGroup($validators);
    }

    public static function create($arg1, $arg2 = null){

        if ($arg1 instanceof AbstractValidator){
            return $arg1;
        }

        if (is_array($arg1) && !isset($arg1['class'])){
            return self::createGroup($arg1);
        }

        if (is_string($arg1)){
            $class = $arg1;
            $options = $arg2;
        } else {
            $class = $arg1['class'];
            if (isset($arg1['options'])){
                $options = $arg1['options'];
            }
        }

        $reflection = new \ReflectionClass($class);
        if (isset($options)){
            $validator = $reflection->newInstanceArgs($options);
        } else {
            $validator = $reflection->newInstanceArgs();
        }

        return $validator;
    }
}
