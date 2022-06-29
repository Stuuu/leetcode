<?php
// You are given a string s, where every two consecutive vertical bars '|' are grouped into a pair. In other words, the 1st and 2nd '|' make a pair, the 3rd and 4th '|' make a pair, and so forth.

// Return the number of '*' in s, excluding the '*' between each pair of '|'.

// Note that each '|' will belong to exactly one pair.



// Example 1:

$s = "l|*e*et|c**o|*de|";
// Output: 2
// Explanation: The considered characters are underlined: "l|*e*et|c**o|*de|".
// The characters between the first and second '|' are excluded from the answer.
// Also, the characters between the third and fourth '|' are excluded from the answer.
// There are 2 asterisks considered. Therefore, we return 2.
// Example 2:

$s = "iamprogrammer";
// Output: 0
// Explanation: In this example, there are no asterisks in s. Therefore, we return 0.
// Example 3:

$s = "yo|uar|e**|b|e***au|tifu|l";
// Output: 5
// Explanation: The considered characters are underlined: "yo|uar|e**|b|e***au|tifu|l". There are 5 asterisks considered. Therefore, we return 5.
class Solution
{

  /**
   * @param String $s
   * @return Integer
   */
  function countAsterisks($s)
  {
    if (strpos($s, '*') === false) {
      return 0;
    }
    $s_parts = str_split($s);

    $in_pair = false;
    $asterisks = 0;
    foreach ($s_parts as $k => $char) {
      if ($char === "|") {
        if ($in_pair) {
          $in_pair = false;
          continue;
        }
        $in_pair = true;
        continue;
      }

      if (!$in_pair && $char === '*') {
        $asterisks++;
      }
    }
    return $asterisks;
  }
}
(new Solution())->countAsterisks($s);
