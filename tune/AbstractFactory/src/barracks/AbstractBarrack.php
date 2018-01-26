<?php

namespace tune\AbstractFactory\barracks;

use tune\AbstractFactory\soldiers\AbstractSoldier;

abstract class AbstractBarrack {

    /**
     * @param string $soldier_name
     *   The name of the soldier.
     *
     * @return AbstractSoldier
     *   Return an AbstractSoldier resource.
     */
    abstract public function createSoldier($soldier_name): AbstractSoldier;
}