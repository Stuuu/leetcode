<?php
// Given a 2D integer array nums where nums[i] is a non-empty array of distinct positive integers, return the list of integers that are present in each array of nums sorted in ascending order.


// Example 1:

$nums = [[3,1,2,4,5],[1,2,3,4],[3,4,5,6]];
// Output: [3,4]
// Explanation:
// The only integers present in each of nums[0] = [3,1,2,4,5], nums[1] = [1,2,3,4], and nums[2] = [3,4,5,6] are 3 and 4, so we return [3,4].
// Example 2:

$nums = [[1,2,3],[4,5,6]];
// Output: []
// Explanation:
// There does not exist any integer present both in nums[0] and nums[1], so we return an empty list [].


// Constraints:

// 1 <= nums.length <= 1000
// 1 <= sum(nums[i].length) <= 1000
// 1 <= nums[i][j] <= 1000
// All the values of nums[i] are unique.
class Solution
{

  /**
   * @param Integer[][] $nums
   * @return Integer[]
   */
    public function intersection($nums)
    {
        $still_standing = array_unique($nums[0]);
        unset($nums[0]);
        foreach ($nums as $k => $num_set) {
            $still_standing = (array_intersect($still_standing, array_unique($num_set)));
        }
        asort($still_standing);
        return $still_standing;
    }
}

// Second approach
class Solution
{

  /**
   * @param Integer[][] $nums
   * @return Integer[]
   */
    public function intersection($nums)
    {
        $return = [];
        array_walk_recursive(
            $nums,
            function ($a) use (&$return) {
                $return[] = $a;
            }
        );
        $val_counts = array_count_values($return);
        $still_standing  =array_keys($val_counts, count($nums));
        asort($still_standing);
        return $still_standing;
    }
}

print_r((new Solution())->intersection($nums));
