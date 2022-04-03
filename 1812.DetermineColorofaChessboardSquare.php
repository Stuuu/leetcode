<?php
// You are given coordinates, a string that represents the coordinates of a square of the chessboard. Below is a chessboard for your reference.



// Return true if the square is white, and false if the square is black.

// The coordinate will always represent a valid chessboard square. The coordinate will always have the letter first, and the number second.



// Example 1:

// $coordinates = "a1";
// Output: false
// Explanation: From the chessboard above, the square with coordinates "a1" is black, so return false.
// Example 2:

$coordinates = "h3";
// Output: true
// Explanation: From the chessboard above, the square with coordinates "h3" is white, so return true.
// Example 3:

$coordinates = "c7";
// Output: false
class Solution
{

    /**
     * @param string $coordinates
     * @return Boolean
     */
    function squareIsWhite($coordinates)
    {
        $y = (int) $coordinates[1];
        $x = ord($coordinates[0]);
        return (($x % 2) !== ($y % 2));
    }
}
var_dump((new Solution())->squareIsWhite($coordinates));
