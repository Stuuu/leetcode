<?php
// You are given an array of integers stones where stones[i] is the weight of the ith stone.

// We are playing a game with the stones. On each turn, we choose the heaviest two stones and smash them together. Suppose the heaviest two stones have weights x and y with x <= y. The result of this smash is:

// If x == y, both stones are destroyed, and
// If x != y, the stone of weight x is destroyed, and the stone of weight y has new weight y - x.
// At the end of the game, there is at most one stone left.

// Return the weight of the last remaining stone. If there are no stones left, return 0.



// Example 1:

$stones = [2,7,4,1,8,1];
// Output: 1
// Explanation:
// We combine 7 and 8 to get 1 so the array converts to [2,4,1,1,1] then,
// we combine 2 and 4 to get 2 so the array converts to [2,1,1,1] then,
// we combine 2 and 1 to get 1 so the array converts to [1,1,1] then,
// we combine 1 and 1 to get 0 so the array converts to [1] then that's the value of the last stone.
// Example 2:

// $stones = [1];
// Output: 1


// Constraints:

// 1 <= stones.length <= 30
// 1 <= stones[i] <= 1000
class Solution
{

  /**
   * @param int[] $stones
   * @return int
   */
    public function lastStoneWeight($stones)
    {
        while (count($stones) > 1) {
            rsort($stones);
            $y = $stones[0];
            $x = $stones[1];

            if ($x === $y) {
                unset($stones[0]);
                unset($stones[1]);
            }

            if ($x !== $y) {
                // unset x;
                unset($stones[1]);
                $stones[0] = $y - $x;
            }
        }

        // above we modified the array in place so we don't know what index the
        // last stone is at this resets the key to 0
        $stones = array_values($stones);
        return count($stones) < 1 ? 0 : $stones[0];
    }
}
echo (new Solution())->lastStoneWeight($stones);
