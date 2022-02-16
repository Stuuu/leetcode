<?php

// Write a function to find the longest common prefix string amongst an array of strings.

// If there is no common prefix, return an empty string "".



// Example 1:

// Input: strs = ["flower","flow","flight"]
// Output: "fl"
// Example 2:

// Input: strs = ["dog","racecar","car"]
// Output: ""
// Explanation: There is no common prefix among the input strings.


// Constraints:

// 1 <= strs.length <= 200
// 0 <= strs[i].length <= 200
// strs[i] consists of only lower-case English letters.
class Solution
{

    /**
     * @param String[] $strs
     * @return String
     */
    function longestCommonPrefix(array $strs)
    {

        $num_strings = count($strs);


        $one_long_string = implode('|', $strs);
        $one_long_string = '|' . $one_long_string;

        // Grab first word in series
        $first_word_chars = str_split($strs[0]);
        $first_word_length = strlen($strs[0]);

        if ($num_strings == 1 || ($first_word_length == 0)) {
            return $strs[0];
        }

        $longest_matching_sub_string = '';
        for ($i = 0; $i <= $first_word_length; $i++) {

            $prefix_to_check = implode("", array_slice($first_word_chars, 0, $i + 1));

            $match_count = substr_count($one_long_string, "|" . $prefix_to_check);


            if ($match_count != $num_strings) {
                // return $longest_matching_sub_string;
                break;
            } else {
                $longest_matching_sub_string = $prefix_to_check;
            }
        }

        return $longest_matching_sub_string;
    }
}


// $strs = ["flower", "flow", "flight"];
// $strs = ["dog", "racecar", "car"];
// $strs = ["", ""];
$strs = ["flower", "flower", "flower", "flower"];
echo (new Solution())->longestCommonPrefix($strs);
