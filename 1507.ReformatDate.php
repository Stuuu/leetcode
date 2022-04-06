<?php
// Given a date string in the form Day Month Year, where:

//     Day is in the set {"1st", "2nd", "3rd", "4th", ..., "30th", "31st"}.
//     Month is in the set {"Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"}.
//     Year is in the range [1900, 2100].
//     Convert the date string to the format YYYY-MM-DD, where:

//     YYYY denotes the 4 digit year.
//     MM denotes the 2 digit month.
//     DD denotes the 2 digit day.


//     Example 1:

$date = "20th Oct 2052";
//     Output: "2052-10-20"
//     Example 2:

$date = "6th Jun 1933";
//     Output: "1933-06-06"
//     Example 3:

// $date = "26th May 1960";
//     Output: "1960-05-26"


//     Constraints:

//     The given dates are guaranteed to be valid, so no error handling is necessary.
class Solution
{
    const MONTHS = [
        '01' => "Jan",
        '02' => "Feb",
        '03' => "Mar",
        '04' => "Apr",
        '05' => "May",
        '06' => "Jun",
        '07' => "Jul",
        '08' => "Aug",
        '09' => "Sep",
        '10' => "Oct",
        '11' => "Nov",
        '12' => "Dec",
    ];

    /**
     * @param String $date
     * @return String
     */
    function reformatDate($date)
    {
        $d_parts = explode(' ', $date);
        return  sprintf(
            '%s-%s-%s',
            $d_parts[2],
            array_search($d_parts[1], self::MONTHS),
            self::parseDayString($d_parts[0])
        );
    }

    private static function parseDayString(string $day): string
    {
        $day_trim_length = 1;
        $placeholder = '0';
        if (strlen($day) === 4) {
            $placeholder = '';
            $day_trim_length = 2;
        }
        return $placeholder . substr($day, 0, $day_trim_length);
    }
}
echo (new Solution())->reformatDate($date) . PHP_EOL;
