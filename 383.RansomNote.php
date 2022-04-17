<?php
// Given two strings ransomNote and magazine, return true if ransomNote can be constructed from magazine and false otherwise.

// Each letter in magazine can only be used once in ransomNote.

 

// Example 1:

$ransomNote = "a"; $magazine = "b";
// Output: false
// Example 2:

$ransomNote = "aa"; $magazine = "ab";
// Output: false
// Example 3:

// $ransomNote = "aa"; $magazine = "aab";
// Output: true


// $ransomNote = "aab";
// $magazine = "baa";
// Output true;
 
// $ransomNote = "bg";
// $magazine = "efjbdfbdgfjhhaiigfhbaejahgfbbgbjagbddfgdiaigdadhcfcj";
// Output = true;

// Constraints:

// 1 <= ransomNote.length, magazine.length <= 105
// ransomNote and magazine consist of lowercase English letters.
class Solution
{

  /**
   * @param String $ransomNote
   * @param String $magazine
   * @return Boolean
   */
    public function canConstruct($ransomNote, $magazine)
    {
        $mag_count_bank = array_count_values(str_split($magazine));

        $ran_counts = array_count_values(str_split($ransomNote));

        foreach ($ran_counts as $char => $count) {
            if ($count > $mag_count_bank[$char]) {
                return false;
            }
        };
        return true;
    }
}
var_dump((new Solution())->canConstruct($ransomNote, $magazine));
