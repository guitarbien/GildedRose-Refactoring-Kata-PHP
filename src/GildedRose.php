<?php

declare(strict_types=1);

namespace GildedRose;

final class GildedRose
{
    /**
     * @var Item[]
     */
    private $items;

    public function __construct(array $items)
    {
        $this->items = $items;
    }

    public function updateQuality(): void
    {
        foreach ($this->items as $item) {
            switch ($item->name) {
                case 'normal':
                    $normalItem = new Normal($item);
                    $normalItem->tick();
                    return;
                case 'Aged Brie':
                    $agedBrieItem = new AgedBrie($item);
                    $agedBrieItem->tick();
                    return;
                case 'Sulfuras, Hand of Ragnaros':
                    $sulfurasItem = new Sulfuras($item);
                    $sulfurasItem->tick();
                    return;
                case 'Backstage passes to a TAFKAL80ETC concert':
                    $backstageItem = new Backstage($item);
                    $backstageItem->tick();
                    return;
            }
        }
    }
}
