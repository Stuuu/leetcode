<?php
// Given an integer num, return a string of its base 7 representation.

// Example 1:

$num = 100;
// Output: "202"
// Example 2:

$num = -7;
// Output: "-10"
 

// Constraints:

// -107 <= num <= 107
class Solution
{

  /**
   * @param Integer $num
   * @return String
   */
    public function convertToBase7($num)
    {
        return (strpos($num, '-') === 0) ? '-' . base_convert($num, 10, 7) : base_convert($num, 10, 7);
    }
}
echo (new Solution())->convertToBase7($num);
