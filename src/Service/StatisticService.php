<?php


namespace App\Service;


class StatisticService
{
    /**
     * @param array $arrayWithArrays
     *
     * @return array
     */
    public static function intersect(array $arrayWithArrays): array
    {
        $resultArray = $arrayWithArrays[0];
        for ($i = 1; $i < count($arrayWithArrays); $i++){
            $resultArray = array_intersect($resultArray, $arrayWithArrays[$i]);
        }

        return array_unique($resultArray);
    }

    /**
     * @param string[] $array
     *
     * @return array<string, int>
     */
    public static function countRepeats(array $array): array
    {
        $result = [];

        foreach ($array as $str) {
            if (array_key_exists($str, $result)){
                $result[$str] += 1;
            }else{
                $result[$str] = 1;
            }
        }

        return $result;
    }

    /**
     * @param array<string, int> $array1
     * @param array<string, int> $array2
     *
     * @return array<string, int>
     */
    public static function merge(array $array1, array $array2): array
    {
        foreach ($array2 as $str => $int) {
            if (array_key_exists($str, $array1)){
                $array1[$str] += $int;
                unset($array2[$str]);
            }else{
                $array1[$str] = $int;
                unset($array2[$str]);
            }
        }
        foreach ($array1 as $str => $int) {
            if (array_key_exists($str, $array2)){
                $array2[$str] += $int;
            }else{
                $array2[$str] = $int;
            }
        }

        return $array1;
    }

    /**
     * Return sum integers of same strings in both arrays
     *
     * @param array<string, int> $array1
     * @param string[] $array2
     *
     * @return int
     */
    public static function getSum(array $array1, array $array2): int
    {
        $count = 0;

        foreach ($array1 as $str => $cnt) {
            if (in_array($str, $array2, true)){
                $count += $cnt;
            }
        }

        return $count;
    }
}