<?php
class Solution {

    /**
     * @param Integer[] $prices
     * @return Integer
     */
    function maxProfit($prices) {
        # 贪心算法
        # 时间复杂度O(n)遍历一次$prices
        # 空间复杂度O(1)
        $profits = 0;
        for ($i=1;$i<count($prices);$i++) {
            $temp = $prices[$i]-$prices[$i-1];
            if ($temp>0) {
                $profits += $temp;
            }
        }
        return $profits;
    }
}