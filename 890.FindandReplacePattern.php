<?php
// Given a list of strings words and a string pattern, return a list of words[i] that match pattern. You may return the answer in any order.

// A word matches the pattern if there exists a permutation of letters p so that after replacing every letter x in the pattern with p(x), we get the desired word.

// Recall that a permutation of letters is a bijection from letters to letters: every letter maps to another letter, and no two letters map to the same letter.



// Example 1:

$words = ["abc", "deq", "mee", "aqq", "dkd", "ccc"];
$pattern = "abb";
// Output: ["mee","aqq"]
// Explanation: "mee" matches the pattern because there is a permutation {a -> m, b -> e, ...}.
// "ccc" does not match the pattern because {a -> c, b -> c, ...} is not a permutation, since a and b map to the same letter.
// Example 2:

$words = ["a", "b", "c"];
$pattern = "a";
// Output: ["a","b","c"]


// Constraints:

// 1 <= pattern.length <= 20
// 1 <= words.length <= 50
// words[i].length == pattern.length
// pattern and words[i] are lowercase English letters.
class Solution
{

  /**
   * @param String[] $words
   * @param String $pattern
   * @return String[]
   */
  function findAndReplacePattern($words, $pattern)
  {
    $encodeded_pattern = self::encodePattern($pattern);


    $ans = [];
    $pattern_len = strlen($pattern);
    foreach ($words as $word) {

      if ($pattern_len !== strlen($word)) {
        continue;
      }

      if ($encodeded_pattern === self::encodePattern($word)) {
        $ans[] = $word;
      }
    }
    return $ans;
  }
  private static function encodePattern(string $chars)
  {
    $c_parts = str_split($chars);
    $pattern = '';
    foreach ($c_parts as $k => $char) {
      if ($k === 0) {
        $pattern .= 0;
        continue;
      }

      if ($c_parts[$k - 1] === $char) {
        $pattern .= substr($pattern, -1);
        continue;
      }

      $pattern .= array_search($char, $c_parts);
    }

    return $pattern;
  }
}

$words = ["abc", "cba", "xyx", "yxx", "yyx"];
$pattern = "abc";
print_r((new Solution())->findAndReplacePattern($words, $pattern));
