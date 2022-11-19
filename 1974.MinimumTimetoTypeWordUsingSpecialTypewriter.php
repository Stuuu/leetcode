<?php
// There is a special typewriter with lowercase English letters 'a' to 'z' arranged in a circle with a pointer. A character can only be typed if the pointer is pointing to that character. The pointer is initially pointing to the character 'a'.


// Each second, you may perform one of the following operations:

// Move the pointer one character counterclockwise or clockwise.
// Type the character the pointer is currently on.
// Given a string word, return the minimum number of seconds to type out the characters in word.



// Example 1:

$word = "abc";
// Output: 5
// Explanation:
// The characters are printed as follows:
// - Type the character 'a' in 1 second since the pointer is initially on 'a'.
// - Move the pointer clockwise to 'b' in 1 second.
// - Type the character 'b' in 1 second.
// - Move the pointer clockwise to 'c' in 1 second.
// - Type the character 'c' in 1 second.
// Example 2:

// $word = "bza";
// Output: 7
// Explanation:
// The characters are printed as follows:
// - Move the pointer clockwise to 'b' in 1 second.
// - Type the character 'b' in 1 second.
// - Move the pointer counterclockwise to 'z' in 2 seconds.
// - Type the character 'z' in 1 second.
// - Move the pointer clockwise to 'a' in 1 second.
// - Type the character 'a' in 1 second.
// Example 3:

// $word = "zjpc";
// Output: 34
// Explanation:
// The characters are printed as follows:
// - Move the pointer counterclockwise to 'z' in 1 second.
// - Type the character 'z' in 1 second.
// - Move the pointer clockwise to 'j' in 10 seconds.
// - Type the character 'j' in 1 second.
// - Move the pointer clockwise to 'p' in 6 seconds.
// - Type the character 'p' in 1 second.
// - Move the pointer counterclockwise to 'c' in 13 seconds.
// - Type the character 'c' in 1 second.


// Constraints:

// 1 <= word.length <= 100
// word consists of lowercase English letters.
class Solution
{

  private array $alpha = [];

  public function __construct()
  {
    $alpha = range('a', 'z');
    array_unshift($alpha, null);
    unset($alpha[0]);
    $this->alpha = array_flip($alpha);
  }

  /**
   * @param String $word
   * @return Integer
   */
  function minTimeToType($word)
  {
    $word_parts = str_split($word);

    $current_loc = 1;
    $total_time = 0;
    foreach ($word_parts as $k => $letter) {

      $target_letter_location = $this->alpha[$letter];

      // increment for next letter
      $next_letter_increment = $this->getNextLetterIncrement($target_letter_location, $current_loc);

      $current_loc = $target_letter_location;
      $total_time += ($next_letter_increment + 1);
    }
    return $total_time;
  }

  private function getNextLetterIncrement(int $target_letter_location, int $current_loc)
  {

    $clockwise_distance = $this->getClockwiseDistanceToTargetLetter($target_letter_location, $current_loc);
    $counter_distance = $this->getCounterClockwiseDistanceToTargetLetter($target_letter_location, $current_loc);

    if ($clockwise_distance === 0) {
      return 0;
    }


    if ($clockwise_distance >= $counter_distance) {
      return $counter_distance;
    }

    return $clockwise_distance;
  }

  public function getClockwiseDistanceToTargetLetter(int $target_letter_location, int $current_loc)
  {
    return abs($current_loc - $target_letter_location);
  }

  public function getCounterClockwiseDistanceToTargetLetter(int $target_letter_location, int $current_loc)
  {

    if ($target_letter_location > $current_loc) {
      return 26 - $target_letter_location + $current_loc;
    }
    return 26 - $current_loc + $target_letter_location;
  }
}
// $word = "bza";
// Output: 7
// Explanation:
// The characters are printed as follows:
// - Move the pointer clockwise to 'b' in 1 second.
// - Type the character 'b' in 1 second.
// - Move the pointer counterclockwise to 'z' in 2 seconds.
// - Type the character 'z' in 1 second.
// - Move the pointer clockwise to 'a' in 1 second.
// - Type the character 'a' in 1 second.
echo (new Solution())->minTimeToType($word);
// (new Solution())->getCounterClockwiseDistanceToTargetLetter(26,2);
