<?php
// Write a program to count the number of days between two dates.

// The two dates are given as strings, their format is YYYY-MM-DD as shown in the examples.



// Example 1:

// Input: date1 = "2019-06-29", date2 = "2019-06-30"
// Output: 1
// Example 2:

// Input: date1 = "2020-01-15", date2 = "2019-12-31"
// Output: 15


// Constraints:

// The given dates are valid dates between the years 1971 and 2100.
class Solution
{

    /**
     * @param String $date1
     * @param String $date2
     * @return Integer
     */
    function daysBetweenDates($date1, $date2)
    {
        $date1 = new DateTime($date1);
        $date2 = new DateTime($date2);
        return $date1->diff($date2)->days;
    }
}
$date1 = "2019-06-29";
$date2 = "2019-06-30";
// Output: 1
// Example 2:

$date1 = "2020-01-15";
$date2 = "2019-12-31";
// Output: 15

echo (new Solution())->daysBetweenDates($date1, $date2);
