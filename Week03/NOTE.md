# 算法训练营第三周 学习笔记
#### 问题
## 第7课 | 泛型递归、树的递归
#### 1.递归的实现、特性以及思维要点 
- 树的面试题解法一般都是递归
-递归 Recursion
    - 递归 - 循环
    - 通过函数体来进行的循环
    - 类似于栈的形式一层一层进去，栈本身就是递归调用时，系统给我们做的调用栈

Python 代码模板
```
// python
def recursion(level, param1, param2, ...):
    # recursion terminator 递归终止条件
    if level > MAX_LEVEL:
        process_result
        return
        
    # process logic in current level 处理当前层逻辑
    process(level, data...)
    
    # drill down 下探到下一层
    self.recursion(level+1, p1, ...)
    
    # reverse the current level status if needed 清理当前层
    
```
Java 代码模板
```
// Java
public void recur(int level, int param) { 
  // terminator 
  if (level > MAX_LEVEL) { 
    // process result 
    return; 
  }
  // process current logic 
  process(level, param); 
  // drill down 
  recur( level: level + 1, newParam); 
  // restore current status 
 
}
```
>1.不要进行人肉递归
>2.找最近重复性。找到最近最简方法，将其拆解成可重复解决的问题（重复子问题）
>3.数学归纳法思维

## 第8课 | 分治、回溯
#### 1.分治、回溯的实现和特性
- 分治 Divide & Conquer
- 分治和回溯是一种特殊的递归

分治代码模板

```
# Python
def divide_conquer(problem, param1, param2, ...): 
  # recursion terminator  递归终止条件
  if problem is None: 
    print_result 
    return 
  # prepare data 处理当前逻辑
  data = prepare_data(problem) 
  subproblems = split_problem(problem, data) 
  # conquer subproblems  下探到下一层
  subresult1 = self.divide_conquer(subproblems[0], p1, ...) 
  subresult2 = self.divide_conquer(subproblems[1], p1, ...) 
  subresult3 = self.divide_conquer(subproblems[2], p1, ...) 
  …
  # process and generate the final result 将最终结果合并
  result = process_result(subresult1, subresult2, subresult3, …)
    
  # revert the current level states 清理当前层
```
- 回溯 Backtrcking
- 回溯法采用试错的思想，它尝试分步的去解决一个问题，在分步解决问题的过程中，当它通过尝试发现现有的分步答案不能得到有效的正确的解答的时候，它将取消上一步甚至是上几步的计算，再通过其它的可能的分步解答再次尝试寻找问题的答案。
- 回溯法通常用最简单的递归方法来实现，在反复重复上述的步骤后可能出现两种情况：
    - 找到一个可能存在的正确的答案
    - 在尝试了所有可能的分步方法后宣告该问题没有答案。
- 在最坏的情况下，回溯法会导致一次复杂度为指数时间的计算。
- 典型例题：八皇后，位运算   