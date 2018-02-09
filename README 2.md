# Fullstack Developer Test
This is the test the full stack developer position at Smarterly.

All three parts of the test should be completed and should take no more than 30 minutes to an hour.

You may Google any terms or methods you're unfamiler with but try not to copy and paste code, if you need to use others examples or solutions you should rewrite this code in your own way so that you understand it. 

If any part of this test is tripping you up, move on, we'd rather see a you attempt at least some of all of the tasks. The most important is Part 4.

## Taking / Submitting the test
In order to take this test you should clone this repository into a GitHub repository, DO NOT FORK as other applications will see your code. Once you have completed all the tasks you can either add `waxim` as a collaborator to the new repository or email a link to alan.cole@smarterly.co.uk

## Part 1 - PHP
Inside the PHP folder is a file, this file queries a SQL table (sql file provided in `/php/data`)

The current SQL query in `php/index.php` should be updated to selected entries from the database using a calculation of distance form the given longitude and latitude in `$location` these results should be ordered by this distance. You should use a Haversine calculation.

The html table should be updated to display this calculation to the nearest metre.

__Assumptions__
- Assume the earth is a roughly a circle.
- Assume a radius of 6371 KM.

## Part 2 - CSS
You should edit the `index.html` and `style.css` files so a css only spinner in white appears in the middle of the page, centered vertically and horizontally with white text below saying please wait. The full page should have a black background.

You should modify the html to fit the current best practice / standards for a html document.

This is only required to work in modern browsers no fall backs need be considered.

## Part 3 - JavaScript, Form Validation
Update `javascript/index.html` so when our form is submitted the text in our textarea is validated. If validation fails the form should not submit and return an error. If it is valid then the form may proceed.

__Rules__
- May not be empty.
- May not be longer 255 characters.
- May not contain the word 'palindrome'
- May not be a palindrome.

## Part 4 - PHP, FizzBuzz
You should write a PHP library that uses composer to autoload and allows for the generation of a FizzBuzz to the nth number. This library should have  tests using PHP Unit to validate its results.

The rules of FizzBuzz are.

Write a script that counts from 1 to n and outputs the number, except in the following cases.

- If a number is divisible by 3 display "Fizz" instead.
- If a number is divisible by 5 display "Buzz" instead.
- If a number is divisible by 3 AND 5 display "FizzBuzz" instead.

An example run script might look like this. Obviously you're free to structure this library however you like and it doesn't need to match the example below unless you'd like it to.

```php
require "vendor/autoload.php";

$fizzbuzzer = new YourName\FizzBuzz(100); // fizzbuzz until 100
foreach ($fizzbuzzer->run() as $number) {
    print $number . EOL;
}
```

This task should be completed in the `fizzbuzz` folder. The library should be testable with the following command `$ ./vendor/bin/phpunit .`

# Part 5 - Optional, only if time allows.
Skipping this wont count against you but if you have time and would like you could make a modification to the FizzBuzz game above such that the game also follow this rule. 

- Ignore all fizzbuzz conditions if the number is prime, just display the number instead.

If you have time also look at a PHPUnit test for this condition. Again, this one is totally optional.
