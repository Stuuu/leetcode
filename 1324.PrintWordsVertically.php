<?php
// Given a string s. Return all the words vertically in the same order in which they appear in s.
// Words are returned as a list of strings, complete with spaces when is necessary. (Trailing spaces are not allowed).
// Each word would be put on only one column and that in one column there will be only one word.

 

// Example 1:

// Input: s = "HOW ARE YOU"
// Output: ["HAY","ORO","WEU"]
// Explanation: Each word is printed vertically.
//  "HAY"
//  "ORO"
//  "WEU"
// Example 2:

$s = "TO BE OR NOT TO BE";
// Output: ["TBONTB","OEROOE","   T"]
// Explanation: Trailing spaces is not allowed.
// "TBONTB"
// "OEROOE"
// "   T"
// Example 3:

// $s = "CONTEST IS COMING";
// Output: ["CIC","OSO","N M","T I","E N","S G","T"]
 

// Constraints:

// 1 <= s.length <= 200
// s contains only upper case English letters.
// It's guaranteed that there is only one space between 2 words.
class Solution
{

  /**
   * @param String $s
   * @return String[]
   */
    public function printVertically($s)
    {
        $s_parts = explode(' ', $s);
        $longest_word =  max(array_map('strlen', $s_parts));

        $ans =[];
        foreach ($s_parts as $k => $word) {
            for ($i=0; $i < $longest_word ; $i++) {
                $ans[$i] .= isset($word[$i]) ? $word[$i] : ' ';
            }
        }
        return array_map('rtrim', $ans);
    }
}
var_dump((new Solution())->printVertically($s));
