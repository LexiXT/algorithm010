<?php
class Solution {

    /**
     * @param String $s
     * @param String $t
     * @return Boolean
     */
    function isIsomorphic($s, $t) {
        # 时间复杂度O(n),空间复杂度O(n)
        $len = strlen($s);
        if ($len != strlen($t)){
            return false;
        }
        for ($i=0;$i<$len;$i++) {
            if (strpos($s, $s[$i]) !== strpos($t,$t[$i])) return false;
        }
        return true;
        
    }
}