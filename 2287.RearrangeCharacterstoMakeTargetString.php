<?php
// You are given two 0-indexed strings s and target. You can take some letters from s and rearrange them to form new strings.

// Return the maximum number of copies of target that can be formed by taking letters from s and rearranging them.



// Example 1:

$s = "ilovecodingonleetcode";
$target = "code";
// Output: 2
// Explanation:
// For the first copy of "code", take the letters at indices 4, 5, 6, and 7.
// For the second copy of "code", take the letters at indices 17, 18, 19, and 20.
// The strings that are formed are "ecod" and "code" which can both be rearranged into "code".
// We can make at most two copies of "code", so we return 2.
// Example 2:

$s = "abcba";
$target = "abc";
// Output: 1
// Explanation:
// We can make one copy of "abc" by taking the letters at indices 0, 1, and 2.
// We can make at most one copy of "abc", so we return 1.
// Note that while there is an extra 'a' and 'b' at indices 3 and 4, we cannot reuse the letter 'c' at index 2, so we cannot make a second copy of "abc".
// Example 3:

// $s = "abbaccaddaeea";
// $target = "aaaaa";
// Output: 1
// Explanation:
// We can make one copy of "aaaaa" by taking the letters at indices 0, 3, 6, 9, and 12.
// We can make at most one copy of "aaaaa", so we return 1.


// Constraints:

// 1 <= s.length <= 100
// 1 <= target.length <= 10
// s and target consist of lowercase English letters.
class Solution
{

  /**
   * @param String $s
   * @param String $target
   * @return Integer
   */
  function rearrangeCharacters($s, $target)
  {
    $s_counts = array_count_values(str_split($s));
    $t_counts = array_count_values(str_split($target));

    print_r($s_counts);
    print_r($t_counts);

    $s_counts_per_target = array_intersect_key($s_counts, $t_counts);
    print_r($s_counts_per_target);
    if (count($s_counts_per_target) === count($t_counts)) {

      $smallest_letter_by_count = array_search(min($s_counts_per_target), $s_counts_per_target);

      echo $s_counts[$smallest_letter_by_count] . ' ' . $t_counts[$smallest_letter_by_count];
      die;
      return floor($s_counts[$smallest_letter_by_count] / $t_counts[$smallest_letter_by_count]);
    };
    return 0;
  }
}

$s = "ccccndxxlzerbsrrkvdnlvynxbjtjldsqgevphdlrldyishznryttvuratvwiafiwyjklafesvmcexuacxqgmnokfljxkystcbef";
$target = "bvciovnpto";
echo (new Solution())->rearrangeCharacters($s, $target);
