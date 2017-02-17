<?php

    require_once "src/WordFrequency.php";

    class WordFrequency_test extends PHPUnit_Framework_TestCase
    {

        function test_WordFrequency_basic()
        {
            //Arrange
            $user_input_one = "the cat walked the elephant";
            $user_input_two = "elephant";
            $test_word_frequency = new WordFrequency($user_input_one, $user_input_two);


            //Act
            $result = $test_numbers_to_words->numbers_to_words();

            //Assert
            $this->assertEquals("", $result);

        }
    }
