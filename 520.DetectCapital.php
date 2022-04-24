<?php
// We define the usage of capitals in a word to be right when one of the following cases holds:

//   All letters in this word are capitals, like "USA".
//   All letters in this word are not capitals, like "leetcode".
//   Only the first letter in this word is capital, like "Google".
//   Given a string word, return true if the usage of capitals in it is right.
  
   
  
//   Example 1:
  
$word = "USA";
//   Output: true
//   Example 2:
  
$word = "FlaG";
//   Output: false
   
  
//   Constraints:
  
//   1 <= word.length <= 100
//   word consists of lowercase and uppercase English letters.
class Solution
{

  /**
   * @param String $word
   * @return Boolean
   */
    public function detectCapitalUse($word)
    {
        $caps = range('A', 'Z');

        $w_parts = str_split($word);

        $non_caps = array_diff($w_parts, $caps);

        $nc_count = count($non_caps);

        //  all uppercase || all lowercase
        if ($nc_count === 0 || count($w_parts) === $nc_count) {
            return true;
        } elseif (((strlen($word) - $nc_count) === 1) && array_search($w_parts[0], $caps, true) !== false) {
            return true;
        }
        return false;
    }
}
// $word = "FFFFFFFFFFFFFFFFFFFFff";
var_dump((new Solution())->detectCapitalUse($word));
