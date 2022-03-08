<?php
// You are given a string s formed by digits and '#'. We want to map s to English lowercase characters as follows:

//     Characters ('a' to 'i') are represented by ('1' to '9') respectively.
//     Characters ('j' to 'z') are represented by ('10#' to '26#') respectively.
//     Return the string formed after mapping.

//     The test cases are generated so that a unique mapping will always exist.



//     Example 1:

//     Input: s = "10#11#12"
//     Output: "jkab"
//     Explanation: "j" -> "10#" , "k" -> "11#" , "a" -> "1" , "b" -> "2".
//     Example 2:

//     Input: s = "1326#"
//     Output: "acz"


//     Constraints:

//     1 <= s.length <= 1000
//     s consists of digits and the '#' letter.
class Solution
{

    /**
     * @param String $s
     * @return String
     */
    function freqAlphabets($s)
    {
        $alpha_b = [];
        foreach (range('a', 'z') as $key => $char) {
            $key = $key + 1;
            $alp_key = $key < 10 ? $key : $key . '#';
            $alpha_b[$alp_key] = $char;
        }

        $ans = '';
        $input_length = strlen($s);

        for ($i = 0; $i < $input_length;) {
            if (isset($s[$i + 2]) && $s[$i + 2] == '#') {
                $ans .= $alpha_b[$s[$i] . $s[$i + 1] . $s[$i + 2]];

                $i += 3;
                continue;
            }
            $ans .= $alpha_b[$s[$i]];
            $i++;
        }
        return $ans;
    }
}
$s = "10#11#12";
//     Output: "jkab"
// $s = "1326#";
//     Output: "acz"
(new Solution())->freqAlphabets($s);
