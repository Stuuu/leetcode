<?php

// Example 1:

$names = ["Mary","John","Emma"];
$heights = [180,165,170];
// Output: ["Mary","Emma","John"]
// Explanation: Mary is the tallest, followed by Emma and John.
// Example 2:

$names = ["Alice","Bob","Bob"];
$heights = [155,185,150];
// Output: ["Bob","Alice","Bob"]
// Explanation: The first Bob is the tallest, followed by Alice and the second Bob.


// Constraints:

// n == names.length == heights.length
// 1 <= n <= 103
// 1 <= names[i].length <= 20
// 1 <= heights[i] <= 105
// names[i] consists of lower and upper case English letters.
// All the values of heights are distinct.

class Solution
{

  /**
   * @param String[] $names
   * @param Integer[] $heights
   * @return String[]
   */
    public function sortPeople($names, $heights)
    {
        $heights_and_names = array_combine($heights, $names);
        krsort($heights_and_names);
        return $heights_and_names;
    }
}

print_r((new Solution())->sortPeople($names, $heights));
