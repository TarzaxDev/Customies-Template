<?php

namespace CustomiesTemplate\Tarzax\Customies\Entities;

use pocketmine\entity\Entity;
use pocketmine\entity\EntitySizeInfo;

class EntityExample extends Entity
{

    public static function getNetworkTypeId(): string {
        return "yourservername:example_entity";
    }

    // Size of entity
    public function getInitialSizeInfo(): EntitySizeInfo
    {
        return new EntitySizeInfo(0, 0);
    }
}