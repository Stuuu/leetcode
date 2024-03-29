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

// $word = "FlaG";
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
        //   All letters in this word are capitals, like "USA".
        if ($word === strtoupper($word)) {
            return true;
        }
        //   All letters in this word are not capitals, like "leetcode".
        if ($word === strtolower($word)) {
            return true;
        }
        //   Only the first letter in this word is capital, like "Google".
        $right_word = ucfirst(strtolower($word));
        if ($word === $right_word) {
            return true;
        }
        return false;
    }
}
// $word = "FFFFFFFFFFFFFFFFFFFFff";
var_dump((new Solution())->detectCapitalUse($word));
