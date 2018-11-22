<?php

namespace App\Test;

use PHPUnit\Framework\TestCase;
use App\Sorter\Sorter;
use App\Sorter\LetterSortBehavior;

class SorterTest extends TestCase
{
    /**
     * @dataProvider additionProvider
     */
    public function testLetterSortBehavior($string, $expected)
    {
        $sorter = new Sorter(new LetterSortBehavior());
        $this->assertEquals($expected, $sorter->sort($string));
    }

    public function additionProvider()
    {
        return [
            ["лимон апельсин банан яблоко", "илмно аеилнпсь аабнн бклооя"],
            ["Тут кваказябра", "Ой ошибка"],
            ["lemon orange banana apple", "elmno aegnor aaabnn aelpp"],
            ["αβγαβγ αβγαβγαβγ", "ααββγγ αααβββγγγ"],
            ["Тут тоже кваказябра", "Тут тоже кваказябра"],
        ];
    }
}
