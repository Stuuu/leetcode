<?php
// You are given the array paths, where paths[i] = [cityAi, cityBi] means there exists a direct path going from cityAi to cityBi. Return the destination city, that is, the city without any path outgoing to another city.

// It is guaranteed that the graph of paths forms a line without any loop, therefore, there will be exactly one destination city.



// Example 1:

$paths = [["London", "New York"], ["New York", "Lima"], ["Lima", "Sao Paulo"]];
// Output: "Sao Paulo"
// Explanation: Starting at "London" city you will reach "Sao Paulo" city which is the destination city. Your trip consist of: "London" -> "New York" -> "Lima" -> "Sao Paulo".
// Example 2:

// $paths = [["B", "C"], ["D", "B"], ["C", "A"]];
// Output: "A"
// Explanation: All possible trips are:
// "D" -> "B" -> "C" -> "A".
// "B" -> "C" -> "A".
// "C" -> "A".
// "A".
// Clearly the destination city is "A".
// Example 3:

// $paths = [["A", "Z"]];
// Output: "Z"


// Constraints:

// 1 <= paths.length <= 100
// paths[i].length == 2
// 1 <= cityAi.length, cityBi.length <= 10
// cityAi != cityBi
// All strings consist of lowercase and uppercase English letters and the space character.

class Solution
{

  /**
   * @param String[][] $paths
   * @return String
   */
  function destCity($paths)
  {
    // flatten path to array of cities
    $all_cities = array_merge(...$paths);
    // count each cities appearance rate
    $counts = array_count_values($all_cities);

    // for every city that only appears once check if it's original
    // key is odd. Because the original paths come in pairs an odd
    // key indicates it was only a destination
    foreach (array_keys($counts, 1) as $city) {
      if (array_search($city, $all_cities) % 2 !== 0) {
        return $city;
      };
    };
  }
}
echo (new Solution())->destCity($paths);
