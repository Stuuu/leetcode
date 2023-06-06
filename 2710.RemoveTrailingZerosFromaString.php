<?php
// Given a positive integer num represented as a string, return the integer num without trailing zeros as a string.



// Example 1:

$num = "51230100";
// Output: "512301"
// Explanation: Integer "51230100" has 2 trailing zeros, we remove them and return integer "512301".
// Example 2:

$num = "123";
// Output: "123"
// Explanation: Integer "123" has no trailing zeros, we return integer "123".


// Constraints:

// 1 <= num.length <= 1000
// num consists of only digits.
// num doesn't have any leading zeros.
class Solution
{

  /**
   * I know I could use rtrim
   *
   * @param String $num
   * @return String
   */
    public function removeTrailingZeros($num)
    {
        $num_len = strlen($num);

        $right_trim_len = 0;
        for ($i=$num_len - 1; $i >= 0; $i--) {
            if ($num[$i] === "0") {
                $right_trim_len++;
            } else {
                break;
            }
        }

        return substr($num, 0, $num_len - $right_trim_len);
    }
}
var_dump((new Solution())->removeTrailingZeros($num));
