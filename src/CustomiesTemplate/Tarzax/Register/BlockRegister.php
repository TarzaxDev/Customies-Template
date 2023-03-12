<?php

namespace CustomiesTemplate\Tarzax\Register;

use customiesdevs\customies\block\CustomiesBlockFactory;
use customiesdevs\customies\block\Material;
use customiesdevs\customies\block\Model;
use customiesdevs\customies\item\CreativeInventoryInfo;
use pocketmine\block\Block;
use pocketmine\block\BlockBreakInfo;
use pocketmine\block\BlockIdentifier;
use pocketmine\math\Vector3;

class BlockRegister
{

    public function __construct()
    {
        $material = new Material(Material::TARGET_ALL, "example", Material::RENDER_METHOD_ALPHA_TEST);
        $model = new Model([$material], "geometry.block", new Vector3(-8, 0, -8), new Vector3(16, 16, 16));
        $creativeInfo = new CreativeInventoryInfo(CreativeInventoryInfo::CATEGORY_NATURE, CreativeInventoryInfo::GROUP_WOOD);
        CustomiesBlockFactory::getInstance()->registerBlock(fn(int $id) => new Block(new BlockIdentifier($id, 0), "Example Block", new BlockBreakInfo(1)), "yourservername:example_block", $model, $creativeInfo);
    }
}