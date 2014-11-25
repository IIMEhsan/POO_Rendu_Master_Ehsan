# Rendu_Master_POO
[![Build Status](https://scrutinizer-ci.com/g/IIMEhsan/Rendu_Master_POO/badges/build.png?b=master)](https://scrutinizer-ci.com/g/IIMEhsan/Rendu_Master_POO/build-status/master)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/IIMEhsan/Rendu_Master_POO/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/IIMEhsan/Rendu_Master_POO/?branch=master)

*Rendu_Master_POO is a small library that allow you to validate lots of data like integer, string, boolean, array and DateTime.
Rendu_Master_POO is simply to use, just call the method which correspond to your validation wishes and see if you're good or not.*

*All methods return true if the validation is validate and false if it isn't.*

## How it works
Some usage examples of the library

********************************************
#### IntegerRendu_Master_POO
********************************************
List of IntegerRendu_Master_POO methods :
  - isEqual()
  - isSuperior()
  - isInferior()
  - isBetween()
  - isNegative()
  - isPositive()

```php
<?php
// Here we check if the integer is equal to number 13
$validation = \IIMEhsan\Rendu_Master_POO\IntegerRendu_Master_POO::isEqual($integer, 13);

// Here we check if the integer is superior to number 50
$validation = \IIMEhsan\Rendu_Master_POO\IntegerRendu_Master_POO::isSuperior($integer, 50);

// Here we check if the integer is inferior to number 200
$validation = \IIMEhsan\Rendu_Master_POO\IntegerRendu_Master_POO::isInferior($integer, 200);

// Here we check if the integer is between number 10 and 100
$validation = \IIMEhsan\Rendu_Master_POO\IntegerRendu_Master_POO::isInferior($integer, 10, 100);

// Here we check if the integer is positive
$validation = \IIMEhsan\Rendu_Master_POO\IntegerRendu_Master_POO::isPositive($integer);

// Here we check if the integer is negative
$validation = \IIMEhsan\Rendu_Master_POO\IntegerRendu_Master_POO::isNegative($integer);

// Debug $validation to see the result
var_dump($validation);

```
***********************************************
#### BooleanRendu_Master_POO
***********************************************
List of BooleanRendu_Master_POO methods :
  - isTrue()
  - isFalse()

```php
<?php

// Here we check if the boolean is true
$validation = \IIMEhsan\Rendu_Master_POO\BooleanRendu_Master_POO::isTrue($boolean);

// Here we check if the boolean is false
$validation = \IIMEhsan\Rendu_Master_POO\BooleanRendu_Master_POO::isTrue($boolean);

// Debug $validation to see the result
var_dump($validation);

```
*************************************************
#### StringRendu_Master_POO
*************************************************
List of StringRendu_Master_POO methods :
  - lengthIsEqualTo()
  - lengthIsSuperiorTo()
  - lengthIsInferiorTo()
  - lengthBetween()
  - noWhiteSpaceBeginAndEnd()
  - noWhiteSpace()

```php
<?php

// Here we check if the string length is equal to 120
$validation = \IIMEhsan\Rendu_Master_POO\StringRendu_Master_POO::lengthIsSuperiorTo($string, 120);

// Here we check if the string length is between 30 and 100
$validation = \IIMEhsan\Rendu_Master_POO\StringRendu_Master_POO::lengthIsSuperiorTo($string, 30, 100);

// Here we check if the string length is superior to 25
$validation = \IIMEhsan\Rendu_Master_POO\StringRendu_Master_POO::lengthIsSuperiorTo($string, 25);

// Here we check if the string length is inferior to 30
$validation = \IIMEhsan\Rendu_Master_POO\StringRendu_Master_POO::lengthIsInferiorTo($string, 30);

// Here we check if the string has not whitespaces at the beginning and at the end
$validation = \IIMEhsan\Rendu_Master_POO\StringRendu_Master_POO::noWhiteSpaceBeginAndEnd($string);

// Here we check if the string has not whitespaces
$validation = \IIMEhsan\Rendu_Master_POO\StringRendu_Master_POO::noWhiteSpace($string);

// Debug $validation to see the result
var_dump($validation);

```

*************************************************
#### ArrayRendu_Master_POO
*************************************************
List of ArrayRendu_Master_POO methods :
  - isEmpty()
  - numberElements()
  - getElementsBetween()
  - keyExists()
  - valueExists()

```php
<?php

// Here we check if the array is empty
$validation = \IIMEhsan\Rendu_Master_POO\ArrayRendu_Master_POO::isEmpty($array);

// Here we check how many elements there are in the array
$validation = \IIMEhsan\Rendu_Master_POO\ArrayRendu_Master_POO::numberElements($array);

// Here we check if there are elements between the bornes
$validation = \IIMEhsan\Rendu_Master_POO\ArrayRendu_Master_POO::getElementsBetween($array, $from, $to);

// Here we check if the key exists in the array
$validation = \IIMEhsan\Rendu_Master_POO\ArrayRendu_Master_POO::keyExists($array, $key);

// Here we check if the value exists in the array
$validation = \IIMEhsan\Rendu_Master_POO\ArrayRendu_Master_POO::valueExists($array, $value);


// Debug $validation to see the result
var_dump($validation);

