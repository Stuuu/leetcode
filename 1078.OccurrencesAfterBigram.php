<?php
// Given two strings first and second, consider occurrences in some text of the form "first second third", where second comes immediately after first, and third comes immediately after second.

// Return an array of all the words third for each occurrence of "first second third".

 

// Example 1:

$text = "alice is a good girl she is a good student"; $first = "a"; $second = "good";
// Output: ["girl","student"]
// Example 2:

$text = "we will we will rock you"; $first = "we"; $second = "will";
// Output: ["we","rock"]

$text = "obo jvezipre obo jnvavldde jvezipre jvezipre jnvavldde jvezipre jvezipre jvezipre y jnvavldde jnvavldde obo jnvavldde jnvavldde obo jnvavldde jnvavldde jvezipre";
$first = "jnvavldde";
$second = "y";
 

// Constraints:

// 1 <= text.length <= 1000
// text consists of lowercase English letters and spaces.
// All the words in text a separated by a single space.
// 1 <= first.length, second.length <= 10
// first and second consist of lowercase English letters.
class Solution
{

    /**
     * @param String $text
     * @param String $first
     * @param String $second
     * @return String[]
     */
    public function findOcurrences($text, $first, $second)
    {
        $t_parts = explode(' ', $text);
        $t_count = count($t_parts);

        $ans = [];
        for ($i=0; $i < $t_count; $i++) {
            if (isset($t_parts[$i +2])
            && $t_parts[$i] === $first
            && $t_parts[$i+ 1] === $second
            ) {
                $ans[] = $t_parts[$i +2];
            }
        }
        return $ans;
    }
}
print_r((new Solution())->findOcurrences($text, $first, $second));
