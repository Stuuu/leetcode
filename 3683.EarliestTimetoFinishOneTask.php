<?php

// You are given a 2D integer array tasks where tasks[i] = [si, ti].

// Each [si, ti] in tasks represents a task with start time si that takes ti units of time to finish.

// Return the earliest time at which at least one task is finished.



// Example 1:

$tasks = [[1, 6], [2, 3]];

// Output: 5

// Explanation:

// The first task starts at time t = 1 and finishes at time 1 + 6 = 7. The second task finishes at time 2 + 3 = 5. You can finish one task at time 5.

// Example 2:

$tasks = [[100,100],[100,100],[100,100]];

// Output: 200

// Explanation:

// All three tasks finish at time 100 + 100 = 200.



// Constraints:

// 1 <= tasks.length <= 100
// tasks[i] = [si, ti]
// 1 <= si, ti <= 100

class Solution
{

	/**
	 * @param int[][] $tasks
	 * @return int
	 */
	function earliestTime($tasks)
	{
		$min_time = 0;
		foreach ($tasks as $k => $task) {
			$time = $task[0] + $task[1];
			if ($k === 0 || $time < $min_time) {
				$min_time = $time;
			}
		}
		return $min_time;
	}
}

print_r((new Solution())->earliestTime($tasks));
