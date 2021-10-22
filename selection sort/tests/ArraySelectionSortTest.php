<?php
use PHPUnit\Framework\TestCase;
include_once "../src/index.php";
class ArraySelectionSortTest extends TestCase
{
    function test_is_my_array_sorted_or_not2(){
        $array = [1,6,0,8,-6,-88,10,9];
        $result = selectionSortSmallToBig($array);
        $expected = [-88,-6,0,1,6,8,9,10];
        $this->assertEquals($result,$expected);
    }
    function test_is_my_array_sorted_or_not3(){
        $array = [3,0,2.5,5,-1,4.5,1];
        $result = selectionSortSmallToBig($array);
        $expected = [-1,0,1,2.5,3,4.5,5];
        $this->assertEquals($expected,$result);
    }
    function test_is_my_array_sorted_or_not4(){
        $array = [1,7,11,0,-6,-50,2,6,90];
        $result = selectionSortSmallToBig($array);
        $expected = [-50,-6,0,1,2,6,7,11,90];
        $this->assertEquals($result,$expected);
    }
    function test_is_my_array_sorted_or_not5(){
        $array = [0,5,100,5,-7,-8,443,3,1,90];
        $result = selectionSortSmallToBig($array);
        $expected = [-8,-7,0,1,3,5,5,90,100,443];
        $this->assertEquals($result,$expected);
    }
    function test_is_my_array_sorted_or_not6(){
        $array = [5,8,10,77,4,3,8,9,7,4,3,2,4,6,5,4,4,3,2,4,6,85,7,4,3,2,6,8,4,0,6,5,46,0,4,45,6,3,3,6];
        $result = selectionSortSmallToBig($array);
        $expected = [0,0,2,2,2,3,3,3,3,3,3,4,4,4,4,4,4,4,4,4,5,5,5,6,6,6,6,6,6,7,7,8,8,8,9,10,45,46,77,85];
        $this->assertEquals($result,$expected);
    }
    function test_is_my_array_not_sorted(){
        $array = [3,0,2,5,-1,4,1];
        $result = selectionSortSmallToBig($array);
        $expected = [-1,0,2,1,3,4,5];
        $this->assertNotEquals(implode($result),implode($expected));
    }

}