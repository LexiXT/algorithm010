<?php
class Solution {
    protected $result;
    /**
     * @param Integer $n
     * @return String[]
     */
    function generateParenthesis($n) {
        // 强行使用回溯法求解,题目好难，只能靠背背背！！！
        // 时间复杂度 O(4^n/sqart(n))，空间复杂度O(n)
        if ($n <= 0) return $this->result;
        $this->helper($n, '', 0, 0);
        return $this->result;
    }

    private function helper($n, $path, $leftCount, $rightCount)
    {
        if (strlen($path) == $n * 2) {
            $this->result[] = $path;
            return;
        }

        // 分治 & 剪枝
        if ($this->valid($n, $leftCount + 1, $rightCount)) {
            $tmp = $path;
            $path .= '(';
            $this->helper($n, $path, $leftCount + 1, $rightCount);
            // 回溯
            $path = $tmp;
        }

        if ($this->valid($n, $leftCount, $rightCount + 1)) {
            $tmp = $path;
            $path .= ')';
            $this->helper($n, $path, $leftCount, $rightCount + 1);
            // 回溯
            $path = $tmp;
        }
    }

    private function valid($n, $leftCount, $rightCount)
    {
        if ($leftCount > $n || $rightCount > $n) return false;
        if ($rightCount > $leftCount) return false;
        return true;
    }

    // 使用递归
    // 时间复杂度 O(4^n/sqart(n))，空间复杂度O(4^n/sqart(n))
    public $res = [];
    /**
     * @param Integer $n
     * @return String[]
     */
    function generateParenthesis($n) {
        $this->generate(0, 0, $n, '');
        return $this->res;
    }
    //generrate为递归方法
    function generate($left, $right, $count, $txt) {
        if ($left == $count && $right == $count) {
            $this->res[] = $txt;
        }
        if ($left < $count) {
            $this->generate($left + 1, $right, $count, $txt.'(');
        }
        if ($right < $left) {
            $this->generate($left, $right + 1, $count, $txt.')');
        }
    }
}