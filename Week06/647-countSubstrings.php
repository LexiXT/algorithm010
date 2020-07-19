<?php
class Solution {

    /**
     * @param String $s
     * @return Integer
     */
    function countSubstrings($s) {
        # 动态规划
        # 时间复杂度O(n2)，空间复杂度O(n)
        $len=strlen($s);
        $ans=0;
        for($i=0;$i<=2*$len-1;++$i){
            $left = intval($i / 2);
            $right = intval($left + $i%2);
            while ($left >=0 && $right < $len && $s[$left] == $s[$right])
            {
                $ans++;
                $left -=1 ;
                $right += 1;
            }
        }
        return $ans;
    }
}