<?php

class WordFrequency
{
    private $user_input_one;
    private $user_input_two;

    function __construct($string, $word)
    {
        $this->user_input_one = $string;
        $this->user_input_two = $word;
    }


    function wordFrequency(){
        $string = $this->user_input_one;
        $string = strtolower($string);
        $check = $this->user_input_two;
        $total = 0;
        $filter = str_split($string);
        $symbols_and_numbers_array = array('!', '@', '#', '$', '%', '^', '&', '*', '(', ')', '-', '_', '+', '=', '[', ']', '{', '}', ';', ':', '<', '>', ',', '.', '?', '/', '0', '1', '2', '3', '4', '5', '6', '7', '8', '9');
        $len_one = count($filter);
        $len_two = count($symbols_and_numbers_array);
        for($i = 0; $i < $len_one; $i++)
        {
            for($j = 0; $j < $len_two; $j++)
            {
                if ($filter[$i] == $symbols_and_numbers_array[$j])
                {
                    $filter[$i] = "";
                }
            }
        }
        $new_string = implode('' , $filter);

        $check_against = explode(" ", $new_string);
        foreach($check_against as $word)
        {
            if($word == $check)
            {
                $total = ($total + 1);
            }
        }
        return $total;
    }
}

?>
