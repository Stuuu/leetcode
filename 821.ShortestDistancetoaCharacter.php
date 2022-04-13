<?php
// Given a string s and a character c that occurs in s, return an array of integers answer where answer.length == s.length and answer[i] is the distance from index i to the closest occurrence of character c in s.

// The distance between two indices i and j is abs(i - j), where abs is the absolute value function.

// Example 1:

$s = "loveleetcode"; $c = "e";
// Output: [3,2,1,0,1,0,0,1,2,2,1,0]
// Explanation: The character 'e' appears at indices 3, 5, 6, and 11 (0-indexed).
// The closest occurrence of 'e' for index 0 is at index 3, so the distance is abs(0 - 3) = 3.
// The closest occurrence of 'e' for index 1 is at index 3, so the distance is abs(1 - 3) = 2.
// For index 4, there is a tie between the 'e' at index 3 and the 'e' at index 5, but the distance is still the same: abs(4 - 3) == abs(4 - 5) = 1.
// The closest occurrence of 'e' for index 8 is at index 6, so the distance is abs(8 - 6) = 2.
// Example 2:

// $s = "aaab"; $c = "b";
// Output: [3,2,1,0]
 

// Constraints:

// 1 <= s.length <= 104
// s[i] and c are lowercase English letters.
// It is guaranteed that c occurs at least once in s.
class Solution
{

  /**
   * @param String $s
   * @param String $c
   * @return Integer[]
   */
    public function shortestToChar($s, $c)
    {
        $s_parts = str_split($s);
        $ans = [];

        $c_locations =
          array_filter($s_parts, function ($element) use ($c) {
              return isset($element) && $element == $c;
          });
        

        foreach ($s_parts as $k => $char) {
            if ($char === $c) {
                $ans[$k] = 0;
                continue;
            }
            $shortest_distance = 0;
            foreach ($c_locations as $index => $val) {
                $distance  = abs($k - $index);
                if ($shortest_distance === 0 || $distance < $shortest_distance) {
                    $shortest_distance = $distance;
                }
            }

            $ans[$k] = $shortest_distance;
        }
        return $ans;
    }
}
print_r((new Solution())->shortestToChar($s, $c));
