<?php
// Given an array of strings words, return the words that can be typed using letters of the alphabet on only one row of American keyboard like the image below.

// In the American keyboard:

// the first row consists of the characters "qwertyuiop",
// the second row consists of the characters "asdfghjkl", and
// the third row consists of the characters "zxcvbnm".



// Example 1:

$words = ["Hello", "Alaska", "Dad", "Peace"];
// Output: ["Alaska","Dad"]
// Example 2:

// $words = ["omk"];
// Output: []
// Example 3:

// $words = ["adsdf", "sfd"];
// Output: ["adsdf","sfd"]


// Constraints:

// 1 <= words.length <= 20
// 1 <= words[i].length <= 100
// words[i] consists of English letters (both lowercase and uppercase). 
class Solution
{

    public function __construct()
    {
        $this->rows = [
            str_split("qwertyuiop"),
            str_split("asdfghjkl"),
            str_split("zxcvbnm"),
        ];
    }

    /**
     * @param String[] $words
     * @return String[]
     */
    function findWords($words)
    {
        $ans = [];
        foreach ($words as $k => $word) {

            $w_parts = str_split(strtolower($word));
            foreach ($this->rows as $key_row) {
                if (count(array_diff($w_parts, $key_row)) === 0) {
                    $ans[] = $word;
                    break 1;
                };
            }
        }
        return $ans;
    }
}
(new Solution())->findWords($words);
