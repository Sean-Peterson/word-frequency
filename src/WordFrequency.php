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
        $check_against = explode(" ", $string);

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
