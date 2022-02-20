  <?php
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

        private $temp_result_array = [];

        /**
         * @param ListNode $list1
         * @param ListNode $list2
         * @return ListNode
         */
        function mergeTwoLists($list1, $list2)
        {
            if ($list1 === null && $list2 === null) {
                $merged_list = $this->createListFromArr(
                    array_reverse($this->temp_result_array)
                );
                return $merged_list;
            }
            // if either list is empty we can return the other
            if ($list1 == null) return $list2;
            if ($list2 == null) return $list1;



            // 1 <=> 1; = 0
            // 1 <=> 2; = -1
            // 2 <=> 1; = 1
            switch ($list1->val <=> $list2->val) {
                case 1:
                    $this->temp_result_array[] = $list2->val;
                    $this->temp_result_array[] = $list1->val;
                    break;
                case -1:
                    $this->temp_result_array[] = $list1->val;
                    $this->temp_result_array[] = $list2->val;
                    break;
                case 0:
                    $this->temp_result_array[] = $list1->val;
                    $this->temp_result_array[] = $list2->val;
                    break;
            }



            $this->mergeTwoLists($list1->next, $list2->next);
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

    $ex_list1 = [1, 2, 4];
    $ex_list2 = [1, 3, 4];

    $list1 = (new Solution())->createListFromArr(array_reverse($ex_list1));
    $list2 = (new Solution())->createListFromArr(array_reverse($ex_list2));

    (new Solution())->mergeTwoLists($list1, $list2);
