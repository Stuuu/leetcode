<?php
// Given a string s, reverse the string according to the following rules:

// All the characters that are not English letters remain in the same position.
// All the English letters (lowercase or uppercase) should be reversed.
// Return s after reversing it.



// Example 1:

// $s = "ab-cd";
// Output: "dc-ba"
// Example 2:

// $s = "a-bC-dEf-ghIj";
// Output: "j-Ih-gfE-dCba"
// Example 3:

$s = "Test1ng-Leet=code-Q!";
// Output: "Qedo1ct-eeLg=ntse-T!"


// Constraints:

// 1 <= s.length <= 100
// s consists of characters with ASCII values in the range [33, 122].
// s does not contain '\"' or '\\'.
class Solution
{

    /**
     * @param String $s
     * @return String
     */
    public function reverseOnlyLetters($s)
    {

        $s_parts = str_split($s);
        $dash = [];
        $char = [];
        $count = strlen($s);
        $char_ord_vals = array_merge(range(65, 90), range(97, 122));
        foreach ($s_parts as $key => $value) {
            $ord_val = ord($value);
            if (!in_array($ord_val, $char_ord_vals)) {
                $dash[$key] = $value;
                continue;
            }
            $char[$key] = $value;
        }
        $char = array_reverse($char);

        $ans = '';
        for ($i = 0; $i < $count; $i++) {
            if (isset($dash[$i])) {
                $ans .= $dash[$i];
                continue;
            }
            $ans .= array_shift($char);
        }

        return $ans;
    }
}
$s = "a-bC-dEf-ghIj";
// Output: "j-Ih-gfE-dCba"
// $s = "7_28]";
echo (new Solution())->reverseOnlyLetters($s) . PHP_EOL;
