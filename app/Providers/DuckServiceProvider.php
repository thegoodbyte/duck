<?php
/**
 * a DuckServiceProvider Class
 * @author Martin Halla <marin@halladesign.com>
 * @since 1.0
 */

namespace App\Providers;

use App\Classes\Duck;
use Illuminate\Support\ServiceProvider;

class DuckServiceProvider extends ServiceProvider
{



    public function boot() {

    }


    /**
     * provides an instance of a new,  living and breahing Duck,
     * a random duck
     */
    public function register() {
        $this->app->bind(Duck::class, function($app) {

            $weight = rand(1, 35);

            $genders = [
                0 => 'male',
                1 => 'female'
            ];

            $activities = [
                0 => Duck::ACTIVITY_FLOATING,
                1 => Duck::ACTIVITY_FLYING,
                2 => Duck::ACTIVITY_WALKING
            ];

            $gender = $genders[rand(0, 1)];

            $age = rand(0, Duck::MAX_AGE);

            $activity = $activities[rand(0, 2)];

            return new Duck($gender, $age,  $weight, $activity);
        });

    }
}
