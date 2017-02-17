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
        $punctuation = str_split($string);
        $punctuation_array = array('!', '@', '#', '$', '%', '^', '&', '*', '(', ')', '-', '_', '+', '=', '[', ']', '{', '}', ';', ':', '<', '>', ',', '.', '?', '/');
        $len_one = count($punctuation);
        $len_two = count($punctuation_array);
        for($i = 0; $i < $len_one; $i++)
        {
            for($j = 0; $j < $len_two; $j++)
            {
                if ($punctuation[$i] == $punctuation_array[$j])
                {
                    $punctuation[$i] = "";
                }
            }
        }
        $new_string = implode('' , $punctuation);

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
