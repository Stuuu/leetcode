<?php
// You are given two 2D integer arrays, items1 and items2, representing two sets of items. Each array items has the following properties:

// items[i] = [valuei, weighti] where valuei represents the value and weighti represents the weight of the ith item.
// The value of each item in items is unique.
// Return a 2D integer array ret where ret[i] = [valuei, weighti], with weighti being the sum of weights of all items with value valuei.

// Note: ret should be returned in ascending order by value.



// Example 1:

$items1 = [[1, 1], [4, 5], [3, 8]];
$items2 = [[3, 1], [1, 5]];
// Output: [[1,6],[3,9],[4,5]]
// Explanation:
// The item with value = 1 occurs in items1 with weight = 1 and in items2 with weight = 5, total weight = 1 + 5 = 6.
// The item with value = 3 occurs in items1 with weight = 8 and in items2 with weight = 1, total weight = 8 + 1 = 9.
// The item with value = 4 occurs in items1 with weight = 5, total weight = 5.
// Therefore, we return [[1,6],[3,9],[4,5]].
// Example 2:

// $items1 = [[1,1],[3,2],[2,3]]; $items2 = [[2,1],[3,2],[1,3]];
// Output: [[1,4],[2,4],[3,4]]
// Explanation:
// The item with value = 1 occurs in items1 with weight = 1 and in items2 with weight = 3, total weight = 1 + 3 = 4.
// The item with value = 2 occurs in items1 with weight = 3 and in items2 with weight = 1, total weight = 3 + 1 = 4.
// The item with value = 3 occurs in items1 with weight = 2 and in items2 with weight = 2, total weight = 2 + 2 = 4.
// Therefore, we return [[1,4],[2,4],[3,4]].
// Example 3:

// $items1 = [[1,3],[2,2]]; $items2 = [[7,1],[2,2],[1,4]];
// Output: [[1,7],[2,4],[7,1]]
// Explanation:
// The item with value = 1 occurs in items1 with weight = 3 and in items2 with weight = 4, total weight = 3 + 4 = 7.
// The item with value = 2 occurs in items1 with weight = 2 and in items2 with weight = 2, total weight = 2 + 2 = 4.
// The item with value = 7 occurs in items2 with weight = 1, total weight = 1.
// Therefore, we return [[1,7],[2,4],[7,1]].


// Constraints:

// 1 <= items1.length, items2.length <= 1000
// items1[i].length == items2[i].length == 2
// 1 <= valuei, weighti <= 1000
// Each valuei in items1 is unique.
// Each valuei in items2 is unique.
class Solution
{

  /**
   * @param int[][] $items1
   * @param int[][] $items2
   * @return int[][]
   */
    public function mergeSimilarItems($items1, $items2)
    {
        $all_items = array_merge($items1, $items2);

        $ans = [];
        foreach ($all_items as $key => &$item_set) {
            $value = $item_set[0];
            $weight = $item_set[1];

            if (isset($ans[$value])) {
                $ans[$value][1] += $weight;
                continue;
            }
            $ans[$value] = [
            $value,
            $weight
          ];
        }
        sort($ans);
    return $ans;
    }
}
(new Solution())->mergeSimilarItems($items1, $items2);
