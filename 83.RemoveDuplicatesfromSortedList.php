<?php
// Given the head of a sorted linked list, delete all duplicates such that each element appears only once. Return the linked list sorted as well.



// Example 1:


$head = [1, 1, 2];
// Output: [1,2]
// Example 2:


$head = [1, 1, 2, 3, 3];
// Output: [1,2,3]


// Constraints:

// The number of nodes in the list is in the range [0, 300].
// -100 <= Node.val <= 100
// The list is guaranteed to be sorted in ascending order.
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
   * @return ListNode
   */
  function deleteDuplicates($head)
  {

    $node = $head;
    while ($node->next) {

      if ($node->val === $node->next->val) {
        $node->next = $node->next->next;
        continue;
      }
      $node = $node->next;
    }

    return $head;
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

$head = [1, 1, 2];

$list_head = (new Solution())->createListFromArr($head);

var_dump((new Solution())->deleteDuplicates($list_head));
