<?php
// Design a stack that supports push, pop, top, and retrieving the minimum element in constant time.

// Implement the MinStack class:

// MinStack() initializes the stack object.
// void push(int val) pushes the element val onto the stack.
// void pop() removes the element on the top of the stack.
// int top() gets the top element of the stack.
// int getMin() retrieves the minimum element in the stack.
 

// Example 1:

// Input
// ["MinStack","push","push","push","getMin","pop","top","getMin"]
// [[],[-2],[0],[-3],[],[],[],[]]

// Output
// [null,null,null,null,-3,null,0,-2]

// Explanation
// MinStack minStack = new MinStack();
// minStack.push(-2);
// minStack.push(0);
// minStack.push(-3);
// minStack.getMin(); // return -3
// minStack.pop();
// minStack.top();    // return 0
// minStack.getMin(); // return -2
 

// Constraints:

// -231 <= val <= 231 - 1
// Methods pop, top and getMin operations will always be called on non-empty stacks.
// At most 3 * 104 calls will be made to push, pop, top, and getMin.
class MinStack
{
    private $stack = [];
    /**
     */
    public function __construct()
    {
    }

    /**
     * @param Integer $val
     * @return NULL
     */
    public function push($val): void
    {
        $this->stack[] = $val;
    }

    /**
     * @return NULL
     */
    public function pop()
    {
        array_pop($this->stack);
    }

    /**
     * @return Integer
     */
    public function top()
    {
        return $this->stack[max(array_keys($this->stack))];
    }

    /**
     * @return Integer
     */
    public function getMin()
    {
        return min($this->stack);
    }
}

//  Your MinStack object will be instantiated and called as such:
// Explanation
$minStac = new MinStack();
var_dump($minStac->push(-2));
var_dump($minStac->push(0));
var_dump($minStac->push(-3));
var_dump($minStac->getMin()); // return -3
var_dump($minStac->pop());
var_dump($minStac->top());    // return 0
var_dump($minStac->getMin()); // return -2
