<?php

namespace tune\AbstractFactory\barracks;

use tune\AbstractFactory\soldiers\AbstractSoldier;
use tune\AbstractFactory\soldiers\SpanishSoldier;

class SpanishBarrack extends AbstractBarrack {

    public function __construct() {
        parent::__construct('Spagnoli');
    }
    
    public function createSoldier($soldier_name): AbstractSoldier {
        return new SpanishSoldier('Rodelero', $this->getPopulationName());
    }
}
