<?php
// A string s can be partitioned into groups of size k using the following procedure:

// The first group consists of the first k characters of the string, the second group consists of the next k characters of the string, and so on. Each character can be a part of exactly one group.
// For the last group, if the string does not have k characters remaining, a character fill is used to complete the group.
// Note that the partition is done so that after removing the fill character from the last group (if it exists) and concatenating all the groups in order, the resultant string should be s.

// Given the string s, the size of each group k and the character fill, return a string array denoting the composition of every group s has been divided into, using the above procedure.

 

// Example 1:

$s = "abcdefghi"; $k = 3; $fill = "x";
// Output: ["abc","def","ghi"]
// Explanation:
// The first 3 characters "abc" form the first group.
// The next 3 characters "def" form the second group.
// The last 3 characters "ghi" form the third group.
// Since all groups can be completely filled by characters from the string, we do not need to use fill.
// Thus, the groups formed are "abc", "def", and "ghi".
// Example 2:

$s = "abcdefghij"; $k = 3; $fill = "x";
// Output: ["abc","def","ghi","jxx"]
// Explanation:
// Similar to the previous example, we are forming the first three groups "abc", "def", and "ghi".
// For the last group, we can only use the character 'j' from the string. To complete this group, we add 'x' twice.
class Solution
{

  /**
   * @param String $s
   * @param int $k
   * @param String $fill
   * @return String[]
   */
    public function divideString($s, $k, $fill)
    {
        $s_parts = str_split($s);
        
        $remainder = count($s_parts) % $k;
        
        $groups = array_chunk($s_parts, $k);
        if ($remainder !== 0) {
            $last_group = count($groups) - 1;
            for ($i=0; $i < ($k -$remainder) ; $i++) {
                $groups[$last_group][] = $fill;
            }
        }

        $ans = [];
        foreach ($groups as $group) {
            $ans[] = implode('', $group);
        }
        return $ans;
    }
}
print_r((new Solution())->divideString($s, $k, $fill));
