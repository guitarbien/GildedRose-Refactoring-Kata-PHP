<?php

namespace GildedRose;

class Backstage extends ItemUpdater
{
    public function tick(): void
    {
        $this->item->sellIn -= 1;
        if ($this->item->sellIn >= 50) {
            return;
        }

        if ($this->item->sellIn < 0) {
            $this->item->quality = 0;
            return;
        }

        if ($this->item->quality < 50) {
            $this->item->quality += 1;

            if ($this->item->sellIn < 10) {
                $this->item->quality += 1;
            }
            if ($this->item->sellIn < 5) {
                $this->item->quality += 1;
            }
        }
    }
}
