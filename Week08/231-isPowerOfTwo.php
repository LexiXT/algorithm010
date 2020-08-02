<?php

class Solution {

    /**
     * @param Integer $n
     * @return Boolean
     */
    function isPowerOfTwo($n) {
        # 位运算
        # 时间复杂度O(1) ,空间复杂度O(1)
        return $n > 0 && ($n&($n-1)) == 0;

    }
}