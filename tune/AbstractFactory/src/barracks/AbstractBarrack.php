<?php

namespace tune\AbstractFactory\barracks;

use tune\AbstractFactory\soldiers\AbstractSoldier;

abstract class AbstractBarrack {

    private $populationName;

    public function __construct($populationName) {
        $this->setPopulationName($populationName);
    }
    
    protected setPopulationName($populationName) {
        $this->populationName = $populationName;
    }

    protected getPopulationName() {
        return $this->populationName;
    }
    
    /**
     * @param string $soldier_name
     *   The name of the soldier.
     *
     * @return AbstractSoldier
     *   Return an AbstractSoldier resource.
     */
    abstract public function createSoldier($soldier_name): AbstractSoldier;
}