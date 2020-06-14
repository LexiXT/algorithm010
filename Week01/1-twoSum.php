<?php
class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer[]
     */
    function twoSum($nums, $target) {
        # 1.创建一个新数组，判断$target-$nums[$i]是否在新数组中
        # 时间复杂度O(n)，空间复杂度O(n):所需的额外空间取决于哈希表中存储的元素数量，该表中存储了 n 个元素。
        $arr = [];
        for ($i=0; $i<count($nums); $i++) {
            $temp = $target - $nums[$i];
            if (array_key_exists($temp, $arr)) {
                return [$arr[$temp], $i];
            }
            $arr[$nums[$i]] = $i;
        }
        return false;
    }
}