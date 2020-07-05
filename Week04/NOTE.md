# 算法训练营第四周 学习笔记
#### 问题
## 第4周 第9课 | 深度优先搜索和广度优先搜索
#### 1. 深度优先搜索、广度优先搜索实现和特性
- 遍历搜索
    - 在树（图/状态集）中寻找特定结点
- 搜索 - 遍历 
    - 每个节点都要访问一次
    - 每个节点仅仅访问一次
    - 对节点的访问顺序不限
        - 深度优先： depth first search
        - 广度优先： breadth first search 
        - 其它：优先级优先

深度优先
```
# 递归写法
visited = set() 
def dfs(node, visited):
    if node in visited: # terminator
        # already visited 
        return 
    visited.add(node) 
    # process current node here. 
    ...
    for next_node in node.children(): 
        if next_node not in visited: 
            dfs(next_node, visited)
```

```
# 非递归写法
def DFS(self, tree): 
    if tree.root is None: 
        return [] 
    visited, stack = [], [tree.root]
    while stack: 
        node = stack.pop() 
        visited.add(node)
        process (node) 
        nodes = generate_related_nodes(node) 
        stack.push(nodes) 
    # other processing work 
    ... 
```
广度优先
```
# Python
def BFS(graph, start, end):
    visited = set()
    queue = [] 
    queue.append([start]) 
    while queue: 
        node = queue.pop() 
        visited.add(node)
        process(node) 
        nodes = generate_related_nodes(node) 
        queue.push(nodes)
    # other processing work 
    ...
```
## 第四周 第10课 | 贪心算法
#### 贪心的实现、特性及实战题目解析
- 贪心算法 Greedy
贪心算法是一种在每一步选择中都采取在当前状态下最好或最优（即最有利）的选择，从而希望导致结果是全局最好或最优的算法。
贪心算法与动态规划的不同在于它对每个子问题的解决方案都做出选择不能回退。动态规划则会保存以前的运算结果，并根据以前的结果对当前进行选择，有回退功能。
- 区别：
    - 贪心：当下做局部最优判断
    - 回溯：能够回退
    - 动态规划：最优判断+回退 
- 贪心算法可以解决一些最优化问题，如：求图中的最小生成树、求哈夫曼编码等。然而对于工程和生活中的问题，贪心法一般不能得到我们所要求的答案。
- 一旦一个问题可以通过贪心法来解决，那么贪心法一般是解决这个问题的最好方法。由于贪心法的高效性以及其所求得的答案比较接近最优结果，贪心法也可以用作辅助算法或者直接解决一些要求结果不特别精确的问题。
- 使用贪心算法的场景：
- 当贪心能够得到全局最优解时；
- 贪心的角度不一样，从后往前贪心，从某一个局部切入进行贪心。
## 第4周 第11课 | 二分查找
#### 二分查找的实现、特性及实战题目解析
- 二分查找的前提
    1. 目标函数单调性（单调递增或递减）
    2. 存在上下界（bounded）
    3. 能够通过索引访问（index accessible） 

二分查找代码模板
```
# Python
left, right = 0, len(array) - 1 
while left <= right: 
      mid = (left + right) / 2 
      if array[mid] == target: 
            # find the target!! 
            break or return result 
      elif array[mid] < target: 
            left = mid + 1 
      else: 
            right = mid - 1
```

