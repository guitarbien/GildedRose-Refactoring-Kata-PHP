<?php

declare(strict_types=1);

namespace GildedRose;

final class GildedRose
{
    private const SPECIALIZED_CLASSES = [
        'normal' => Normal::class,
        'Aged Brie' => AgedBrie::class,
        'Backstage passes to a TAFKAL80ETC concert' => Backstage::class,
        'Conjured Mana Cake' => Conjurd::class,
    ];

    public function __construct(private array $items)
    {
    }

    public function updateQuality(): void
    {
        foreach ($this->items as $item) {
            $className = self::SPECIALIZED_CLASSES[$item->name] ?? ItemUpdater::class;

            $newItem = new $className($item);
            $newItem->tick();
        }
    }
}
