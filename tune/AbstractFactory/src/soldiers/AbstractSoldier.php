<?php

namespace tune\AbstractFactory\soldiers;

class AbstractSoldier {

    protected $name;
    protected $population;

    /**
     * AbstractSoldier constructor.
     *
     * @param $soldier_name
     *   The name of the soldier.
     * @param $soldier_population
     *   The name of the population of the soldier.
     */
    public function __construct($soldier_name, $soldier_population) {
        $this->name = $soldier_name;
        $this->population = $soldier_population;
    }

    public function __toString()
    {
        $pattern = 'To string per l\'unità <strong>%s</strong> della popolazione <strong>%s</strong>';
        return sprintf(
            $pattern,
            $this->name,
            $this->population
        );
    }
}