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
            $result = $test_word_frequency->wordFrequency();

            //Assert
            $this->assertEquals(1, $result);

        }

        function test_WordFrequency_checkforMoreThanOneWord()
        {
            //Arrange
            $user_input_one = "the cat walked the elephant and the other cat";
            $user_input_two = "cat";
            $test_word_frequency = new WordFrequency($user_input_one, $user_input_two);


            //Act
            $result = $test_word_frequency->wordFrequency();

            //Assert
            $this->assertEquals(2, $result);

        }

        function test_WordFrequency_checkforCapitalLetters()
        {
            //Arrange
            $user_input_one = "The cAt WaLked the elephant and the other Cat";
            $user_input_two = "cat";
            $test_word_frequency = new WordFrequency($user_input_one, $user_input_two);


            //Act
            $result = $test_word_frequency->wordFrequency();

            //Assert
            $this->assertEquals(2, $result);

        }

        function test_WordFrequency_checkforSymbols()
        {
            //Arrange
            $user_input_one = "The cAt WaLked the elephant and the other Cat.";
            $user_input_two = "cat";
            $test_word_frequency = new WordFrequency($user_input_one, $user_input_two);


            //Act
            $result = $test_word_frequency->wordFrequency();

            //Assert
            $this->assertEquals(2, $result);

        }
        function test_WordFrequency_checkforNumbers()
        {
            //Arrange
            $user_input_one = "th2e ca1t wa3lked the elep1hant and the ot8her c0at cat";
            $user_input_two = "cat";
            $test_word_frequency = new WordFrequency($user_input_one, $user_input_two);


            //Act
            $result = $test_word_frequency->wordFrequency();

            //Assert
            $this->assertEquals(3, $result);

        }
        function test_WordFrequency_checkforSymbolsandNumbers()
        {
            //Arrange
            $user_input_one = "th2e ca1t wa3lked the elep1hant and the ot8her c0at.";
            $user_input_two = "cat";
            $test_word_frequency = new WordFrequency($user_input_one, $user_input_two);


            //Act
            $result = $test_word_frequency->wordFrequency();

            //Assert
            $this->assertEquals(2, $result);

        }
    }
