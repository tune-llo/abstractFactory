<?php

namespace tune\AbstractFactory\barracks;

use tune\AbstractFactory\soldiers\AbstractSoldier;
use tune\AbstractFactory\soldiers\IroquisSoldier;

class IroquisBarrack extends AbstractBarrack{

    const population_name = 'Irochesi';

    /**
     * @inheritdoc
     */
    public function createSoldier($soldier_name): AbstractSoldier {
        // Todo: Testare se il tipo di ritorno 'AbstractSoldier' genera un errore.
        return new IroquisSoldier($soldier_name, self::population_name);
    }
}
