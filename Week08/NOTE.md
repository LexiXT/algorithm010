# 算法训练营第八周 学习笔记
## 第8周 第16课 | 位运算
#### 1. 位运算基础及实战要点
- 位运算符
    - 机器里的数字表示方式和存储格式就是二进制 
- 算数移位与逻辑移位
-    异或：相同为0，不同为1。也可用“不进位加法”来理解。
![实战位运算要点](https://img-blog.csdnimg.cn/20200802215435271.png?x-oss-process=image/watermark,type_ZmFuZ3poZW5naGVpdGk,shadow_10,text_aHR0cHM6Ly9ibG9nLmNzZG4ubmV0L3FxXzM2NjM4MTcw,size_16,color_FFFFFF,t_70)

- 位运算的应用

## 第8周 第17课 | 布隆过滤器和LRU缓存
#### 1. 布隆过滤器的实现及应用
- HasgTable + 拉链存储重复元素
    - 一个很长的二进制向量和一系列随机映射函数。布隆过滤器可以用于检索一个元素是否在一个集合中。
    - 优点是空间效率和查询时间都远远超过一般算法；
    - 缺点是有一定的误识别率和删除困难。 
- 哈希函数的概念是：将任意大小的数据转换成特定大小的数据的函数，转换后的数据称为哈希值或哈希编码。
- 案例
    1. 比特币网络
    2. 分布式网络（Map-Reduce）- Hadoop、search engine
    3. Redis缓存
    4. 垃圾邮件、评论等的过滤
- [布隆过滤器的原理和实现](https://www.cnblogs.com/cpselvis/p/6265825.html)
- [使用布隆过滤器解决魂村击穿、垃圾邮件识别、集合判重](https://blog.csdn.net/tianyaleixiaowu/article/details/74721877)
- [布隆过滤器Python代码示例](https://shimo.im/docs/UITYMj1eK88JCJTH/read)

#### 2. LRU Cache 的实现、应用和题解
- Cache缓存
 1. 记忆
 2. 钱包 - 储物柜
 3. 代码模块 
- LRU Cache
     - 两个要素： 大小、替换策略
        - 替换策略：
        1. LFU - least frequently used
        2. LRU - least recently used  
    - Hash Table + Double LinkedList
    - O(1)查询
    - O(1) 修改、更新

## 第8周 第18课 | 排序算法
#### 1. 初级排序和高级排序的实现和特性
- 排序算法
    1. 比较类排序：通过比较来决定元素箭的相对次序，由于其时间复杂度不能突破O(nlogn)，因此也称为非线性时间比较类排序。 
    2. 非比较类排序：  不通过比较来决定元素间的相对次序，它可以突破基于比较排序的时间下界，以线性时间运行，因此也成为线性时间非比较类排序。

![在这里插入图片描述](https://img-blog.csdnimg.cn/20200802221909906.png?x-oss-process=image/watermark,type_ZmFuZ3poZW5naGVpdGk,shadow_10,text_aHR0cHM6Ly9ibG9nLmNzZG4ubmV0L3FxXzM2NjM4MTcw,size_16,color_FFFFFF,t_70)
[十大经典排序算法](https://www.cnblogs.com/onepixel/p/7674659.html)
#### 2. 特殊排序及实战题目详解
- 计数排序
- 桶排序
- 基数排序
