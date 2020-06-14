# 算法训练营第一周 学习笔记

## 一、常用工具配置
- 刻意练习

## 二、基本功和编程指法
- Best Practices/Top tips

## 三、时间复杂度、空间复杂度
- Big O notation
    - O(1): Constant Complexity 常数复杂度
    - O(log n): Logatithmix Complexity 对数复杂度
    - O(n): Linear Complexity 线性时间复杂度
    - O(n^2): N square Complexity 平方
    - O(n^3): N cubic Complexity 立方
    - O(2^n): Exponential Growth 指数
    - O(n!): Factorial 阶乘

- 主定理
Application to common algorithms
|Algorithm  |Recurrence relationship  |Run time  |
|:-----------|:-----------------:|--------------:|
|Binary search(二分查找)|T(n)=T(n/2)+O(1)|O(logn)|
|Binary tree traversal(二叉树的遍历)|T(n)=2T(n/2)+O(1)|O(n)|
|Optimal sorted matrix search(最佳排序矩阵二分查找)|T(n)=2T(n/2)+O(logn)|O(n)|
|Merge sort(归并排序)|T(n)=2T(n/2)+O(n)|O(nlogn)|
注：
1. 二叉树的每个节点都会访问一次且仅访问一次，时间复杂度O(n);
2. 一维数组进行查找O(logn)，二维有序的矩阵进行查找O(n)。