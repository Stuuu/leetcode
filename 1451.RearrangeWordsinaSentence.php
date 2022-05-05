<?php
// Given a sentence text (A sentence is a string of space-separated words) in the following format:

//   First letter is in upper case.
//   Each word in text are separated by a single space.
//   Your task is to rearrange the words in text such that all words are rearranged in an increasing order of their lengths. If two words have the same length, arrange them in their original order.

//   Return the new text following the format shown above.



//   Example 1:

$text = "Leetcode is cool";
//   Output: "Is cool leetcode"
//   Explanation: There are 3 words, "Leetcode" of length 8, "is" of length 2 and "cool" of length 4.
//   Output is ordered by length and the new first word starts with capital letter.
//   Example 2:

// $text = "Keep calm and code on";
//   Output: "On and keep calm code"
//   Explanation: Output is ordered as follows:
//   "On" 2 letters.
//   "and" 3 letters.
//   "keep" 4 letters in case of tie order by position in original text.
//   "calm" 4 letters.
//   "code" 4 letters.
//   Example 3:

// $text = "To be or not to be";
//   Output: "To be or to be not"


//   Constraints:

//   text begins with a capital letter and then contains lowercase letters and single space between words.
//   1 <= text.length <= 10^5
/**
 * Solution
 *
 */
class Solution
{

  /**
   * @param String $text
   * @return String
   */
    public function arrangeWords($text)
    {
        $words = explode(' ', $text);
        $w_by_len_key = [];
        foreach ($words as $word) {
            $w_by_len_key[strlen($word)][] = strtolower($word);
        }
        ksort($w_by_len_key);
        $ans = '';
        foreach ($w_by_len_key as $w_len => $words_of_len) {
            $ans .= ' ' . implode(' ', $words_of_len);
        }
        $capital = strtoupper($ans[1]);
        return substr_replace($ans, $capital, 0, 2);
    }
}
(new Solution())->arrangeWords($text);
