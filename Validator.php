<?php


class Validator 
{



    static public function string($data, $min_len = 0, $max_len = INF)
    {
        $data = trim($data);

        return is_string($data) 
                && strlen($data) >= $min_len 
                && strlen($data) <= $max_len;

    }

    static public function number($data, $min = 0, $max = INF)
    {
        $data = trim($data);

        // if(!is_numeric($data) || $data < $min || $data > $max)
        // {
        //     return false;
        // }else
        // {
        //     return true;
        // }

        return is_numeric($data) 
                && $data >= $min 
                && $data <= $max;
    }

    static public function date($data)
    {
        if(empty($data))
        {
            return false;
        }
        else if(str_contains($data, '-'))
        {
            list($year, $month, $day) = explode('-', $data);
            return checkdate($month, $day, $year);
        }
        else
        {
            return false;
        }

    }
}