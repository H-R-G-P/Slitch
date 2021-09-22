<?php


namespace App\Service;


class Helper
{
    /**
     * Comparing values of arrays case insensitive
     * @param array $array1
     * @param array $array2
     * @param array $array3
     * @return array
     */
    public function array_diff_inLowercase(array $array1, array $array2, array $array3) : array
    {
        $output = [];
        foreach ($array1 as $value) {
            $value = preg_replace('/-/', '\-', $value);
            if (count(preg_grep('/^'.$value.'$/i', $array2)) === 0 &&
                count(preg_grep('/^'.$value.'$/i', $array3)) === 0)
            {
                $output[] = preg_replace('/\\\-/', '-', $value);
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
    {
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