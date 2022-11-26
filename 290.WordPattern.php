<?php
// Given a pattern and a string s, find if s follows the same pattern.

// Here follow means a full match, such that there is a bijection between a letter in pattern and a non-empty word in s.



// Example 1:

// $pattern = "abba";
// $s = "dog cat cat dog";
// Output: true
// Example 2:

// $pattern = "abba";
// $s = "dog cat cat fish";
// Output: false
// Example 3:

// $pattern = "aaaa";
// $s = "dog cat cat dog";
// Output: false


// Constraints:

// 1 <= pattern.length <= 300
// pattern contains only lower-case English letters.
// 1 <= s.length <= 3000
// s contains only lowercase English letters and spaces ' '.
// s does not contain any leading or trailing spaces.
// All the words in s are separated by a single space.
class Solution
{

  /**
   * @param String $pattern
   * @param String $s
   * @return Boolean
   */
  function wordPattern($pattern, $s)
  {

    $s_parts = explode(' ', $s);
    $pattern_parts = str_split($pattern);

    if(count($s_parts) !== count($pattern_parts)){
      return false;
    }

    $pattern_to_word_mapping = [];
    foreach ($s_parts as $key => $word) {

      if (!isset($pattern_to_word_mapping[$pattern_parts[$key]])) {
        $pattern_to_word_mapping[$pattern_parts[$key]] = $word;
      }

      $mapping_count = count(array_keys($pattern_to_word_mapping, $word));

      if ($mapping_count === 0) {
        return false;
      }
      if ($mapping_count > 0) {
        if ($mapping_count > 1) {
          return false;
        }
        if ($word !== $pattern_to_word_mapping[$pattern_parts[$key]]) {
          return false;
        };

        continue;
      }
    }

    return true;
  }
}

$pattern = "abba";
$s = "dog dog dog dog";

// $pattern = "abc";
// $s = "dog cat dog";
var_dump((new Solution())->wordPattern($pattern, $s));
