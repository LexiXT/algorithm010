# 算法训练营第二周 学习笔记
##### 问题
## 第2周 第5课 | 哈希表、映射、集合
- 哈希表 Hash table
    - 定义：哈希表（Hash table），也叫散列表，是根据关键码值（Key value）而直接进行访问的数据结构。它通过把关键码值映射到表中一个位置来访问记录，以加快查找的速度。这个映射函数叫作散列函数（Hash Function），存放记录的数组叫作哈希表（或散列表）。
    - 工程实践：
        - 电话号码簿
        - 用户信息表
        - 缓存（LRU Cache）
        - 键值对存储（Redis）
    - 散列函数的特点：
        - 确定性
        - 散列碰撞（collision）
        - 不可逆性
        - 混淆特性    
    - Map: key-value对，key不重复
    - Set：不重复元素的集合 
## 第2周 第6课 | 树、二叉树、二叉搜索树的实现特性   
  >链表Linked List是特殊化的Tree，Tree是特殊化的图Graph。
- 树 Tree
- 二叉树 Binary Tree：每个节点最多有两个子树的树结构。 
    - 二叉树遍历
        - 前序（Pre-order）：根-左-右
        - 中序（In-order）：左-根-右
        - 后序（Post-order）：左-右-根
    - 示例代码：
```
Python
class TreeNode:
    def __init__(self, val):
        self.val = val
        self.left, self.right = None, None
        
    def preorder(self, root):
        if root:
            self.traverse_path.append(root.val)
            self.preorder(root.left)
            self.preorder(root.right)
            
    def inorder(self, root):
        if root:
            self.inorder(root.left)
            self.traverse_path.append(root.val)
            self.inorder(root.right)

    def postorder(self, root):
        if root:
            self.postorder(root.left)
            self.postorder(root.right)
            self.traverse_path.append(root.val)
```
- 二叉搜索树 Binary Search Tree
    - 定义：也称二叉排序树、有序二叉树（Ordered Binary Tree）、排序二叉树（Sorted Binary Tree），是指一颗空树或者具有下列性质的二叉树：
        - 左子树上所有节点的值均小于它的根节点的值；
        - 右子树上所有节点的值均大于它的根节点的值；
        - 以此类推：左、右子树也分别为二叉查找树（重复性）。  
    - 中序遍历：升序遍历
## 第2周 第6课 | 堆和二叉堆、图
- 堆 Heap
    - 定义：可以迅速找到一堆树中的最大或最小值的数据结构。
    - 将根节点最大的堆叫作大顶堆或大根堆，根节点最小的堆叫作小顶堆或小根堆。常见的堆有二叉堆、菲波那切堆等。
    - 假设是大顶堆，则常见操作（API）：
        - find-max:         O(1)
        - delete-max:       O(logN)
        - insert(create):   O(logN) or O(1)  
    - [不同实现的比较](https://en.wikipedia.org/wiki/Heap_(data_structure))
    - [堆的实现代码](https://shimo.im/docs/Lw86vJzOGOMpWZz2/read)
- 二叉堆 Binary Heap
    - 二叉堆性质：通过完全二叉树来实现（注意：不是二叉搜索树）
        - 完全二叉树是指根和叶子节点都是满的，除了最下面一级。
        - 一棵二叉树中，只有最下面两层结点的度可以小于2，并且最下一层的叶结点集中在靠左的若干位置上。这样的二叉树称为完全二叉树。
    - 二叉堆（大顶）它满足下列性质：
        - 是一棵完全树；
        - 树中任意节点的值总是>=其子节点的值。  
    - 二叉堆实现细节：
        - 二叉堆一般都通过“数组”来实现
        - 假设“第一个元素”在数组中的索引为0的话，则父节点和子节点的位置关系如下：
            - 根节点（顶堆元素）是：a[0] ；
            - (01)索引为i的左孩子的索引是(2*i+1)；
            - (02)索引为i的右孩子的索引是(2*i+2)；
            - (03)索引为i的父节点的索引是floor((i-1)/2)，floor()函数向下取整。
        - Insert 插入操作 O(logN)
            - 新元素一律先插入到堆的尾部
            - HeapifyUp ：依次向上调整整个堆的结构（一直到根即可）
        - Delete Max - 删除操作O(logN)
>注意：二叉堆是堆（优先队列Priority_queue）的一种常见且简单的实现；但是并不是最优的实现。
- 图的实现和特性
    - 图的属性和分类
        - 图的属性
            - Graph（V, E）
            - V-vertex：点
            1. 度 - 入度和出度
            2. 点与点之间：连通与否
            - E - edge：边
            1. 有向和无向（单行线）
            2. 权重（边长）    
    - 基于图相关的算法
    - DFS代码 - 递归写法
```
visited = set() # 和树中的DFS最大区别

def dfs(node, visited):
    if node in visited: # terminator
        # already visited
        return
    visited.add(node)
    # process  current node here.
    ...
    for next_node in node.children():
        if not next_node in visited:
            dfs(next_node, visited)
```
- BFS代码
```
def BFS(graph, start, end)：
    queue = []
    queue.append([start])
    
    visited = set() # 和树中的BFS的最大区别
    
    while queue:
        node = queue.pop()
        visited.add(node)
        process(node)
        nodes = generate_related_nodes(node)
        queue.push(nodes)
```

 

