<?php
// Implement strStr().

// Return the index of the first occurrence of needle in haystack, or -1 if needle is not part of haystack.

// Clarification:

// What should we return when needle is an empty string? This is a great question to ask during an interview.

// For the purpose of this problem, we will return 0 when needle is an empty string. This is consistent to C's strstr() and Java's indexOf().



// Example 1:

// Input: haystack = "hello", needle = "ll"
// Output: 2
// Example 2:

// Input: haystack = "aaaaa", needle = "bba"
// Output: -1
// Example 3:

// Input: haystack = "", needle = ""
// Output: 0
class Solution
{

    /**
     * @param String $haystack
     * @param String $needle
     * @return Integer
     */
    function strStr($haystack, $needle)
    {
        if (!$needle) return 0;

        $needle_len = strlen($needle);

        $word_parts = str_split($haystack);

        echo strpos($haystack, $needle) . PHP_EOL;

        $offest = 0;
        for ($i = 0; $i < count($word_parts); $i++) {

            $needle_parts = str_split($needle);
            $hay_chunk = array_slice($word_parts, $offest, $needle_len);

            // sort($needle_parts);
            // sort($hay_chunk);
            echo 'needle ' . implode('', $needle_parts) . PHP_EOL;
            echo 'hay chunk: ' . implode('', $hay_chunk) . PHP_EOL;
            if ($needle_parts === $hay_chunk) {
                return $offest;
            }

            $offest++;
        }
        return -1;
    }
}

// Alternate option 
class Solution2
{

    /**
     * @param String $haystack
     * @param String $needle
     * @return Integer
     */
    function strStr($haystack, $needle)
    {
        if (!$needle) return 0;

        $position = strpos($haystack, $needle);
        if ($position === 0 || $position != false) return $position;
        return -1;
    }
}

$haystack = "mississippi";
$needle = "issip";
$haystack = "mississippi";
$needle = "pi";

echo (new Solution())->strStr($haystack, $needle);
