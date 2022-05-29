<?php
// Given a string s and a character letter, return the percentage of characters in s that equal letter rounded down to the nearest whole percent.



// Example 1:

$s = "foobar";
$letter = "o";
// Output: 33
// Explanation:
// The percentage of characters in s that equal the letter 'o' is 2 / 6 * 100% = 33% when rounded down, so we return 33.
// Example 2:

// $s = "jjjj";
// $letter = "k";
// Output: 0
// Explanation:
// The percentage of characters in s that equal the letter 'k' is 0%, so we return 0.


// Constraints:

// 1 <= s.length <= 100
// s consists of lowercase English letters.
// letter is a lowercase English letter.
class Solution
{

  /**
   * @param String $s
   * @param String $letter
   * @return Integer
   */
  function percentageLetter($s, $letter)
  {
    $count = substr_count($s, $letter);

    // return zero if no letter
    if ($count) {
      return floor($count / strlen($s) * 100);
    }
    return 0;
  }
}
$s = "sgawtb";
$letter = "s";

for ($i = 0; $i < 100000; $i++) {
  echo 1;
  (new Solution())->percentageLetter($s, $letter);
}
