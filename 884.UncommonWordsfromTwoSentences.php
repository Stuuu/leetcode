<?php
// A sentence is a string of single-space separated words where each word consists only of lowercase letters.

// A word is uncommon if it appears exactly once in one of the sentences, and does not appear in the other sentence.

// Given two sentences s1 and s2, return a list of all the uncommon words. You may return the answer in any order.



// Example 1:

// Input: s1 = "this apple is sweet", s2 = "this apple is sour"
// Output: ["sweet","sour"]
// Example 2:

// Input: s1 = "apple apple", s2 = "banana"
// Output: ["banana"]


// Constraints:

// 1 <= s1.length, s2.length <= 200
// s1 and s2 consist of lowercase English letters and spaces.
// s1 and s2 do not have leading or trailing spaces.
// All the words in s1 and s2 are separated by a single space.

class Solution
{

    /**
     * @param String $s1
     * @param String $s2
     * @return String[]
     */
    function uncommonFromSentences($s1, $s2)
    {
        $s1 = explode(' ', $s1);
        $s2 = explode(' ', $s2);
        $us1 = array_count_values($s1);
        $us2 = array_count_values($s2);

        $ans = [];
        foreach ($us1 as $word1 => $count1) {
            if ($count1 == 1 && !isset($us2[$word1])) {
                $ans[] = $word1;
            }
        }
        foreach ($us2 as $word2 => $count2) {
            if ($count2 == 1 && !isset($us1[$word2])) {
                $ans[] = $word2;
            }
        }
        return $ans;
    }
}

// $s1 = "this apple is sweet";
// $s2 = "this apple is sour";
// Output: ["sweet","sour"]
// Example 2:

$s1 = "apple apple";
$s2 = "banana";
// Output: ["banana"]
(new Solution())->uncommonFromSentences($s1, $s2);
