<?php

declare(strict_types=1);


namespace App\Design\Behavioral\Template;


abstract class Journey
{
    /**
     * @var array
     */
    private $thingsToDo = [];

    final public function takeTrip()
    {
        $this->thingsToDo[] = $this->buyAFlight();
        $this->thingsToDo[] = $this->takePlane();
        $this->thingsToDo[] = $this->enjoyVacation();

        $buyGift = $this->buyGift();

        if ($buyGift !== null) {
            $this->thingsToDo[] = $buyGift;
        }

        $this->thingsToDo[] = $this->takePlane();
    }

    abstract protected function enjoyVacation(): string ;

    protected function buyGift()
    {
        return null;
    }

    private function buyAFlight() {
        return 'Buy a flight ticket';
    }

    private function takePlane() {
        return 'Taking the plane';
    }

    /**
     * @return array
     */
    public function getThingsToDo(): array
    {
        return $this->thingsToDo;
    }

}