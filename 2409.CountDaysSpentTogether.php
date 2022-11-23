<?php
// Alice and Bob are traveling to Rome for separate business meetings.

// You are given 4 strings arriveAlice, leaveAlice, arriveBob, and leaveBob. Alice will be in the city from the dates arriveAlice to leaveAlice (inclusive), while Bob will be in the city from the dates arriveBob to leaveBob (inclusive). Each will be a 5-character string in the format "MM-DD", corresponding to the month and day of the date.

// Return the total number of days that Alice and Bob are in Rome together.

// You can assume that all dates occur in the same calendar year, which is not a leap year. Note that the number of days per month can be represented as: [31, 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31].



// Example 1:

$arriveAlice = "08-15";
$leaveAlice = "08-18";
$arriveBob = "08-16";
$leaveBob = "08-19";
// Output: 3
// Explanation: Alice will be in Rome from August 15 to August 18. Bob will be in Rome from August 16 to August 19. They are both in Rome together on August 16th, 17th, and 18th, so the answer is 3.
// Example 2:

$arriveAlice = "10-01";
$leaveAlice = "10-31";
$arriveBob = "11-01";
$leaveBob = "12-31";
// Output: 0
// Explanation: There is no day when Alice and Bob are in Rome together, so we return 0.


// Constraints:

// All dates are provided in the format "MM-DD".
// Alice and Bob's arrival dates are earlier than or equal to their leaving dates.
// The given dates are valid dates of a non-leap year.
class Solution
{

  /**
   * @param String $arriveAlice
   * @param String $leaveAlice
   * @param String $arriveBob
   * @param String $leaveBob
   * @return Integer
   */
  function countDaysTogether($arriveAlice, $leaveAlice, $arriveBob, $leaveBob)
  {
    $alice_arive = self::getDayOfYearFromMMDD($arriveAlice);
    $alice_depart = self::getDayOfYearFromMMDD($leaveAlice);

    $bob_arive = self::getDayOfYearFromMMDD($arriveBob);
    $bob_depart = self::getDayOfYearFromMMDD($leaveBob);

    $overlap = min([$alice_depart, $bob_depart]) - max([$alice_arive, $bob_arive]) + 1;

    if ($overlap < 0) return 0;
    return $overlap;
  }


  private static function getDayOfYearFromMMDD(string $date_string)
  {
    $date_parts = explode('-', $date_string);
    $month = $date_parts[0];
    $day = $date_parts[1];

    return date("z", mktime(0, 0, 0, $month, $day, 2009)) + 1;
  }
}
var_dump((new Solution())->countDaysTogether($arriveAlice, $leaveAlice, $arriveBob, $leaveBob));
