package main

import "fmt"

func main() {
	nums := [4]int{2, 7, 11, 15}
	target := 9

	fmt.Println(twoSum(nums[:], target))
}

func twoSum(nums []int, target int) []int {

	for index, element := range nums {

		for sub_index, sub_element := range nums {

			if sub_index == index {
				continue
			}

			if sub_element+element == target {
				return []int{index, sub_index}
			}
		}
	}

	number := []int{4}
	return number
}
