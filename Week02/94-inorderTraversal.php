<?php
/**
 * Definition for a binary tree node.
 * class TreeNode {
 *     public $val = null;
 *     public $left = null;
 *     public $right = null;
 *     function __construct($value) { $this->val = $value; }
 * }
 */
class Solution {

    /**
     * @param TreeNode $root
     * @return Integer[]
     */
    function inorderTraversal($root) {
        # 递归 时间复杂度O(n),空间复杂度O(n)
        if (empty($root)) {
            return [];
        }
        $result = [];
        $this->helper($root, $result);
        return $result;
    }

    private function helper($root, &$result){
        if ($root == null) {
            return [];
        }
        $this->helper($root->left, $result);
        $result[]=$root->val;
        $this->helper($root->right, $result);
    }
}