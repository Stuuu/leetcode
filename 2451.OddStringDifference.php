<?php

// You are given an array of equal-length strings words. Assume that the length of each string is n.

// Each string words[i] can be converted into a difference integer array difference[i] of length n - 1 where difference[i][j] = words[i][j+1] - words[i][j] where 0 <= j <= n - 2. Note that the difference between two letters is the difference between their positions in the alphabet i.e. the position of 'a' is 0, 'b' is 1, and 'z' is 25.

// For example, for the string "acb", the difference integer array is [2 - 0, 1 - 2] = [2, -1].
// All the strings in words have the same difference integer array, except one. You should find that string.

// Return the string in words that has different difference integer array.



// Example 1:

$words = ["adc", "wzy", "abc"];
// Output: "abc"
// Explanation:
// - The difference integer array of "adc" is [3 - 0, 2 - 3] = [3, -1].
// - The difference integer array of "wzy" is [25 - 22, 24 - 25]= [3, -1].
// - The difference integer array of "abc" is [1 - 0, 2 - 1] = [1, 1].
// The odd array out is [1, 1], so we return the corresponding string, "abc".
// Example 2:

$words = ["aaa", "bob", "ccc", "ddd"];
// Output: "bob"
// Explanation: All the integer arrays are [0, 0] except for "bob", which corresponds to [13, -13].

$words = ["aa","aa","ab"];
// Output: 'ab';


// Constraints:

// 3 <= words.length <= 100
// n == words[i].length
// 2 <= n <= 20
// words[i] consists of lowercase English letters.
class Solution
{

  /**
   * @param String[] $words
   * @return String
   */
  public function oddString($words)
  {
    $this->alpha = array_flip(range('a', 'z'));
    $this->word_length = strlen($words[0]);

    $diff_sample = [
      $this->getDiffKey($words[0]),
      $this->getDiffKey($words[1]),
      $this->getDiffKey($words[2]),
    ];
    $diff_sample = array_flip(array_count_values($diff_sample));

    if (isset($diff_sample[2])) {
      $common_diff_key = (string) $diff_sample[2];
    }
    if (isset($diff_sample[3])) {
      $common_diff_key = (string) $diff_sample[3];
    }

    foreach ($words as $word) {
      if ($this->getDiffKey($word) !== $common_diff_key) {
        return $word;
      }
    }
  }

  private function getDiffKey(string $word)
  {
    $s_parts = str_split($word);
    $diff_array = [];
    foreach ($s_parts as $k => $char) {
      if ($k + 1 === $this->word_length) {
        break;
      }
      $diff_array[] = $this->alpha[$s_parts[$k + 1]] - $this->alpha[$s_parts[$k]];
    }

    return implode('.', $diff_array);
  }
}
echo (new Solution())->oddString($words) . PHP_EOL;
