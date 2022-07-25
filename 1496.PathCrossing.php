<?php
// Given a string path, where path[i] = 'N', 'S', 'E' or 'W', each representing moving one unit north, south, east, or west, respectively. You start at the origin (0, 0) on a 2D plane and walk on the path specified by path.

// Return true if the path crosses itself at any point, that is, if at any time you are on a location you have previously visited. Return false otherwise.



// Example 1:


$path = "NES";
// Output: false
// Explanation: Notice that the path doesn't cross any point more than once.
// Example 2:


// $path = "NESWW";
// Output: true
// Explanation: Notice that the path visits the origin twice.


// Constraints:

// 1 <= path.length <= 104
// path[i] is either 'N', 'S', 'E', or 'W'.
class Solution {

  /**
   * @param String $path
   * @return Boolean
   */
  function isPathCrossing($path): bool {
    $path_parts = str_split($path);

    $current_location = [
      'x' => 0,
      'y' => 0,
    ];

    $past_travel = [];
    $past_travel[implode(',',$current_location)] = 1;
    foreach ($path_parts as $key => $direction) {
      switch ($direction) {
        case 'N':
          $current_location['y']++;
          break;
        case 'E':
          $current_location['x']++;
          break;
        case 'S':
          $current_location['y']--;
          break;
        case 'W':
          $current_location['x']--;
          break;
      }

      $location_key = implode(',', $current_location);
      if(isset($past_travel[$location_key])){
        return true;
      }
      $past_travel[$location_key] = 1;
    }
    return false;

  }
}
var_dump((new Solution())->isPathCrossing($path));
