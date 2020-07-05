<?php
class Solution {

    /**
     * @param Integer[] $g
     * @param Integer[] $s
     * @return Integer
     */
    function findContentChildren($g, $s) {
        # 双指针法
        # 时间复杂度O(n)
        # 空间复杂度O(1)
        $i = 0;
        $j = 0;
        $count = 0;
        sort($g);
        sort($s);
        while ($i<count($g) && $j<count($s)) {
            if ($g[$i]<=$s[$j]) {
                $i++;
                $count++;
            }
            $j++;
        }
        return $count;
    }
}