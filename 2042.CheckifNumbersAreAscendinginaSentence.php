<?php
// A sentence is a list of tokens separated by a single space with no leading or trailing spaces. Every token is either a positive number consisting of digits 0-9 with no leading zeros, or a word consisting of lowercase English letters.

// For example, "a puppy has 2 eyes 4 legs" is a sentence with seven tokens: "2" and "4" are numbers and the other tokens such as "puppy" are words.
// Given a string s representing a sentence, you need to check if all the numbers in s are strictly increasing from left to right (i.e., other than the last number, each number is strictly smaller than the number on its right in s).

// Return true if so, or false otherwise.



// Example 1:

// example-1
$s = "1 box has 3 blue 4 red 6 green and 12 yellow marbles";
// Output: true
// Explanation: The numbers in s are: 1, 3, 4, 6, 12.
// They are strictly increasing from left to right: 1 < 3 < 4 < 6 < 12.
// Example 2:

// $s = "hello world 5 x 5";
// Output: false
// Explanation: The numbers in s are: 5, 5. They are not strictly increasing.
// Example 3:

// example-3
// $s = "sunset is at 7 51 pm overnight lows will be in the low 50 and 60 s";
// Output: false
// Explanation: The numbers in s are: 7, 51, 50, 60. They are not strictly increasing.
// $s = "48 lay 49 press spell 48 51 52 lead 53 54 55 56 tap 57 58 59 rip broad 60 61 watch 62 glad";


// Constraints:

// 3 <= s.length <= 200
// s consists of lowercase English letters, spaces, and digits from 0 to 9, inclusive.
// The number of tokens in s is between 2 and 100, inclusive.
// The tokens in s are separated by a single space.
// There are at least two numbers in s.
// Each number in s is a positive number less than 100, with no leading zeros.
// s contains no leading or trailing spaces.
class Solution
{

    /**
     * @param String $s
     * @return Boolean
     */
    function areNumbersAscending($s)
    {
        $nums = preg_replace('/[^0-9]/', ' ', $s);
        $nums = preg_replace('/\s+/', ' ', $nums);
        $nums = trim($nums);
        $nums = explode(' ', $nums);

        foreach ($nums as $key => $num) {
            if (isset($nums[$key + 1]) && $num >= $nums[$key + 1]) return false;
        }

        return true;
    }
}
var_dump((new Solution())->areNumbersAscending($s));
