<?php
// Given head which is a reference node to a singly-linked list. The value of each node in the linked list is either 0 or 1. The linked list holds the binary representation of a number.

// Return the decimal value of the number in the linked list.

// The most significant bit is at the head of the linked list.



// Example 1:

use Solution as GlobalSolution;

$head = [1, 0, 1];
// Output: 5
// Explanation: (101) in base 2 = (5) in base 10
// Example 2:

// $head = [0];
// Output: 0


// Constraints:

// The Linked List is not empty.
// Number of nodes will not exceed 30.
// Each node's value is either 0 or 1.
class ListNode
{
  public $val = 0;
  public $next = null;
  public function __construct($val = 0, $next = null)
  {
    $this->val = $val;
    $this->next = $next;
  }
}
class Solution
{

  /**
   * @param ListNode $head
   * @return Integer
   */
  function getDecimalValue($head)
  {
    $bin_val = '';
    while ($head->next) {
      $bin_val .= $head->val;
      $head = $head->next;
    }
    $bin_val .= $head->val;


    return bindec($bin_val);
  }

  /**
   * just a helper to turn array input in linked list
   */
  function createListFromArr($array)
  {
    $tmp = null;
    foreach ($array as $value) {
      $l = new ListNode($value);
      $l->next = $tmp;
      $tmp = $l;
    }
    unset($tmp);

    return $l;
  }
}

$head = [1, 0, 1, 0, 0, 1, 1, 1, 0, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 1];


$list = (new Solution())->createListFromArr($head);

echo (new Solution())->getDecimalValue($list);
