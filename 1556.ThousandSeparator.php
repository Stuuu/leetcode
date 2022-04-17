<?php
// Given an integer n, add a dot (".") as the thousands separator and return it in string format.


// Example 1:

$n = 987;
// Output: "987"
// Example 2:

// $n = 1234;
// Output: "1.234"
 

// Constraints:

// 0 <= n <= 231 - 1
class Solution
{

  /**
   * @param Integer $n
   * @return String
   */
    public function thousandSeparator($n)
    {
        $n_l = strlen($n);
        if ($n_l == 3) {
            return (string) $n;
        }


        $n = strrev($n);
        $ans = '';
        for ($i = $n_l -1; $i >= 0; $i--) {
            $ans .= $n[$i];
            if ($i!==0 && $i % 3 === 0) {
                $ans .= '.';
            }
        }
        
        return $ans;
    }
}
echo (new Solution())->thousandSeparator($n);
