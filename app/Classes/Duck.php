<?php
/**
 * a Duck Class
 * @author Martin Halla <marin@halladesign.com>
 * @since 1.0
 */

namespace App\Classes;


class Duck
{

    /**
     * @var null
     */
    private $gender = null;

    /**
     * @var string
     */
    private  $activity = null;

    /**
     * @var int
     */
    private $age = 0;

    /**
     * @var int
     */
    public $weight = 1;

    const ACTIVITY_WALKING  = 'walking';
    const ACTIVITY_FLYING   = 'flying';
    const ACTIVITY_FLOATING  = 'floating';

    const MAX_AGE = 21;


    /**
     * Duck constructor.
     * @param $gender
     * @param $age
     * @param $weight
     * @param $activity
     */
    public function __construct($gender, $age, $weight, $activity ) {
        try {

            $this->setGender($gender);
            $this->setAge($age);
            $this->setWeight($weight);
            $this->setActivity($activity);

        } catch (\Exception $e) {
            echo $e->getMessage();
        }


    }


    /**
     * @return string
     */
    public function quack(): string {
        return 'Quack!';
    }

    /**
     * @return string
     */
    public function getInfo(): string{
        return 'I am a ' . $this->getGender() . ' and I am ' . $this->getAge()
            . ' year(s)old, weigh '. $this->getWeight() . ' lb(s) and I am ' . $this->getActivity();
    }


    /**
     * sets the activity : walking
     */
    public function walk(): void {
        $this->activity  = self::ACTIVITY_WALKING;
    }

    /**
     * sets the activity : flying
     */
    public function fly(): void{
        $this->activity  = self::ACTIVITY_FLYING;
    }

    /**
     * sets the acivity : floating
     */
    public function float(): void {
        $this->activity  = self::ACTIVITY_FLOATING;
    }


    /**
     * @param string $activity
     */
    public function setActivity($activity): void{
        $this->activity = $activity;
    }

    /**
     * @param $activity
     * @return null
     */
    public function getActivity() : string {
        return $this->activity;
    }

    /**
     * @param $gender
     * @throws \Exception
     */
    public function setGender($gender): void{

        $allowedGenders = ['male', 'female'];

        if (!in_array($gender, $allowedGenders)) {
            throw new \Exception('Incorrect gender');
        }

        $this->gender = $gender;
    }

    /**
     * @return string
     */
    public function getGender() : string {
        return $this->gender;
    }

    /**
     * @param $weight
     */
    public function setWeight($weight): void {
        $this->weight = $weight;
    }

    /**
     * @return int
     */
    public function getWeight() : int {
        return $this->weight;
    }

    /**
     * @param $age
     * @throws \Exception
     */
    public function setAge($age): void {

        if (($age < 0 ) || ($age > self::MAX_AGE )) {
            throw new \Exception('trying to assign incorrect age!');
        }

        $this->age = $age;
    }

    /**
     * @return int
     */
    public function getAge() : int {
        return $this->age;
    }


}
