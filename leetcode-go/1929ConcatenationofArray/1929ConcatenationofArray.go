package main

import "fmt"


func main() {
	nums := [3]int{1,2,1}

	fmt.Println(getConcatenation(nums[:]))
}

func getConcatenation(nums []int) []int {
	slc_arr1 := nums[:]
	slc_arr_concat := make([]int, 0)

	slc_arr_concat = append(slc_arr1, slc_arr1...)
	return slc_arr_concat
}
