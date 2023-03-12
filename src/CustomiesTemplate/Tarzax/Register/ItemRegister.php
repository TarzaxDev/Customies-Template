<?php

namespace CustomiesTemplate\Tarzax\Register;

use customiesdevs\customies\item\CustomiesItemFactory;
use CustomiesTemplate\Tarzax\Customies\Items\ItemExample;

class ItemRegister
{

    public function __construct()
    {
        CustomiesItemFactory::getInstance()->registerItem(ItemExample::class, "yourservername:example_item", "Example Item");
    }
}