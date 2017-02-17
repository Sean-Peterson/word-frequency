# _Word-Frequency_

#### _This web page allows a user to return a number equal to the amount of times a word is found in a sentence or paragraph, 17 February 2017_

#### By _**Sean Peterson**_


## Description

_Word-Frequency allows a user to enter a string, choose a word in that string and return a number value equal to the frequency of the word in the string._

## Setup/Installation Requirements

* In terminal run the following commands:

1. _Fork and clone this repository from_ [gitHub](https://github.com/Sean-Peterson/word-frequency).
2. Ensure [composer](https://getcomposer.org/) is installed on your computer.
3. Navigate to the root directory of the project in which ever CLI shell you are using and run the command: `composer install`.
4. To run tests enter `composer test` in terminal.
5. Create a local server in the /web directory within the project folder using the command: `php -S localhost:8000` (assuming you are using macOS - commands are different on other operating systems).
6. Open the directory http://localhost:8000/ in any standard web browser.

## Specifications

|    *Behavior*   |    *Input 1*    |    *Input 2*    |     *Output*    |
|-----------------|-----------------|-----------------|-----------------|-----------------|
| Count how many times input 2 is found in input 1  | "the cat walked the elephant" | "elephant" | 1 |
| Count how many times input 2 is found in input 1  | "the cat walked the elephant and the other cat" | "cat" | 2 |
| Account for capitalization.  | "The cAt WaLked the elephant and the other Cat" | "cat" | 2 |
| Account for symbols.  | "the cat walked the elephant and the other cat." | "cat" | 2 |
| Account for numbers.  | "th2e ca1t wa3lked the elep1hant and the ot8her c0at" | "cat" | 2 |
| Account for symbols and numbers.  | "th2e ca1t wa3lked the elep1hant and the ot8her c0at." | "cat" | 2 |

## Known Bugs

_None so far._

## Support and contact details

_Please contact seanpeterson11@gmail.com with concerns or comments._

## Technologies Used

* _HTML_
* _CSS_
* _PHP_
* _PHPUnit_
* _Composer_
* _Silex_
* _Twig_

### License

*MIT license*

Copyright (c) 2017 **_Sean Peterson_**
