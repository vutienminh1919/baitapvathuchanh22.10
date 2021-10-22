<?php
include_once "Country.php";

class ListCountry
{

    public $array;

    public function __construct()
    {
        $this->array = [];
    }

    public function add($name, $goldMedals)
    {
        $country = new Country($name, $goldMedals);
        array_push($this->array, $country);

    }
    function sort()
    {
        for ($i = 0; $i < count($this->array); $i++) {
            for ($j = 0; $j < count($this->array) - $i - 1; $j++) {
                if ($this->array[$j]->totalGoldMedals > $this->array[$j + 1]->totalGoldMedals) {
                    $temp = $this->array[$j + 1];
                    $this->array[$j + 1] = $this->array[$j];
                    $this->array[$j] = $temp;
                }
            }
        }
        return $this->array;

    }

}