<?php
// You are given an array coordinates, coordinates[i] = [x, y], where [x, y] represents the coordinate of a point. Check if these points make a straight line in the XY plane.
// Example 1:

$coordinates = [[1,2],[2,3],[3,4],[4,5],[5,6],[6,7]];
// Output: true
// Example 2:



$coordinates = [[1,1],[2,2],[3,4],[4,5],[5,6],[7,7]];
// Output: false
$coordinates = [[0,0],[0,1],[0,-1]];

// Constraints:

// 2 <= coordinates.length <= 1000
// coordinates[i].length == 2
// -10^4 <= coordinates[i][0], coordinates[i][1] <= 10^4
// coordinates contains no duplicate point.
class Solution
{

  /**
   * @param Integer[][] $coordinates
   * @return Boolean
   */
    public function checkStraightLine($coordinates)
    {
        $last_slope = null;
        foreach ($coordinates as $k => $cord) {
            if (!isset($coordinates[$k + 1])) {
                break;
            }
            try {
                $slope =  ($cord[1] - $coordinates[$k + 1][1]) / ($cord[0] - $coordinates[$k + 1][0]);
            } catch (Throwable $e) {
                $slope = 'undefined';
            }

            if ($k!==0 && $slope !== $last_slope) {
                return false;
            }
            $last_slope = $slope;
        }
        return true;
    }
}
var_dump((new Solution())->checkStraightLine($coordinates));
