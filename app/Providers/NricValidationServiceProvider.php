<?php
// Adapted from Mauris - https://gist.github.com/mauris/6484795.
namespace App\Providers;

use Validator;
use Illuminate\Support\ServiceProvider;

class NricValidationServiceProvider extends ServiceProvider
{
    public static function validate($nric)
    {
        $nric = strtoupper($nric);
        if (strlen($nric) == 9) {
            $hash = self::checksum(substr($nric, 0, 8));
            return $hash == $nric[8];
        }
        return false;
    }

    public static function checksum($nric)
    {
        $nric = strtoupper($nric);
        if (strlen($nric) == 8) {
            $prefix = $nric[0];
            $nric = substr($nric, 1);
            $number = $nric[0] * 2 + $nric[1] * 7 + $nric[2] * 6
                    + $nric[3] * 5 + $nric[4] * 4 + $nric[5] * 3
                    + $nric[6] * 2;
            if ($prefix == 'T' || $prefix == 'G') {
                $number += 4;
            }
            $mod = $number % 11;
            $hash = array(
                array('J', 'Z', 'I', 'H', 'G', 'F', 'E', 'D', 'C', 'B', 'A'),
                array('X', 'W', 'U', 'T', 'R', 'Q', 'P', 'N', 'M', 'L', 'K')
            );
            if (in_array($prefix, array('S', 'T'))) {
                return $hash[0][$mod];
            } elseif (in_array($prefix, array('F', 'G'))) {
                return $hash[1][$mod];
            }
        }
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Validator::extend('nricformat', function($attribute, $value, $parameters, $validator) {
            return NricValidationServiceProvider::validate($value);
        });
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
