<?php
class Solution {

    /**
     * @param Integer[][] $grid
     * @return Integer
     */
    function minPathSum($grid) {
        # 动态规划
        # 时间复杂度O(mn),空间复杂度O(1)
        $m = count($grid);
        $n = count($grid[0]);
        $dp = $grid;
        for ($i=0; $i<$m; $i++) {
            for($j=0; $j<$n; $j++) {
                if ($i == 0 && $j == 0) {
                    continue;
                } else if ($i==0) {
                    $grid[$i][$j] = $grid[$i][$j-1] + $grid[$i][$j];
                    // prit_r($dp[$i][$j]);
                } else if ($j==0) {
                    $grid[$i][$j] = $grid[$i-1][$j] + $grid[$i][$j];
                } else {
                    $grid[$i][$j] = min($grid[$i-1][$j], $grid[$i][$j-1]) + $grid[$i][$j];
                }
            }
        }
        return $grid[$m-1][$n-1];
    }
}