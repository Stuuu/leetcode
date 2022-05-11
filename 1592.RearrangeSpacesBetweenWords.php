<?php
// You are given a string text of words that are placed among some number of spaces. Each word consists of one or more lowercase English letters and are separated by at least one space. It's guaranteed that text contains at least one word.

// Rearrange the spaces so that there is an equal number of spaces between every pair of adjacent words and that number is maximized. If you cannot redistribute all the spaces equally, place the extra spaces at the end, meaning the returned string should be the same length as text.

// Return the string after rearranging the spaces.



// Example 1:

$text = "  this   is  a sentence ";
// Output: "this   is   a   sentence"
// Explanation: There are a total of 9 spaces and 4 words. We can evenly divide the 9 spaces between the words: 9 / (4-1) = 3 spaces.
// Example 2:

// $text = " practice   makes   perfect";
// Output: "practice   makes   perfect "
// Explanation: There are a total of 7 spaces and 3 words. 7 / (3-1) = 3 spaces plus 1 extra space. We place this extra space at the end of the string.


// Constraints:

// 1 <= text.length <= 100
// text consists of lowercase English letters and ' '.
class Solution
{

  /**
   * @param String $text
   * @return String
   */
    public function reorderSpaces($text)
    {
        $word_count = str_word_count($text);
        $space_count = substr_count($text, ' ');

        if ($word_count === 1) {
            return trim($text) . str_repeat(' ', $space_count);
        }

        $spaces_per_word = floor($space_count / ($word_count -1));

        $words = preg_split('/\s+/', $text, -1, PREG_SPLIT_NO_EMPTY);

        $ans = '';
        foreach ($words as $word) {
            $ans .= $word . str_repeat(' ', $spaces_per_word);
        }
        $extra_space_count = $space_count - ($spaces_per_word * ($word_count -1));
        return trim($ans) . str_repeat(' ', $extra_space_count);
    }
}


$text = "a b   c d";
// Output = "a b c d  "
var_dump((new Solution())->reorderSpaces($text));
