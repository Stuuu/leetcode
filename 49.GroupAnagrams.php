<?php
// Given an array of strings strs, group the anagrams together. You can return the answer in any order.

// An Anagram is a word or phrase formed by rearranging the letters of a different word or phrase, typically using all the original letters exactly once.



// Example 1:

$strs = ["eat","tea","tan","ate","nat","bat"];
// Output: [["bat"],["nat","tan"],["ate","eat","tea"]]
// Example 2:

$strs = [""];
// Output: [[""]]
// Example 3:

// $strs = ["a"];
// Output: [["a"]]


// Constraints:

// 1 <= strs.length <= 104
// 0 <= strs[i].length <= 100
// strs[i] consists of lowercase English letters.
class Solution
{

  /**
   * @param String[] $strs
   * @return String[][]
   */
    public function groupAnagrams($strs)
    {
        $ans = [];
        foreach ($strs as $k => $str) {
            $s_parts = str_split($str);
            sort($s_parts);

            $ans[implode('', $s_parts)][] = $str;
        }
        return $ans;
    }
}
print_r((new Solution())->groupAnagrams($strs));
