<?php

namespace App\Core;

use App\Sorter\Sorter;
use App\Sorter\LetterSortBehavior;

class Main
{
    /**
     * Undocumented variable
     *
     * @var string
     */
    protected $string;

    public function __construct()
    {
        $this->checkArgs();
        echo (new Sorter(new LetterSortBehavior()))->sort($this->string);
    }

    protected function checkArgs()
    {
        foreach ($_SERVER['argv'] as $arg) {
            $e = explode("=", $arg);
            if ($e[0] == 'string') {
                $this->string = $e[1];
                return true;
            }
        }

        throw new \Exception('Нет агрумента {string="qwerty"} для выполнения задачи');
    }
}
