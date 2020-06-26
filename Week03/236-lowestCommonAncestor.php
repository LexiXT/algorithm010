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
     * @param TreeNode $p
     * @param TreeNode $q
     * @return TreeNode
     */
    function lowestCommonAncestor($root, $p, $q) {
        # 使用递归
        # 时间复杂度O(n)，空间复杂度O(n)
        // 递归终止条件
        if ($root == null) {
            return null;
        }

        // 如果自身为p或q则直接返回
        if ($root == $p || $root == $q) {
            return $root;
        }
        
        $left = $this->lowestCommonAncestor($root->left, $p, $q);
        $right = $this->lowestCommonAncestor($root->right, $p, $q);

        if (!$left) return $right; // 如果没有左子树就只看右子树
        if (!$right) return $left;

        //如果左右都有p，q那就是本身为最近公共最先
        if ($left && $right) {
            return $root;
        }

        return null;
    }
}