<?php
// You are given two strings order and s. All the words of order are unique and were sorted in some custom order previously.

// Permute the characters of s so that they match the order that order was sorted. More specifically, if a character x occurs before a character y in order, then x should occur before y in the permuted string.

// Return any permutation of s that satisfies this property.

 

// Example 1:

$order = "cba"; $s = "abcd";
// Output: "cbad"
// Explanation:
// "a", "b", "c" appear in order, so the order of "a", "b", "c" should be "c", "b", and "a".
// Since "d" does not appear in order, it can be at any position in the returned string. "dcba", "cdba", "cbda" are also valid outputs.
// Example 2:

// $order = "cbafg"; $s = "abcd";
// Output: "cbad"
 

// Constraints:

// 1 <= order.length <= 26
// 1 <= s.length <= 200
// order and s consist of lowercase English letters.
// All the characters of order are unique.
class Solution
{

  /**
   * @param String $order
   * @param String $s
   * @return String
   */
    public function customSortString($order, $s)
    {
        $o_parts = str_split($order);
        $s_vals = array_count_values(str_split($s));

        $ordered = '';
        foreach ($o_parts as $char) {
            if (isset($s_vals[$char])) {
                $ordered .= str_repeat($char, $s_vals[$char]);
                unset($s_vals[$char]);
            }
        }

        foreach ($s_vals as $char2 => $c2) {
            $ordered .= str_repeat($char2, $c2);
        }
        return $ordered;
    }
}
echo (new Solution())->customSortString($order, $s);
