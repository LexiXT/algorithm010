<?php
class Solution {

    /**
     * @param Integer[] $bills
     * @return Boolean
     */
    function lemonadeChange($bills) {
        # 使用贪心算法，分别判断三种情况
        # 时间复杂度O(n)，空间复杂度O(1)
        $five = 0;
        $ten = 0;
        for ($i=0;$i<count($bills);$i++) {
            if ($bills[$i] == 5) {
                $five++;
            } else if ($bills[$i] == 10) {
                if ($five<1) {
                    return false;
                }
                $five--;
                $ten++;
            } else {
                if ($five>=1 && $ten>=1){
                    $five--;
                    $ten--;
                } else if ($five>=3) {
                    $five=$five-3;
                } else {
                    return false;
                }
            }
        }
        return true;
    }
}