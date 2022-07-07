<?php
// You are given a string num, representing a large integer. Return the largest-valued odd integer (as a string) that is a non-empty substring of num, or an empty string "" if no odd integer exists.

// A substring is a contiguous sequence of characters within a string.



// Example 1:

$num = "52";
// Output: "5";
// Explanation: The only non-empty substrings are "5", "2", and "52". "5" is the only odd number.
// Example 2:

// $num = "4206";
// Output: "";
// Explanation: There are no odd numbers in "4206".
// Example 3:

// $num = "35427";
// Output: "35427"
// Explanation: "35427" is already an odd number.


// Constraints:

// 1 <= num.length <= 105
// num only consists of digits and does not contain any leading zeros.
class Solution
{

    /**
     * @param String $num
     * @return String
     */
    public function largestOddNumber($num)
    {
        $num_len = strlen($num);

        for ($i = $num_len; $i >= 0; $i--) {
            $last_num = substr($num, $i, 1);

            if (((intval($last_num) % 2) !== 0)) {
                return  substr($num, 0, $i + 1);
            }
        }
        return "";
    }
}
// $num = "239537672423884969653287101";
var_dump((new Solution())->largestOddNumber($num));
