<?php
// Given the head of a singly linked list, return true if it is a
// palindrome
//  or false otherwise.



// Example 1:


$head = [1, 2, 2, 1];
// Output: true
// Example 2:


$head = [1, 2];
// Output: false


// Constraints:

// The number of nodes in the list is in the range [1, 105].
// 0 <= Node.val <= 9
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
   * @return Boolean
   */
  function isPalindrome($head)
  {

    $list_vals = '';
    while ($head->next) {
      $list_vals .= $head->val;
      $head = $head->next;
    }
    $list_vals .= $head->val;

    return $list_vals  === strrev($list_vals);
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


$list_head = (new Solution())->createListFromArr($head);

var_dump((new Solution())->isPalindrome($list_head));
