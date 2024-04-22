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

        return is_numeric($data) 
                && $data >= $min 
                && $data <= $max;
    }

    static public function email($data)
    {
        return filter_var($data, FILTER_VALIDATE_EMAIL);

        // if(!filter_var($data, FILTER_VALIDATE_EMAIL))
        // {
        //     return !true;
        // }else
        // {
        //     return !false;
        // }
    }
    static public function password($data)
    {
        // $pattern = '/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[\W_]).{8,}$/'; 
        // minimum length should be 8.
        // at least one uppercase letter.
        // at least one lowercase letter.
        // at least one digits, and
        // at least one special character.
  
        if (preg_match('/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[\W_]).{8,}$/', $data)) { 
            return true; 
        } else { 
            return false;
        } 
        
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