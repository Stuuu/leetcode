<?php
// An alphabetical continuous string is a string consisting of consecutive letters in the alphabet. In other words, it is any substring of the string "abcdefghijklmnopqrstuvwxyz".

// For example, "abc" is an alphabetical continuous string, while "acb" and "za" are not.
// Given a string s consisting of lowercase letters only, return the length of the longest alphabetical continuous substring.



// Example 1:

$s = "abacaba";
// Output: 2
// Explanation: There are 4 distinct continuous substrings: "a", "b", "c" and "ab".
// "ab" is the longest continuous substring.
// Example 2:

// $s = "abcde";
// Output: 5
// Explanation: "abcde" is the longest continuous substring.


// Constraints:

// 1 <= s.length <= 105
// s consists of only English lowercase letters.

class Solution
{

  /**
   * @param String $s
   * @return Integer
   */
    public function longestContinuousSubstring($s)
    {
        $max_sub_str_length = 0;
        $current_sub_str_length_count = 0;
        $s_length = strlen($s);
        for ($i = 1; $i < $s_length; $i++) {
            $last_ord = ord($s[$i - 1]);
            $current_ord = ord($s[$i]);
            if ($current_ord === ($last_ord + 1)) {
                $current_sub_str_length_count++;
                continue;
            }

            if ($current_sub_str_length_count > $max_sub_str_length) {
                $max_sub_str_length = $current_sub_str_length_count;
            }
            $current_sub_str_length_count = 0;
        }
        // incase the entire string is in order
        if ($current_sub_str_length_count > $max_sub_str_length) {
            $max_sub_str_length = $current_sub_str_length_count;
        }

        return $max_sub_str_length + 1;
    }
}

// $s = "nkvexzqgctjxwqnzneuvtuvyvrmhfbawyabanxadvlzllpwnanjxyjhhzzjokcszjeooitnvadkuzsnklxriwo";

echo PHP_EOL . (new Solution())->longestContinuousSubstring($s);
