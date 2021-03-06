<?php

namespace Heisenburger69\BurgerSpawners\Entities;

use pocketmine\entity\Monster;
use pocketmine\item\Item;

class PolarBear extends Monster {

    public const NETWORK_ID = self::POLAR_BEAR;

    public $width = 1.3;
    public $height = 1.4;

    public function getName(): string{
        return "Polar Bear";
    }

    public function initEntity(): void{
        $this->setMaxHealth(30);
        parent::initEntity();
    }

    public function getDrops(): array{
        return [
            Item::get(Item::RAW_SALMON, 0, mt_rand(0, 2)),
            Item::get(Item::RAW_FISH, 0, mt_rand(0, 2)),
        ];
    }
}