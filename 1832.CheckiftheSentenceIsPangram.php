<?php
// A pangram is a sentence where every letter of the English alphabet appears at least once.

// Given a string sentence containing only lowercase English letters, return true if sentence is a pangram, or false otherwise.



// Example 1:

// Input: sentence = "thequickbrownfoxjumpsoverthelazydog"
// Output: true
// Explanation: sentence contains at least one of every letter of the English alphabet.
// Example 2:

// Input: sentence = "leetcode"
// Output: false


// Constraints:

// 1 <= sentence.length <= 1000
// sentence consists of lowercase English letters.
class Solution
{

    /**
     * @param String $sentence
     * @return Boolean
     */
    function checkIfPangram($sentence)
    {
        return (count(array_count_values(str_split($sentence))) == 26);
    }
}

$sentence = "thequickbrownfoxjumpsoverthelazydog";
// Output: true
// Explanation: sentence contains at least one of every letter of the English alphabet.
// Example 2:

$sentence = "leetcode";
// Output: false
var_dump((new Solution())->checkIfPangram($sentence));
