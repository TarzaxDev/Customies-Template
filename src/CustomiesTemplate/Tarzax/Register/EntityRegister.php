<?php

namespace CustomiesTemplate\Tarzax\Register;

use customiesdevs\customies\entity\CustomiesEntityFactory;
use CustomiesTemplate\Tarzax\Customies\Entities\EntityExample;

class EntityRegister
{

    public function __construct()
    {
        CustomiesEntityFactory::getInstance()->registerEntity(EntityExample::class, "yourservername:example_entity");
    }
}