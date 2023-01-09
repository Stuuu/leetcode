<?php
// The Hamming distance between two integers is the number of positions at which the corresponding bits are different.

// Given two integers x and y, return the Hamming distance between them.



// Example 1:

$x = 1;
$y = 4;
// Output: 2
// Explanation:
// 1   (0 0 0 1)
// 4   (0 1 0 0)
//        ↑   ↑
// The above arrows point to positions where the corresponding bits are different.
// Example 2:

// $x = 3;
// $y = 1;
// Output: 1


// Constraints:

// 0 <= x, y <= 231 - 1
class Solution
{

  /**
   * @param Integer $x
   * @param Integer $y
   * @return Integer
   */
  public function hammingDistance($x, $y)
  {
    $x_bin = sprintf("%08b", $x);
    $y_bin = sprintf("%08b", $y);

    $pad_length = max([
      strlen($x_bin),
      strlen($y_bin),
    ]);

    $x_bin = str_pad($x_bin, $pad_length, '0', STR_PAD_LEFT);
    $y_bin = str_pad($y_bin, $pad_length, '0', STR_PAD_LEFT);

    $hamm_dist  = 0;
    foreach (str_split($x_bin) as $k => $bit) {
      if (!isset($y_bin[$k]) || $bit !== $y_bin[$k]) {
        $hamm_dist++;
      }
    }
    return $hamm_dist;
  }
}
$x = 680142203;
// 1000010010001110001000010100000
$y = 1111953568;
$x = 297630147;
$y = 147274294;
// x: 10001101111010111100111000011
// y: 1000110001110011101000110110
echo (new Solution())->hammingDistance($x, $y);
