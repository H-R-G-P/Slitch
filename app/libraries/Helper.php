<?php


class Helper
{
    /**
     * Comparing values of arrays in lower case
     * @param array $array1
     * @param array $array2
     * @param array $array3
     * @return array
     */
    public static function array_diff_inLowercase(array $array1, array $array2, array $array3) : array
    {
        $output = [];
        foreach ($array1 as $value) {
            $value = preg_replace('/-/', '\-', $value);
            if (count(preg_grep('/'.$value.'/i', $array2)) === 0 &&
                count(preg_grep('/'.$value.'/i', $array3)) === 0)
            {
                $output[] = preg_replace('/\\\-/', '-', $value);
            }
        }
        return $output;
    }

    public static function array_uniqueCaseInsensitive(array $array) : array
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
     * Simple page redirect
     * @param string $page Format: {controller}/{method}
     */
    public static function redirect(string $page) : void
    {
        header('location: '.URLROOT.'/'.$page);
    }
}