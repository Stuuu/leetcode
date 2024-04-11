package main

import "fmt"

// Given the head of a singly linked list, return the middle node of the linked list.

// If there are two middle nodes, return the second middle node.

// Example 1:

// Input: head = [1,2,3,4,5]
// Output: [3,4,5]
// Explanation: The middle node of the list is node 3.
// Example 2:

// Input: head = [1,2,3,4,5,6]
// Output: [4,5,6]
// Explanation: Since the list has two middle nodes with values 3 and 4, we return the second one.

// Constraints:

// The number of nodes in the list is in the range [1, 100].
// 1 <= Node.val <= 100

type ListNode struct {
	Val  int
	Next *ListNode
}

func main() {

	list_vals := []int{1, 2, 3, 4, 5, 6}

	// list_vals := []int{}

	// create head with the value from first element
	head := &ListNode{Val: list_vals[0]}

	tail := head
	// range remaining values
	for _, sum := range list_vals[1:] {
		node := &ListNode{Val: sum}
		tail.Next = node // append node to list
		tail = node      // change tail pointer to currently added node
	}

	fmt.Println(middleNode(head))
}

/**
 * Definition for singly-linked list.
 * type ListNode struct {
 *     Val int
 *     Next *ListNode
 * }
 */
func middleNode(head *ListNode) *ListNode {

	list_len := 0

	head_copy := head

	for {
		list_len++
		if head.Next == nil {
			break
		}
		head = head.Next
	}
	middle := (list_len / 2) + 1

	//reset counter to 0
	list_len = 0

	for {
		list_len++
		if list_len == middle {

			return head_copy

		}
		head_copy = head_copy.Next
	}
}
