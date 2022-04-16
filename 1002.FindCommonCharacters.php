<?php
// Given a string array words, return an array of all characters that show up in all strings within the words (including duplicates). You may return the answer in any order.

// Example 1:

$words = ["bella","label","roller"];
// Output: ["e","l","l"]
// Example 2:

$words = ["cool","lock","cook"];
// Output: ["c","o"]
 

// Constraints:

// 1 <= words.length <= 100
// 1 <= words[i].length <= 100
// words[i] consists of lowercase English letters.
class Solution
{

  /**
   * @param String[] $words
   * @return String[]
   */
    public function commonChars($words)
    {
        $letters = str_split($words[0]);
        array_shift($words);
        $ans = [];
        foreach ($words as $word) {
            foreach ($letters as $letter) {
                $index = strpos($word, $letter);
                if ($index !== false) {
                    $ans[] = $letter;
                }
            }
        }
        print_r($ans);
    }
}
(new Solution())->commonChars($words);
