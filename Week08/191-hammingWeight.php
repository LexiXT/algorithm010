<?php
class Solution {
    /**
     * @param Integer $n
     * @return Integer
     */
    function hammingWeight($n) {
        # 时间复杂度O(1)，空间复杂度O(1)
        $count = 0;
        while ($n) {
            $n &= $n-1;
            $count++;
        }
        return $count;
        
    }
}