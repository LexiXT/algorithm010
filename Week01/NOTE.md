# 算法训练营第一周 学习笔记
##### 问题
1. LeetCode困难级别的题较难理解，需要稳扎稳打多练习基础题，理解困难题的思路；
2. Stack源码和Queue源码的讲解需要多看。
## 常用工具配置
- 刻意练习

## 基本功和编程指法
- Best Practices/Top tips

## 时间复杂度
- Big O notation
    - O(1): Constant Complexity 常数复杂度
    - O(log n): Logatithmix Complexity 对数复杂度
    - O(n): Linear Complexity 线性时间复杂度
    - O(n^2): N square Complexity 平方
    - O(n^3): N cubic Complexity 立方
    - O(2^n): Exponential Growth 指数
    - O(n!): Factorial 阶乘

[如何理解算法复杂度的表示法](https://www.zhihu.com/question/21387264)

- [主定理](http://zh.wikipedia.org/wiki/%E4%B8%BB%E5%AE%9A%E7%90%86)  [Master theorem](http://en.wikipedia.org/wiki/Master_theorem_(analysis_of_algorithms))
    Application to common algorithms

| Algorithm  | Recurrence relationship  | Run time  |
|:-----------|:-----------------|:--------------|
| Binary search(二分查找) | T(n)=T(n/2)+O(1) | O(logn) |
| Binary tree traversal(二叉树的遍历) | T(n)=2T(n/2)+O(1) | O(n) |
| Optimal sorted matrix search(最佳排序矩阵二分查找) | T(n)=2T(n/2)+O(logn) | O(n) |
| Merge sort(归并排序) | T(n)=2T(n/2)+O(n) | O(nlogn) |
    注：
    一维数组进行查找O(logn)，二维有序的矩阵进行查找O(n)：
    1. 二分查找时间复杂度O(logn)；
    2. 二叉树的前序遍历、中序遍历、后序遍历，时间复杂度O(n)，n是二叉树里面的节点总数，二叉树的每个节点都会访问一次且仅访问一次;
    3. 图的遍历，时间复杂度O(n)，n是图里面的节点总数；
    4. 搜索算法DFS深度优先、BFS广度优先，时间复杂度O(n)，n是搜索空间的节点总数。

## 空间复杂度
- 数组的长度
    - 一维数组：长度为传入的元素个数，空间复杂度为O(n)；
    - 二维数组：长度为n平方，空间复杂度O(n^2)。
- 递归的深度
    - 递归最深的深度即空间复杂度的最大值。

*注：即有递归又有数组，两者之间的最大值即空间复杂度。*

## 数组、链表、跳表的基本实现和特性
- 数组 Array
    - 特性：底层硬件实现基于内存管理器，每当申请数组时，计算机在内存中开辟了一段连续的地址，每一个地址可以直接通过内存管理器进行访问。访问第一个元素和访问中间的任何一个元素，时间复杂度都是O(1)，可以随机的访问任何一个元素且访问速度特别快。
    - 缺点：增加删除元素时，时间复杂度O(n)。

| 操作 | 时间复杂度 |
|:-----------|:------------|
| prepend | O(1) |
| append | O(1) |
| lookup | O(1) |
| insert | O(n) |
| delete | O(n) |

*注：正常情况下数组prepend操作的时间复杂度是O(n)，但是可以进行特殊优化到O(1)。采用的方式是申请稍微大一些的内存空间，然后在数组最开始预留一部分空间，然后prepend的操作则是把头下标前移一个位置即可。*

- 链表 Linked List
    - 单链表
    - 双向链表
    - 循环链表

|  操作 | 时间复杂度|
|:--------|:---------------|
| prepend | O(1) |
| append | O(1) |
| lookup | O(n) |
| insert | O(1) |
| delete | O(1) |

- 跳表 Skip List
*注：只能用于元素有序的情况。*
跳表（skip list）对标的是平衡树（AVL Tree）和二分查找，是一种插入/删除/搜索都是O(logn)的数据结构。升维思想+空间换时间。
    - 优势：原理简单、容易实现、方便扩展、效率更高。在一些热门的项目里用来替代平衡树，如Redis、LevelDB（Google用来取代BigTable）等。
    - 缺点：由于元素进行多次的增加和删除导致索引并不是完全工整；维护成本相对较高，每增加或删除一个元素需要把索引更新一遍。
    - 复杂度：在跳表中查询任意数据的时间复杂度是O(logn)，空间复杂度O(n)。
    - 工程应用：
        - LRU Cache-Linked List 
            - [LRU缓存算法](https://www.jianshu.com/p/b1ab4a170c3c)
            - [LRU缓存机制](https://leetcode-cn.com/problems/lru-cache/)
        - Redis-Skip List
            - [跳跃表](https://redisbook.readthedocs.io/en/latest/internal-datastruct/skiplist.html)
            - [为什么redis使用跳表?](https://www.zhihu.com/question/20202931)


## 栈和队列的基本实现和特性
- 栈（Stack）Last in -  First out
    - 先入后出，增加、删除皆为O(1) ，查询是无序的O(n)
- 队列（Queue）First in - First out
    - 先入先出，添加、删除皆为O(1) ，查询O(n)
- 双端队列（Deque：Double-End Queue）
    - 两端可以进出的Queue，插入、删除O(1) ，查询O(n)
- 优先队列（Priority Queue）
    - 插入操作O(1)
    - 取出操作O(logN) - 按照元素的优先级取出 
    - 底层具体实现的数据结构较为多样和复杂：heap（堆）

