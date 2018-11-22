<?php

namespace App\Sorter;

class Sorter
{
    /**
     * @var SortBehaviorInterface
     */
    protected $sortBehaviorInterface;

    public function __construct(SortBehaviorInterface $behavior)
    {
        $this->sortBehaviorInterface = $behavior;
    }

    public function sort(string $string): string
    {
        return $this->sortBehaviorInterface->sort($string);
    }
}
