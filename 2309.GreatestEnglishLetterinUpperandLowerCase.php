<?php
// Given a string of English letters s, return the greatest English letter which occurs as both a lowercase and uppercase letter in s. The returned letter should be in uppercase. If no such letter exists, return an empty string.

// An English letter b is greater than another letter a if b appears after a in the English alphabet.



// Example 1:

$s = "lEeTcOdE";
// Output: "E"
// Explanation:
// The letter 'E' is the only letter to appear in both lower and upper case.
// Example 2:

// $s = "arRAzFif";
// Output: "R"
// Explanation:
// The letter 'R' is the greatest letter to appear in both lower and upper case.
// Note that 'A' and 'F' also appear in both lower and upper case, but 'R' is greater than 'F' or 'A'.
// Example 3:

// $s = "AbCdEfGhIjK";
// Output: ""
// Explanation:
// There is no letter that appears in both lower and upper case.


// Constraints:

// 1 <= s.length <= 1000
// s consists of lowercase and uppercase English letters.
class Solution
{

  /**
   * @param String $s
   * @return String
   */
  function greatestLetter($s)
  {
    $s = array_fill_keys(str_split($s), "");
    krsort($s);

    foreach ($s as $k => $v) {
      // end search on first uppercase char
      if (ctype_upper($k)) {
        break;
      }
      $su = strtoupper($k);
      if (isset($s[$su])) {
        return $su;
      }
    }
    return "";
  }
}
echo (new Solution())->greatestLetter($s);
