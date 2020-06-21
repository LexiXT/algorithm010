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
    function preorderTraversal($root) {
        // 递归
        // if (empty($root)) {
        //     return [];
        // }
        // $node = [$root->val];
        // $nodeleft = $noderight = [];
        // if (!is_null($root->left)) {
        //     $nodeleft = $this->preorderTraversal($root->left);
        // }
        // if (!is_null($root->right)) {
        //     $noderight = $this->preorderTraversal($root->right);
        // }
        // return array_merge($node, $nodeleft, $noderight);

        $result = [];
        $this->helper($root, $result);
        return $result;
    }

    private function helper($root, &$result){
        if ($root == null) {
            return [];
        }
        $result[] = $root->val;
        $this->helper($root->left, $result);
        $this->helper($root->right, $result);
    }
}