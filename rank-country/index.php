<?php
include_once "Country.php";
include_once "ListCountry.php";
$list = new ListCountry();
$list->add("VN",10);
$list->add("TL",7);
$list->add("ID",6);
$list->add("TQ",0);
$list->add("PHI",99);
$list->add("ML",100);
$list->add("AS",53);
$list->sort();
echo "<pre>";
print_r($list);





