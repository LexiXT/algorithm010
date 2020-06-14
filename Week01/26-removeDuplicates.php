<？php
class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function removeDuplicates(&$nums) {
        # 1.寻找当前元素的下一个元素进行比较，相同则删除当前元素
        # 时间复杂度 O(n)，空间复杂度O(1)
        // $total = count($nums);
        // if ($total <= 1) {
        //     return $total;
        // }
        // for ($i=0; $i<$total-1; $i++) {
        //     if ($nums[$i] == $nums[$i+1]) {
        //         unset($nums[$i]);
        //     }
        // }
        // return count($nums);

        # 2. 双指针法，使用快慢指针元素覆盖，$i慢指针，$j快指针，当$nums[$i] == $nums[$j]，$j++跳过重复项；当$nums[$i]!=$nums[$j],将$j的值赋值给$i+1
        # 时间复杂度 O(n),空间复杂度O(1)
        $total = count($nums);
        if ($total<=1) {
            return $total;
        }
        $i = 0;
        for ($j=0; $j<$total; $j++) {
            if ($nums[$i] != $nums[$j]) {
                $i++;
                $nums[$i] = $nums[$j];
            }
        }
        return $i+1;

        # 3.直接使用array_unique函数
        // $nums = array_unique($nums);
        // return count($nums);
    }
}