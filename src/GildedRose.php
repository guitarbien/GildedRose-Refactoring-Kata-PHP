<?php

declare(strict_types=1);

namespace GildedRose;

use RuntimeException;

final class GildedRose
{
    public function __construct(private array $items)
    {
    }

    public function updateQuality(): void
    {
        foreach ($this->items as $item) {
            $className = match ($item->name) {
                'normal' => Normal::class,
                'Aged Brie' => AgedBrie::class,
                'Sulfuras, Hand of Ragnaros' => Sulfuras::class,
                'Backstage passes to a TAFKAL80ETC concert' => Backstage::class,
                default => throw new RuntimeException('Unknown item type'),
            };

            $newItem = new $className($item);
            $newItem->tick();
        }
    }
}
