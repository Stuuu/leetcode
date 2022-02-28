<?php
// You own a Goal Parser that can interpret a string command. The command consists of an alphabet of "G", "()" and/or "(al)" in some order. The Goal Parser will interpret "G" as the string "G", "()" as the string "o", and "(al)" as the string "al". The interpreted strings are then concatenated in the original order.

// Given the string command, return the Goal Parser's interpretation of command.



// Example 1:

// Input: command = "G()(al)"
// Output: "Goal"
// Explanation: The Goal Parser interprets the command as follows:
// G -> G
// () -> o
// (al) -> al
// The final concatenated result is "Goal".
// Example 2:

// Input: command = "G()()()()(al)"
// Output: "Gooooal"
// Example 3:

// Input: command = "(al)G(al)()()G"
// Output: "alGalooG"


// Constraints:

// 1 <= command.length <= 100
// command consists of "G", "()", and/or "(al)" in some order.
class Solution
{

    /**
     * @param String $command
     * @return String
     */
    function interpret($command)
    {
        $command_parts = str_split($command);

        $parsed_command = '';
        $next_key = 0;
        foreach ($command_parts as $key => $value) {

            if ($key < $next_key) {
                continue;
            }

            if ($value === 'G') {
                $parsed_command .= 'G';
                echo 'G' . PHP_EOL;
                continue;
            }
            if ($value === "(" && $command_parts[$key + 1] === ")") {
                $parsed_command .= 'o';
                $next_key = ($key + 1);
                echo 'o' . PHP_EOL;
                continue;
            }

            if ($value === "(" && $command_parts[$key + 1] === "a") {
                $parsed_command .= 'al';
                $next_key = ($key + 2);
                continue;
            }
        }

        return $parsed_command;
    }
}

$command = "G()(al)";
$command = "G()()()()(al)";
echo (new Solution())->interpret($command) . PHP_EOL;
