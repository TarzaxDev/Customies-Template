<?php

namespace CustomiesTemplate\Tarzax\Customies\Items;

use customiesdevs\customies\item\component\AllowOffHandComponent;
use customiesdevs\customies\item\component\MaxStackSizeComponent;
use customiesdevs\customies\item\CreativeInventoryInfo;
use customiesdevs\customies\item\ItemComponents;
use customiesdevs\customies\item\ItemComponentsTrait;
use pocketmine\item\Item;
use pocketmine\item\ItemIdentifier;

class ItemExample extends Item implements ItemComponents
{
    use ItemComponentsTrait;

    public function __construct(ItemIdentifier $identifier, string $name = "Unknown")
    {
        parent::__construct($identifier, $name);
        $creativeInfo = new CreativeInventoryInfo(CreativeInventoryInfo::CATEGORY_ITEMS, CreativeInventoryInfo::NONE);
        $this->initComponent("example_item", $creativeInfo, 64);
        // https://github.com/CustomiesDevs/Customies/wiki/Custom-Items#regulating-held-item-scale
        $this->setupRenderOffsets(32, 32, true);
    }
}
