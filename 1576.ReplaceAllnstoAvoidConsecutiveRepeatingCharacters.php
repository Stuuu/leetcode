<?php
// Given a string s containing only lowercase English letters and the '?' character, convert all the '?' characters into lowercase letters such that the final string does not contain any consecutive repeating characters. You cannot modify the non '?' characters.

// It is guaranteed that there are no consecutive repeating characters in the given string except for '?'.

// Return the final string after all the conversions (possibly zero) have been made. If there is more than one solution, return any of them. It can be shown that an answer is always possible with the given constraints.

 

// Example 1:

$s = "?zs";
// Output: "azs"
// Explanation: There are 25 solutions for this problem. From "azs" to "yzs", all are valid. Only "z" is an invalid modification as the string will consist of consecutive repeating characters in "zzs".
// Example 2:

$s = "ubv?w";
// Output: "ubvaw"
// Explanation: There are 24 solutions for this problem. Only "v" and "w" are invalid modifications as the strings will consist of consecutive repeating characters in "ubvvw" and "ubvww".
 
$s = '???????????????';

// Constraints:

// 1 <= s.length <= 100
// s consist of lowercase English letters and '?'.
class Solution
{

  /**
   * @param String $s
   * @return String
   */
    public function modifyString($s)
    {
        $alpha = range('a', 'z');

        $s_parts = str_split($s);

        $q_mark_locales = array_diff($s_parts, $alpha);

        foreach ($q_mark_locales as $k => $q_loc) {
            $selection = $alpha;
            $left = array_search($s_parts[$k - 1], $selection);
            $right = array_search($s_parts[$k + 1], $selection);

            if ($left !== false) {
                unset($selection[$left]);
            }
            if ($right !== false) {
                unset($selection[$right]);
            }


            $s_parts[$k] = $selection[array_rand($selection)];
        }

        return implode($s_parts);
    }
}
echo (new Solution())->modifyString($s);
