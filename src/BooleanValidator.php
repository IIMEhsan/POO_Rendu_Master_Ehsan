<?php


namespace IIMEhsan\Rendu_Master_POO;


/**
 * Class BooleanRendu_Master_POO
 * @package IIMEhsan\Rendu_Master_POO
 */
/**
 * Class BooleanRendu_Master_POO
 * @package IIMEhsan\Rendu_Master_POO
 */
class BooleanRendu_Master_POO
{
    /**
     * @param bool $boolean
     *
     * @return bool
     *
     * @throws \Exception
     */
    public static function isTrue($boolean)
    {
        if (!is_bool($boolean)) {
            throw new \Exception('$boolean must be a boolean');
        }else {
            if( filter_var($boolean, FILTER_VALIDATE_BOOLEAN) ) {
                return true;
            }else{
                return false;
            }
        }
    }

    /**
     * @param bool $boolean
     *
     * @return bool
     *
     * @throws \Exception
     */
    public static function isFalse($boolean)
    {
        if (!is_bool($boolean)) {
            throw new \Exception('$boolean must be a boolean');
        }else {
            if (!filter_var($boolean, FILTER_VALIDATE_BOOLEAN, ['flags' => FILTER_NULL_ON_FAILURE])) {
                return true;
            } else {
                return false;
            }
        }
    }
}