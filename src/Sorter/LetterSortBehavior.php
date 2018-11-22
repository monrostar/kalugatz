<?php

namespace App\Sorter;

/**
 * Undocumented class
 */
class LetterSortBehavior implements SortBehaviorInterface
{
    /**
     * Undocumented function
     *
     * @param string $string
     * @return string
     */
    public function sort(string $string) : string
    {
        mb_internal_encoding('utf-8');

        $words = [];
        foreach (explode(' ', $string) as $word) {
            $words[] = $this->sortWord($word);
        }

        return implode(' ', $words);
    }

    /**
     * Undocumented function
     *
     * @param string $word
     * @return string
     */
    protected function sortWord(string $word): string
    {
        $arr = [];
        while ($strlen = mb_strlen($word)) {
            $arr[] = mb_substr($word, 0, 1);
            $word = mb_substr($word, 1, $strlen);
        }
        sort($arr);

        return join($arr);
    }
}
