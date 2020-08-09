<?php
class Solution {

    /**
     * @param String $s
     * @return Integer
     */
    function firstUniqChar($s) {
        # 时间复杂度O(n).空间复杂度O(n)
        $len = strlen($s);
        if ($len == 0) return -1;
        $hash = [];
        for ($i=0;$i<$len;$i++) {
            $hash[substr($s, $i, 1)][] = $i;
        }
        foreach ($hash as $v) {
            if (count($v) == 1) return reset($v);
        }
        return -1;

    }
}