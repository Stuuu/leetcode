<?php
// There is a malfunctioning keyboard where some letter keys do not work. All other keys on the keyboard work properly.

// Given a string text of words separated by a single space (no leading or trailing spaces) and a string brokenLetters of all distinct letter keys that are broken, return the number of words in text you can fully type using this keyboard.



// Example 1:

$text = "hello world";
$brokenLetters = "ad";
// Output: 1
// Explanation: We cannot type "world" because the 'd' key is broken.
// Example 2:

// $text = "leet code";
// $brokenLetters = "lt";
// Output: 1
// Explanation: We cannot type "leet" because the 'l' and 't' keys are broken.
// Example 3:

// $text = "leet code";
// $brokenLetters = "e";
// Output: 0
// Explanation: We cannot type either word because the 'e' key is broken.
$brokenLetters = '';

// Constraints:

// 1 <= text.length <= 104
// 0 <= brokenLetters.length <= 26
// text consists of words separated by a single space without any leading or trailing spaces.
// Each word only consists of lowercase English letters.
// brokenLetters consists of distinct lowercase English letters.
class Solution
{

    /**
     * @param String $text
     * @param String $brokenLetters
     * @return Integer
     */
    function canBeTypedWords($text, $brokenLetters)
    {

        $text =  explode(' ', $text);
        $ans = count($text);
        if ($brokenLetters === '') return $ans;
        $b_ls = str_split($brokenLetters);

        foreach ($text as $key => $value) {

            foreach ($b_ls as $l) {
                if (str_contains($value, $l)) {
                    $ans--;
                    break 1;
                }
            }
        }
        return $ans;
    }
}
(new Solution())->canBeTypedWords($text, $brokenLetters);
