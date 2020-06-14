<?php
class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $k
     * @return NULL
     */
    function rotate(&$nums, $k) {
        # 1.直接使用php的函数，时间复杂度O(1)，空间复杂度O(n)
        // $len = count($nums);
        // $nums = array_merge(array_slice($nums, $len-$k), array_slice($nums, 0, $len-$k));

        # 2.使用反转
            /** 原始数组                  : 1 2 3 4 5 6 7
                反转所有数字后             : 7 6 5 4 3 2 1
                反转前 k 个数字后          : 5 6 7 4 3 2 1
                反转后 n-k 个数字后        : 5 6 7 1 2 3 4 
            **/
        # 时间复杂度O(n)，空间复杂度O(1)
        $len = count($nums);
        $k %= $len;
        $this->reverse($nums, 0, $len-1); 
        $this->reverse($nums, 0, $k-1);
        $this->reverse($nums, $k, $len-1);
    }

    function reverse(&$nums, $start, $end) {
        while ($start < $end) {
            $temp = $nums[$start];
            $nums[$start] = $nums[$end];
            $nums[$end] = $temp;
            $start++;
            $end--;
        }
    
    }
}