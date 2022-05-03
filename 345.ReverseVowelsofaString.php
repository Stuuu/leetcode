<?php
// Given a string s, reverse only all the vowels in the string and return it.

// The vowels are 'a', 'e', 'i', 'o', and 'u', and they can appear in both cases.

// Example 1:

$s = "hello";
// Output: "holle"
// Example 2:

// $s = "leetcode";
// Output: "leotcede"


// Constraints:

// 1 <= s.length <= 3 * 105
// s consist of printable ASCII characters.
class Solution
{
    const VOWELS = [
      'a',
      'e',
      'i',
      'o',
      'u'
    ];

    /**
     * @param String $s
     * @return String
     */
    public function reverseVowels($s)
    {
        if (strlen($s) === 1) {
            return $s;
        }
        $s_parts = str_split($s);


        $vowels = [];
        foreach ($s_parts as &$char) {
            if (in_array(strtolower($char), self::VOWELS)) {
                $vowels[] = $char;
                $char = '%s';
            }
        }
        if (!$vowels) {
            return $s;
        }
        return vsprintf(implode('', $s_parts), array_reverse($vowels));
    }
}

$s = "aA";
$s = ".,";
echo (new Solution())->reverseVowels($s);
