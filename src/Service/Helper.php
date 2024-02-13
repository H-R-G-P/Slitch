<?php


namespace App\Service;


use App\Entity\PairOfWords;

class Helper
{
    /**
     * Comparing values of arrays case insensitive
     * @param array<string|PairOfWords> $array1
     * @param array<string> $array2
     * @param array<string> $array3
     * @return array<string|PairOfWords>
     */
    public function array_diff_inLowercase(array $array1, array $array2, array $array3) : array
    {
        $output = [];
        foreach ($array1 as $value) {
            $string = "$value";
            $string = preg_replace('/-/', '\-', $string);
            if (count(preg_grep('/^'.$string.'$/i', $array2)) === 0 &&
                count(preg_grep('/^'.$string.'$/i', $array3)) === 0)
            {
                $string = preg_replace('/\\\-/', '-', $value);
                if ($value instanceof PairOfWords) {
                    $value->setOriginal($string);
                    $output[] = $value;
                }else $output[] = $string;
            }
        }
        return $output;
    }

    public function array_uniqueCaseInsensitive(array $array) : array
    {
        $values = [];
        foreach ($array as $value) {
            if (count(preg_grep('/^'.$value.'$/i', $values)) !== 1)
            {
                $values[] = $value;
            }
        }
        return $values;
    }

    /**
     * Cut from text word and around symbols that have been max 110 symbols
     *
     * @param string $text
     * @param string $word
     *
     * @return string
     */
    public function getContext(string $text, string $word) : string
    {;
        if (preg_match("/^.{0,55}$word.{0,55}$/s", $text, $matches)) {
            return $matches[0];
        }elseif (preg_match("/^.{0,55}$word.{0,55}\s/s", $text, $matches)) {
            return preg_replace([
                "/\s$/"
            ], '', $matches[0]);
        }elseif (preg_match("/\s.{0,55}$word.{0,55}$/s", $text, $matches)) {
            return preg_replace([
                "/^\s/"
            ], '', $matches[0]);
        }elseif (preg_match("/\s.{0,55}$word.{0,55}\s/s", $text, $matches)) {
            return preg_replace([
                "/^\s/",
                "/\s$/",
            ], '', $matches[0]);
        }

        return '';
    }
}