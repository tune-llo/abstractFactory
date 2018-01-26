<?php

namespace tune\AbstractFactory\barracks;

use tune\AbstractFactory\soldiers\AbstractSoldier;
use tune\AbstractFactory\soldiers\SpanishSoldier;

class SpanishBarrack extends AbstractBarrack {

    const population_name = 'Spagnoli';
    
    public function createSoldier($soldier_name): AbstractSoldier {
        return new SpanishSoldier('Rodelero', self::population_name);
    }
}
