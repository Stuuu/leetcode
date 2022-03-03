<?php
// You are given a positive integer num consisting of exactly four digits. Split num into two new integers new1 and new2 by using the digits found in num. Leading zeros are allowed in new1 and new2, and all the digits found in num must be used.

// For example, given num = 2932, you have the following digits: two 2's, one 9 and one 3. Some of the possible pairs [new1, new2] are [22, 93], [23, 92], [223, 9] and [2, 329].
// Return the minimum possible sum of new1 and new2.



// Example 1:

// Input: num = 2932
// Output: 52
// Explanation: Some possible pairs [new1, new2] are [29, 23], [223, 9], etc.
// The minimum sum can be obtained by the pair [29, 23]: 29 + 23 = 52.
// Example 2:

// Input: num = 4009
// Output: 13
// Explanation: Some possible pairs [new1, new2] are [0, 49], [490, 0], etc. 
// The minimum sum can be obtained by the pair [4, 9]: 4 + 9 = 13.


// Constraints:

// 1000 <= num <= 9999
class Solution
{

    /**
     * @param int $num
     * @return int
     */
    function minimumSum($num)
    {


        $num = str_replace(0, '', $num);



        $parts = str_split($num);
        $part_count = count($parts);

        switch ($part_count) {
            case 1:
                return $num;
                break;
            case 2:
                return array_sum($parts);
                break;
            case 3:
            case 4:
                return self::sortAndSum($parts, $part_count);
        }
    }

    private static function sortAndSum(array $parts, int $part_count)
    {
        sort($parts);

        if ($part_count === 3) {
            return ($parts[0] . $parts[1]) + $parts[2];
        }
        return ($parts[0] . $parts[2]) + ($parts[1] . $parts[3]);
    }
}

$num = 2932;
// Output: 52
// The minimum sum can be obtained by the pair [29, 23]: 29 + 23 = 52.
// $num = 4009;
// Output: 13

$num = 8204;
// output: 32
echo (new Solution())->minimumSum($num);
