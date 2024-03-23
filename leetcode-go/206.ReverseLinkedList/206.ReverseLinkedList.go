package main

import (
	"fmt"
	"slices"
)

// Given the head of a singly linked list, reverse the list, and return the reversed list.

// Example 1:

// Input: head = [1,2,3,4,5]
// Output: [5,4,3,2,1]
// Example 2:

// Input: head = [1,2]
// Output: [2,1]
// Example 3:

// Input: head = []
// Output: []

// Constraints:

// The number of nodes in the list is the range [0, 5000].
// -5000 <= Node.val <= 5000
type ListNode struct {
	Val  int
	Next *ListNode
}

func main() {

	// list_vals := []int{1, 2, 3, 4, 5}

	list_vals := []int{}

	// create head with the value from first element
	head := &ListNode{Val: list_vals[0]}

	tail := head
	// range remaining values
	for _, sum := range list_vals[1:] {
		node := &ListNode{Val: sum}
		tail.Next = node // append node to list
		tail = node      // change tail pointer to currently added node
	}

	fmt.Println(reverseList(head))

}

/**
 * Definition for singly-linked list.
 * type ListNode struct {
 *     Val int
 *     Next *ListNode
 * }
 */
func reverseList(head *ListNode) *ListNode {

	if head == nil {
		return head
	}

	val_list := []int{}

	for {
		val_list = append(val_list, head.Val)
		if head.Next == nil {
			break
		}
		head = head.Next
	}

	slices.Reverse(val_list)

	rev_head := &ListNode{Val: val_list[0]}

	rev_tail := rev_head
	// range remaining values
	for _, val := range val_list[1:] {
		node := &ListNode{Val: val}
		rev_tail.Next = node // append node to list
		rev_tail = node      // change tail pointer to currently added node
	}

	return rev_head
}
