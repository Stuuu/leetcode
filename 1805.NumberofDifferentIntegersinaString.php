<?php
// You are given a string word that consists of digits and lowercase English letters.

// You will replace every non-digit character with a space. For example, "a123bc34d8ef34" will become " 123  34 8  34". Notice that you are left with some integers that are separated by at least one space: "123", "34", "8", and "34".

// Return the number of different integers after performing the replacement operations on word.

// Two integers are considered different if their decimal representations without any leading zeros are different.

// Example 1:

$word = "a123bc34d8ef34";
// Output: 3
// Explanation: The three different integers are "123", "34", and "8". Notice that "34" is only counted once.
// Example 2:

// $word = "leet1234code234";
// Output: 2
// Example 3:

$word = "a1b01c001";
// Output: 1
// Explanation: The three integers "1", "01", and "001" all represent the same integer because
// the leading zeros are ignored when comparing their decimal values.

$word = "gi851a851q8510v";
// Output: 2

// Constraints:

// 1 <= word.length <= 1000
// word consists of digits and lowercase English letters.
class Solution
{

  /**
   * @param String $word
   * @return Integer
   */
    public function numDifferentIntegers($word)
    {
        $w_parts = str_split($word);

        $nums = [];
        $i = 0;

        foreach ($w_parts as $item) {
            $ascii_val = ord($item);
            if ($ascii_val >= 48 && $ascii_val < 58) {
                if (isset($nums[$i])) {
                    $nums[$i] .= $item;
                } else {
                    $nums[$i] = $item;
                }
                continue;
            }
            $i++;
        }
        foreach ($nums as &$num) {
            $num = ltrim($num, 0);
        }
        return count(array_flip($nums));
    }
}
echo (new Solution())->numDifferentIntegers($word);
