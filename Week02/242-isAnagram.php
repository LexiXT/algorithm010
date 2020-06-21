<?php
class Solution {

    /**
     * @param String $s
     * @param String $t
     * @return Boolean
     */
    function isAnagram($s, $t) {
        # 暴力排序法，时间复杂度O(Nlog(n)),空间复杂度O(1)
        // $s = str_split($s);
        // $t = str_split($t);
        // sort($s);
        // sort($t);
        // return $s == $t;

        # 使用一个辅助哈希表，PHP中使用数组即可。遍历两个字符串,将每个字母作为键保存，键值保存同一个键名所有出现的键
        # 时间复杂度O(n),空间复杂度O(n)
        if ($s == $t) {
            return true;
        }
        if (strlen($s) != strlen($t)) {
            return false;
        }
        $sArr = $tArr = [];
        for ($i=0; $i<strlen($s); $i++) {
            $sArr[$s[$i]][] = $s[$i];
            $tArr[$t[$i]][] = $t[$i];
        }
        return $sArr == $tArr;

        # 使用php的内置函数count_chars(string, model)，model=1将返回一个数组，ASCII 值为键名，出现的次数为键值
        # 时间复杂度O(N)，空间复杂度O(1)
        // return count_chars($s, 1) == count_chars($t, 1);
    }
}