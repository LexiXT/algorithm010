# 算法训练营第六周 学习笔记
## 第6周 第12课 | 动态规划
#### 1. 动态规划的实现及关键点
- 分治+回溯+递归+动态规划

递归代码模板 
```
# Python
def recursion(level, param1, param2, ...): 
    # recursion terminator 
    if level > MAX_LEVEL: 
     process_result 
     return 
    # process logic in current level 
    process(level, data...) 
    # drill down 
    self.recursion(level + 1, p1, ...) 
    # reverse the current level status if needed

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

// C/C++
void recursion(int level, int param) { 
  // recursion terminator
  if (level > MAX_LEVEL) { 
    // process result 
    return ; 
  }

  // process current logic 
  process(level, param);

  // drill down 
  recursion(level + 1, param);

  // reverse the current level status if needed
}

// JavaScript
const recursion = (level, params) =>{
   // recursion terminator
   if(level > MAX_LEVEL){
     process_result
     return 
   }
   // process current level
   process(level, params)
   //drill down
   recursion(level+1, params)
   //clean current level status if needed
   
}
```

分治代码模板
```
# Python
def divide_conquer(problem, param1, param2, ...): 
  # recursion terminator 
  if problem is None: 
  print_result 
  return 

  # prepare data 
  data = prepare_data(problem) 
  subproblems = split_problem(problem, data) 

  # conquer subproblems 
  subresult1 = self.divide_conquer(subproblems[0], p1, ...) 
  subresult2 = self.divide_conquer(subproblems[1], p1, ...) 
  subresult3 = self.divide_conquer(subproblems[2], p1, ...) 
  …

  # process and generate the final result 
  result = process_result(subresult1, subresult2, subresult3, …)
  
  # revert the current level states

C/C++
int divide_conquer(Problem *problem, int params) {
  // recursion terminator
  if (problem == nullptr) {
    process_result
    return return_result;
  } 

  // process current problem
  subproblems = split_problem(problem, data)
  subresult1 = divide_conquer(subproblem[0], p1)
  subresult2 = divide_conquer(subproblem[1], p1)
  subresult3 = divide_conquer(subproblem[2], p1)
  ...

  // merge
  result = process_result(subresult1, subresult2, subresult3)
  // revert the current level status
 
  return 0;
}


JavaScript
//Javascript
const divide_conquer = (problem, params) => {

  // recursion terminator

  if (problem == null) {

    process_result

    return

  } 

  // process current problem

  subproblems = split_problem(problem, data)

  subresult1 = divide_conquer(subproblem[0], p1)

  subresult2 = divide_conquer(subproblem[1], p1)

  subresult3 = divide_conquer(subproblem[2], p1)

  ...

  // merge

  result = process_result(subresult1, subresult2, subresult3)

  // revert the current level status

}
```
感触
1. 人肉递归低效，很累
2. 找到最近最简方法，将其拆解成可重复解决的问题
3. 数学归纳法思维（抵制人肉递归的诱惑） 
> 本质：寻找重复性——>计算机指令集

- Divivde & Conquer + Optimal substructure 分治 + 最优子结构
- **关键点**
  - 动态规划和递归或者分治没有根本上的区别（关键看有无最优的子结构）
  - 共性：找到重复子问题
  - 差异性：最优子结构、中途可以淘汰次优解 

#### 2. DP例题解析：Fibonacci数列、路径计数
- 动态规划关键点（63. 不同路径||）
  1. 最优子结构 opt[n] = best_of(opt[n-1], opt[n-2], ...)
  2. 储存中间状态： opt[i]
  3. 递推公式（美其名曰：状态转移方程或者DP方程）
    Fib: opt[i,j] = opt[i+1][j] + opt[i][j+1]（且判断a[i,j]是否空地）
    状态转移方程（DP方程）
    opt[i,j] = opt[i+1,j] + opt[i,j+1]
    完整逻辑：
    if a[i,j] = '空地'：
      opt[i,j] = opt[i+1,j] + opt[i,j+1]
    else:
      opt[i,j] = 0 

#### 3. DP例题解析：最长公共子序列
- 动态规划小结：
  1. 打破自己的思维惯性，形成机器思维
  2. 理解复杂逻辑的关键
  3. 也是职业进阶的要点要领 