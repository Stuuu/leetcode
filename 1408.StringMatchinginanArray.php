<?php
// Given an array of string words. Return all strings in words which is substring of another word in any order. 

// String words[i] is substring of words[j], if can be obtained removing some characters to left and/or right side of words[j].



// Example 1:

$words = ["mass", "as", "hero", "superhero"];
// Output: ["as","hero"]
// Explanation: "as" is substring of "mass" and "hero" is substring of "superhero".
// ["hero","as"] is also a valid answer.
// Example 2:

// $words = ["leetcode", "et", "code"];
// Output: ["et","code"]
// Explanation: "et", "code" are substring of "leetcode".
// Example 3:

// $words = ["leetcoder", "leetcode", "od", "hamlet", "am"];

// $words = ["blue", "green", "bu"];
// Output: []
// Constraints:

// 1 <= words.length <= 100
// 1 <= words[i].length <= 30
// words[i] contains only lowercase English letters.
// It's guaranteed that words[i] will be unique.
class Solution
{

    /**
     * @param String[] $words
     * @return String[]
     */
    function stringMatching($words)
    {
        $ans = [];

        foreach ($words as $k => $word) {

            foreach ($words as $k2 => $w2) {

                if ($k2 === $k) continue;
                if (str_contains($w2, $word)) {
                    $ans[$word] = $k;
                };
            }
        }
        return array_flip($ans);
    }
}
print_r((new Solution())->stringMatching($words));
