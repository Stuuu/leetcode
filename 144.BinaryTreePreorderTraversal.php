<?php

// Given the root of a binary tree, return the preorder traversal of its nodes' values.



// Example 1:


// Input: root = [1,null,2,3]
// Output: [1,2,3]
// Example 2:

// Input: root = []
// Output: []
// Example 3:

// Input: root = [1]
// Output: [1]


// Constraints:

// The number of nodes in the tree is in the range [0, 100].
// -100 <= Node.val <= 100

/**
 * Definition for a binary tree node.
 * class TreeNode {
 *     public $val = null;
 *     public $left = null;
 *     public $right = null;
 *     function __construct($val = 0, $left = null, $right = null) {
 *         $this->val = $val;
 *         $this->left = $left;
 *         $this->right = $right;
 *     }
 * }
 */
class Solution
{

    private $node_values = [];

    /**
     * @param TreeNode $root
     * @return Integer[]
     */
    function preorderTraversal($root)
    {


        if ($root == null) {
            return [];
        }


        $this->node_values[] = $root->val;
        $this->preorderTraversal($root->left);



        $this->preorderTraversal($root->right);


        return $this->node_values;
    }
}
