<?php
// Given a string s, find the first non-repeating character in it and return its index. If it does not exist, return -1.



// Example 1:

// Input: s = "leetcode"
// Output: 0
// Example 2:

// Input: s = "loveleetcode"
// Output: 2
// Example 3:

// Input: s = "aabb"
// Output: -1


// Constraints:

// 1 <= s.length <= 105
// s consists of only lowercase English letters.
class Solution
{

    /**
     * @param string $s
     * @return integer
     */
    function firstUniqChar($s)
    {
        $l = strlen($s);
        $checked = [];
        for ($i = 0; $i < $l; $i++) {
            if (isset($checked[$s[$i]])) continue;
            $checked[$s[$i]] = 1;
            $c = substr_count($s, $s[$i]);
            if ($c === 1) return $i;
        }
        return -1;
    }
}


$s = "leetcode";
// Output: 0
// Example 2:

$s = "loveleetcode";
// Output: 2
// Example 3:

$s = "aabb";
// Output: -1
echo (new Solution())->firstUniqChar($s);
