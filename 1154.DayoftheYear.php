<?php
// Given a string date representing a Gregorian calendar date formatted as YYYY-MM-DD, return the day number of the year.

// Example 1:
$date = "2019-01-09";
// Output: 9
// Explanation: Given date is the 9th day of the year in 2019.
// Example 2:
// $date = "2019-02-10";
// Output: 41
$date = "1900-05-02";
$date = "2019-01-09";

// Constraints:

// date.length == 10
// date[4] == date[7] == '-', and all other date[i]'s are digits
// date represents a calendar date between Jan 1st, 1900 and Dec 31th, 2019.
class Solution
{
    private $month_days = [
     31,
     28,
     31,
     30,
     31,
     30,
     31,
     31,
     30,
     31,
     30,
     31,
  ];

    /**
     * @param String $date
     * @return Integer
     */
    public function dayOfYear($date)
    {
        $d_parts = explode('-', $date);
        $year = $d_parts[0];
        $month = $d_parts[1];
        $day = $d_parts[2];

        $days = 0;
        $days += array_sum(array_slice($this->month_days, 0, $month - 1));
        // To be a leap year, the year number must be divisible by four – except for end-of-century years,
        //  which must be divisible by 400. This means that the year 2000 was a leap year,
        //  although 1900 was not.
        if ($month > 2
            && $year % 4 === 0
            && ($year % 400 === 0 || $year % 100 !== 0)) {
            $days++;
        }
        $days += $day;
        return $days;
    }
}
echo (new Solution())->dayOfYear($date);
