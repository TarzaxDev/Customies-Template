<?php

namespace CustomiesTemplate\Tarzax;

use CustomiesTemplate\Tarzax\Register\BlockRegister;
use CustomiesTemplate\Tarzax\Register\EntityRegister;
use CustomiesTemplate\Tarzax\Register\ItemRegister;
use pocketmine\plugin\PluginBase;

class Main extends PluginBase
{

    protected function onEnable(): void
    {
        $this->getLogger()->notice("
     _______                       _____             
    |__   __|                     |  __ \            
       | | __ _ _ __ ______ ___  _| |  | | _____   __
       | |/ _` | '__|_  / _` \ \/ / |  | |/ _ \ \ / /
       | | (_| | |   / / (_| |>  <| |__| |  __/\ V / 
       |_|\__,_|_|  /___\__,_/_/\_\_____/ \___| \_/  
    https://github.com/TarzaxDev");

        new BlockRegister();
        new ItemRegister();
        new EntityRegister();
    }
}