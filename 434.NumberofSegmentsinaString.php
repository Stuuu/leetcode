<?php
// Given a string s, return the number of segments in the string.

// A segment is defined to be a contiguous sequence of non-space characters.



// Example 1:

$s = "Hello, my name is John";
// Output: 5
// Explanation: The five segments are ["Hello,", "my", "name", "is", "John"]
// Example 2:

// $s = "Hello";
// Output: 1


// Constraints:

// 0 <= s.length <= 300
// s consists of lowercase and uppercase English letters, digits, or one of the following characters "!@#$%^&*()_+-=',.:".
// The only space character in s is ' '.
class Solution
{

  /**
   * @param String $s
   * @return Integer
   */
  public function countSegments($s)
  {
    $s = trim($s);
    $s = preg_replace('!\s+!', ' ', $s);
    if (!$s) {
      return 0;
    }
    $s_parts = explode(' ', $s);
    return count($s_parts);
  }
}
$s = "";
$s = "                ";

echo (new Solution())->countSegments($s);
