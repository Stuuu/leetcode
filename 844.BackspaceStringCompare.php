<?php

// Given two strings s and t, return true if they are equal when both are typed into empty text editors. '#' means a backspace character.

// Note that after backspacing an empty text, the text will continue empty.

 

// Example 1:

// $s = "ab#c"; $t = "ad#c";
// Output: true
// Explanation: Both s and t become "ac".
// Example 2:

$s = "ab##"; $t = "c#d#";
// Output: true
// Explanation: Both s and t become "".
// Example 3:

$s = "a#c"; $t = "b";
// Output: false
// Explanation: s becomes "c" while t becomes "b".
 

// Constraints:

// 1 <= s.length, t.length <= 200
// s and t only contain lowercase letters and '#' characters.
class Solution
{

  /**
   * @param String $s
   * @param String $t
   * @return Boolean
   */
    public function backspaceCompare($s, $t)
    {
        return self::processString($s) === self::processString($t);
    }

    private static function processString(string $text)
    {
        $s_parts = str_split($text);

        $ans = '';
        foreach ($s_parts as $k => $char) {
            if ($char === '#') {
                $ans = substr($ans, 0, -1);
                continue;
            }
            $ans .= $char;
        }
        return $ans;
    }
}
var_dump((new Solution())->backspaceCompare($s, $t));
