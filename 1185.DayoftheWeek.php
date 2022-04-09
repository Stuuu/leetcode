<?php 
// Given a date, return the corresponding day of the week for that date.

// The input is given as three integers representing the day, month and year respectively.

// Return the answer as one of the following values {"Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"}.

 

// Example 1:

// Input: day = 31, month = 8, year = 2019
// Output: "Saturday"
// Example 2:

// Input: day = 18, month = 7, year = 1999
// Output: "Sunday"
// Example 3:

$day = 15; $month = 8; $year = 1993;
// Output: "Sunday"
 

// Constraints:

// The given dates are valid dates between the years 1971 and 2100.
class Solution {

    /**
     * @param Integer $day
     * @param Integer $month
     * @param Integer $year
     * @return String
     */
    function dayOfTheWeek($day, $month, $year) {
        $date = $year .'-'. $month .'-'. $day;
        $datetime = DateTime::createFromFormat('Y-m-d', $date);
        return $datetime->format('l');
        
    }
}
echo (new Solution())->dayOfTheWeek($day, $month, $year);
