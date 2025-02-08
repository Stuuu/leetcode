package main

// Design a number container system that can do the following:

// Insert or Replace a number at the given index in the system.
// Return the smallest index for the given number in the system.
// Implement the NumberContainers class:

// NumberContainers() Initializes the number container system.
// void change(int index, int number) Fills the container at index with the number. If there is already a number at that index, replace it.
// int find(int number) Returns the smallest index for the given number, or -1 if there is no index that is filled by number in the system.

// Example 1:

// Input
// ["NumberContainers", "find", "change", "change", "change", "change", "find", "change", "find"]
// [[], [10], [2, 10], [1, 10], [3, 10], [5, 10], [10], [1, 20], [10]]
// Output
// [nil, -1, nil, nil, nil, nil, 1, nil, 2]

// Explanation
// NumberContainers nc = new NumberContainers();
// nc.find(10); // There is no index that is filled with number 10. Therefore, we return -1.
// nc.change(2, 10); // Your container at index 2 will be filled with number 10.
// nc.change(1, 10); // Your container at index 1 will be filled with number 10.
// nc.change(3, 10); // Your container at index 3 will be filled with number 10.
// nc.change(5, 10); // Your container at index 5 will be filled with number 10.
// nc.find(10); // Number 10 is at the indices 1, 2, 3, and 5. Since the smallest index that is filled with 10 is 1, we return 1.
// nc.change(1, 20); // Your container at index 1 will be filled with number 20. Note that index 1 was filled with 10 and then replaced with 20.
// nc.find(10); // Number 10 is at the indices 2, 3, and 5. The smallest index that is filled with 10 is 2. Therefore, we return 2.

import (
	"fmt"
)

type NumberContainers struct {
	containers map[int]int
	findMemo   map[int]int
}

func Constructor() NumberContainers {
	NumberContainers := new(NumberContainers)
	NumberContainers.containers = make(map[int]int)
	NumberContainers.findMemo = make(map[int]int)
	return *NumberContainers
}

func (this *NumberContainers) Change(index int, number int) {
	// Insert or replace number at given index
	lastNumber, ok := this.containers[index]
	delete(this.findMemo, number)
	delete(this.findMemo, lastNumber)
	if !ok { // if no number was in the current container insert it
		this.containers[index] = number
		return
	}
	// set the new number to this container index
	this.containers[index] = number
}

func (this *NumberContainers) Find(number int) int {
	findMemodMin, ok := this.findMemo[number]
	if ok {
		return findMemodMin
	}

	min_index := 0
	for index, containerNumber := range this.containers {
		if number == containerNumber {

			if min_index == 0 {
				min_index = index
				continue
			} else if index < min_index {
				min_index = index
			}
		}
	}

	if min_index == 0 {
		return -1
	}

	this.findMemo[number] = min_index
	return min_index
}

/**
 * Your NumberContainers object will be instantiated and called as such:
 * obj := Constructor();
 * obj.Change(index,number);
 * param_2 := obj.Find(number);
 */

func main() {

	nc := Constructor()
	inputs := getInput()
	expected := getExpected()

	for testNum, operation := range getOps() {

		switch operation {
		case "find":
			found := nc.Find(inputs[testNum][0])
			fmt.Printf("Find(%d) = %d ", inputs[testNum][0], found)
			if found != expected[testNum] {
				fmt.Printf("Expected %d, found %d testNum %d\n", expected[testNum], found, testNum)
				return
			}
		case "change":
			fmt.Printf("Change(%d, %d)\n", inputs[testNum][0], inputs[testNum][1])
			nc.Change(inputs[testNum][0], inputs[testNum][1])
		}
		fmt.Println("containers:", nc.containers)
		fmt.Println("findMemo", nc.findMemo)
	}
}

func getOps() []string {
	return []string{"change","change","find","change","find","find","find","find","change","change","change","find","change","change","change","change","find","find","find","change","change","find","change","change","find","find","change","change","find","find","find","find","find","change","find","change","find","find","change","find","find","find","change","change","change","find","find","find","find","find","change","change","find","find","find","find","change","find","find","change","find","change","change","change","find","change","find","change","change","find","find","find","find","find","change","change","change","change","find","find","change","change","find","find","change","change","change","find","find","change","change","find","change","change","change","change","change","change","change","find","change","find","change","find","change","change","change","find","find","find","change","change","find","find","find","find","find","change","change","find","find","change","find","change","change","change","find","change","change","change","change","change","change","change","find","change","find","find","change","change","find","find","find","find","find","change","change","change","find","change","find","change","change","find","change","change","find","find","change","change","find","change","find","change","find","find","find","change","change","change","find","find","change","change","change","find","find","change","change","change","change","find","find","find","change","find","change","change","find","find","change","change","find","find","find","change","find","change","find","change"}
}

func getInput() [][]int {
	return [][]int{{33,66},{191,73},{73},{84,14},{185},{66},{196},{185},{173,129},{133,14},{137,77},{129},{191,77},{37,73},{169,107},{84,77},{66},{77},{107},{70,129},{38,110},{196},{133,14},{109,102},{110},{185},{173,107},{84,66},{185},{102},{196},{171},{171},{33,110},{107},{149,185},{66},{102},{183,73},{185},{102},{66},{191,14},{37,77},{38,111},{77},{196},{77},{110},{111},{37,110},{58,102},{111},{171},{14},{14},{33,168},{168},{111},{197,14},{129},{34,66},{130,196},{97,110},{111},{134,125},{14},{41,110},{197,125},{185},{111},{77},{185},{185},{184,77},{130,37},{197,14},{58,110},{171},{129},{134,110},{134,111},{102},{110},{41,73},{179,102},{135,185},{168},{110},{130,37},{58,185},{37},{137,129},{116,110},{183,129},{183,185},{38,107},{37,129},{97,14},{168},{33,196},{66},{134,107},{185},{134,125},{97,110},{149,14},{196},{37},{129},{135,107},{135,171},{168},{73},{129},{125},{171},{149,14},{141,196},{125},{171},{97,37},{168},{179,129},{41,14},{97,110},{102},{41,37},{149,107},{173,66},{109,14},{149,66},{135,66},{149,110},{110},{116,37},{129},{73},{183,37},{116,129},{111},{77},{171},{77},{66},{58,185},{173,125},{169,37},{129},{109,185},{66},{112,77},{137,196},{102},{184,107},{70,196},{110},{66},{84,102},{173,171},{111},{58,185},{14},{41,185},{185},{14},{185},{38,77},{133,37},{169,77},{73},{196},{84,102},{37,129},{96,110},{129},{107},{179,107},{197,171},{116,37},{84,73},{168},{125},{107},{41,66},{77},{141,125},{149,102},{102},{14},{128,66},{37,110},{66},{102},{196},{173,185},{73},{33,77},{111},{169,125}}
}

func getExpected() []any {
	return []any{nil,nil,191,nil,-1,33,-1,-1,nil,nil,nil,173,nil,nil,nil,nil,33,84,169,nil,nil,-1,nil,nil,38,-1,nil,nil,-1,109,-1,-1,-1,nil,169,nil,84,109,nil,149,109,84,nil,nil,nil,37,-1,37,33,38,nil,nil,38,-1,133,133,nil,33,38,nil,70,nil,nil,nil,38,nil,133,nil,nil,149,38,137,149,149,nil,nil,nil,nil,-1,70,nil,nil,109,37,nil,nil,nil,33,37,nil,nil,130,nil,nil,nil,nil,nil,nil,nil,33,nil,34,nil,58,nil,nil,nil,33,130,37,nil,nil,-1,41,37,134,135,nil,nil,134,135,nil,-1,nil,nil,nil,109,nil,nil,nil,nil,nil,nil,nil,97,nil,37,-1,nil,nil,-1,184,-1,184,34,nil,nil,nil,37,nil,34,nil,nil,-1,nil,nil,97,34,nil,nil,-1,nil,133,nil,41,133,41,nil,nil,nil,-1,33,nil,nil,nil,37,184,nil,nil,nil,nil,-1,134,179,nil,38,nil,nil,149,191,nil,nil,34,149,33,nil,84,nil,-1,nil}
}
