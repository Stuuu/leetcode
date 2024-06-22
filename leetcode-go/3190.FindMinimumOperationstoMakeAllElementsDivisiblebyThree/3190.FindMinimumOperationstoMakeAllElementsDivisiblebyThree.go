package main

import "fmt"

// You are given an integer array nums. In one operation, you can add or subtract 1 from any element of nums.

// Return the minimum number of operations to make all elements of nums divisible by 3.

// Example 1:

// Input: nums = [1,2,3,4]

// Output: 3

// Explanation:

// All array elements can be made divisible by 3 using 3 operations:

// Subtract 1 from 1.
// Add 1 to 2.
// Subtract 1 from 4.
// Example 2:

// Input: nums = [3,6,9]

// Output: 0

// Constraints:

// 1 <= nums.length <= 50
// 1 <= nums[i] <= 50
func main() {

	nums := []int{3, 6, 9}

	fmt.Println(minimumOperations(nums))
}

func minimumOperations(nums []int) int {
	op_count := 0

	up_ops := 0
	down_ops := 0

	for _, num := range nums {
		if num%3 == 0 {
			continue
		}

		for i := num; true; i++ {

			if i%3 == 0 {
				break
			}
			up_ops++
		}

		for d := num; true; d-- {
			if d%3 == 0 {
				break
			}
			down_ops++
		}

		if up_ops < down_ops {
			op_count += up_ops
		} else {
			op_count += down_ops
		}
		up_ops = 0
		down_ops = 0
	}
	return op_count
}
