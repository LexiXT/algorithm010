<?php
/**
 * Definition for a Node.
 * class Node {
 *     public $val = null;
 *     public $children = null;
 *     function __construct($val = 0) {
 *         $this->val = $val;
 *         $this->children = array();
 *     }
 * }
 */

class Solution {
    /**
     * @param Node $root
     * @return integer[]
     */
    function preorder($root) {
        # 借助栈的特性，将二叉树压入栈
        # 时间复杂度O(M)，空间复杂度O(M)
        $s = new SplStack();
        $s->push($root);

        $result = [];
        while (!$s->isEmpty()) {
            $data = $s->pop();
            $result[] = $data->val;
            for ($i=count($data->children)-1; $i>=0; --$i) {
                $s->push($data->children[$i]);
            }
        }
        return $result;

        # 前序遍历，根-左-右。使用遍历，
        # 时间复杂度O(M)，M是N叉树的节点，空间复杂度O(M)
        // $result = [];
        // $this->helper($root, $result);
        // return $result;
    }

    # 递归调用的方法
    private function helper($root, &$result) {
        if ($root->val === null) {
            return [];
        }
        $result[] = $root->val;
        foreach ($root->children as $children) {
            $this->helper($children, $result);
        }
    }
}