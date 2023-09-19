package main

import (
	"fmt"
	"strconv"
	"strings"
)



func sumIndicesWithKSetBits(nums []int, k int) int {

	start_sum := 0
	for index, element := range nums {
		bin_index := strconv.FormatInt(int64(index), 2)
		one_cont := strings.Count(bin_index, "1");

		if one_cont == k {
			start_sum = start_sum + element
		}
}

return start_sum

}


func main(){
	ints:= []int{4,3,2,1}

	k := 2

	fmt.Println(sumIndicesWithKSetBits(ints, k))

}
