<?php

class Country
{
    public string $name;
    public int $totalGoldMedals;

    public function __construct(string $name, int $totalGoldMedals)
    {
        $this->name = $name;
        $this->totalGoldMedals = $totalGoldMedals;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return int
     */
    public function getTotalGoldMedals(): int
    {
        return $this->totalGoldMedals;
    }

    /**
     * @param int $totalGoldMedals
     */
    public function setTotalGoldMedals(int $totalGoldMedals): void
    {
        $this->totalGoldMedals = $totalGoldMedals;
    }


}