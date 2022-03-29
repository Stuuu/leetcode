<?php
// You are given a string s of even length. Split this string into two halves of equal lengths, and let a be the first half and b be the second half.

// Two strings are alike if they have the same number of vowels ('a', 'e', 'i', 'o', 'u', 'A', 'E', 'I', 'O', 'U'). Notice that s contains uppercase and lowercase letters.

// Return true if a and b are alike. Otherwise, return false.



// Example 1:

$s = "book";
// Output: true
// Explanation: a = "bo" and b = "ok". a has 1 vowel and b has 1 vowel. Therefore, they are alike.
// Example 2:

// $s = "textbook";
// Output: false
// Explanation: a = "text" and b = "book". a has 1 vowel whereas b has 2. Therefore, they are not alike.
// Notice that the vowel o is counted twice.


// Constraints:

// 2 <= s.length <= 1000
// s.length is even.
// s consists of uppercase and lowercase letters.
class Solution
{

    private const VOWELS = [
        'a',
        'e',
        'i',
        'o',
        'u',
    ];

    /**
     * @param String $s
     * @return Boolean
     */
    function halvesAreAlike($s)
    {
        $s = strtolower($s);

        $h_l = strlen($s) / 2;

        $h1 = 0;
        $h2 = 0;
        foreach (self::VOWELS as $vowel) {
            $h1 += substr_count($s, $vowel, 0, $h_l);
            $h2 += substr_count($s, $vowel, $h_l);
        }
        return ($h1 === $h2);
    }
}
var_dump((new Solution())->halvesAreAlike($s));
