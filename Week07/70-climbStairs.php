<?php
class Solution {

    /**
     * @param Integer $n
     * @return Integer
     */
    function climbStairs($n) {
        # 典型的斐波那契数列 f(n) = f(n-1)+f(n-2),使用DP
        # 时间复杂度O(n)，空间复杂度O(1)
        if ($n<=2) {
            return $n;
        }
        $i = 1;
        $j = 2;
        for ($k=3; $k<=$n; $k++) {
            $num = $i + $j;
            $i = $j;
            $j = $num;
        }
        return $num;

        # 使用递推数列的通项公式,f(n) = ( 1/ sqart(5) )[( (1+sqart(5))/2 )^n - ( (1-sqart(5) )/2 )^n]
        # 时间复杂度O(logn),空间复杂度O(1)
        $temp = sqrt(5);
        $fibin = pow((1+$temp)/2, $n+1) - pow((1-$temp)/2, $n+1);
        return (int)($fibin/$temp);
    }
}