<?php


namespace App\Dto;


class TypeOfSortingDTO
{
    private bool $byQuantityRepeats = false;

    private bool $byTextOrder = false;

    public function setByQuantityRepeats(): void
    {
        $this->byQuantityRepeats = true;
        $this->byTextOrder = false;
    }

    /**
     * @return bool
     */
    public function isByQuantityRepeats(): bool
    {
        return $this->byQuantityRepeats;
    }

    public function setByTextOrder(): void
    {
        $this->byTextOrder = true;
        $this->byQuantityRepeats = false;
    }

    /**
     * @return bool
     */
    public function isByTextOrder(): bool
    {
        return $this->byTextOrder;
    }
}