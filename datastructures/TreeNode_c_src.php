<head>
<title>TreeNode.c</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<style type="text/css">
.ln { color: rgb(0,0,0); font-weight: normal; font-style: normal; }
.s0 { color: rgb(204,120,50); }
.s1 { color: rgb(169,183,198); }
.s2 { color: rgb(106,135,89); }
.s3 { color: rgb(70,70,241); }
.s4 { color: rgb(15,151,149); }
.s5 { color: rgb(104,151,187); }
</style>
</head>
<div style="background-color: #2b2b2b; padding: 10px;">
<pre>

<span class="s0">#include </span><span class="s2">&quot;TreeNode_c.h&quot;</span><span class="s1"> 
 
TreeNode* addChild(TreeNode *currentTree, </span><span class="s0">int </span><span class="s1">d) { 
    printf(</span><span class="s2">&quot;Adding child %d...</span><span class="s3">\n</span><span class="s2">&quot;</span><span class="s1">, d); 
    TreeNode *child = malloc(</span><span class="s0">sizeof</span><span class="s1">(TreeNode)); 
    child</span><span class="s4">-&gt;</span><span class="s1">data = d; 
    </span><span class="s0">if </span><span class="s1">(currentTree</span><span class="s4">-&gt;</span><span class="s1">children.size == </span><span class="s5">0</span><span class="s1">) { 
        currentTree</span><span class="s4">-&gt;</span><span class="s1">children.array = malloc(</span><span class="s5">100 </span><span class="s1">* </span><span class="s0">sizeof</span><span class="s1">(TreeNode)); 
    } 
    currentTree</span><span class="s4">-&gt;</span><span class="s1">children.array[currentTree</span><span class="s4">-&gt;</span><span class="s1">children.size] = child; 
 
    currentTree</span><span class="s4">-&gt;</span><span class="s1">children.size++; 
    setParent(child, currentTree); 
    </span><span class="s0">return </span><span class="s1">child; 
} 
 
</span><span class="s0">void </span><span class="s1">setParent(TreeNode *currentTree, TreeNode *newParent) { 
    currentTree</span><span class="s4">-&gt;</span><span class="s1">parent = newParent; 
} 
 
</span><span class="s0">void </span><span class="s1">printTree(TreeNode *currentTree) { 
    TreeNode *n = currentTree; 
    printSubTree(n, </span><span class="s5">0</span><span class="s1">); 
    printf(</span><span class="s2">&quot;</span><span class="s3">\n</span><span class="s2">&quot;</span><span class="s1">); 
} 
 
</span><span class="s0">int </span><span class="s1">printSubTree(TreeNode *n, </span><span class="s0">int </span><span class="s1">level) { 
    </span><span class="s0">int </span><span class="s1">a; 
    </span><span class="s0">for </span><span class="s1">(a = </span><span class="s5">0</span><span class="s1">; a &lt; level; a++) { 
        printf(</span><span class="s2">&quot;-----&quot;</span><span class="s1">); 
    } 
    printf(</span><span class="s2">&quot;%d</span><span class="s3">\n</span><span class="s2">&quot;</span><span class="s1">, n</span><span class="s4">-&gt;</span><span class="s1">data); 
    </span><span class="s0">if </span><span class="s1">(n</span><span class="s4">-&gt;</span><span class="s1">children.size == </span><span class="s5">0</span><span class="s1">) { 
        </span><span class="s0">return </span><span class="s1">n</span><span class="s4">-&gt;</span><span class="s1">data; 
    } 
    </span><span class="s0">int </span><span class="s1">size = n</span><span class="s4">-&gt;</span><span class="s1">children.size; 
    level++; 
    </span><span class="s0">int </span><span class="s1">i; 
    </span><span class="s0">for </span><span class="s1">(i = </span><span class="s5">0</span><span class="s1">; i &lt; size; i++) { 
        printSubTree(n</span><span class="s4">-&gt;</span><span class="s1">children.array[i], level); 
    } 
    </span><span class="s0">return </span><span class="s1">-</span><span class="s5">1</span><span class="s1">; 
} 
 
</span><span class="s0">void </span><span class="s1">depthSearch(TreeNode *currentTree) { 
    printf(</span><span class="s2">&quot;Depth-first search:</span><span class="s3">\n</span><span class="s2">&quot;</span><span class="s1">); 
    TreeNode *n = currentTree; 
    depthSearchNode(n); 
    printf(</span><span class="s2">&quot;</span><span class="s3">\n\n</span><span class="s2">&quot;</span><span class="s1">); 
} 
 
</span><span class="s0">void </span><span class="s1">depthSearchNode(TreeNode *n) { 
    printf(</span><span class="s2">&quot;%d &quot;</span><span class="s1">, n</span><span class="s4">-&gt;</span><span class="s1">data); 
    </span><span class="s0">if </span><span class="s1">(n</span><span class="s4">-&gt;</span><span class="s1">children.size &gt; </span><span class="s5">0</span><span class="s1">) { 
        </span><span class="s0">int </span><span class="s1">size = n</span><span class="s4">-&gt;</span><span class="s1">children.size; 
        </span><span class="s0">int </span><span class="s1">i; 
        </span><span class="s0">for </span><span class="s1">(i = </span><span class="s5">0</span><span class="s1">; i &lt; size; i++) { 
            depthSearchNode(n</span><span class="s4">-&gt;</span><span class="s1">children.array[i]); 
        } 
    } 
} 
 
</span><span class="s0">void </span><span class="s1">breadthSearch(TreeNode *currentTree) { 
    printf(</span><span class="s2">&quot;Breadth-first search:</span><span class="s3">\n</span><span class="s2">&quot;</span><span class="s1">); 
    TreeNode *n = currentTree; 
    currentTree</span><span class="s4">-&gt;</span><span class="s1">breadthQueue.array = malloc(</span><span class="s5">100 </span><span class="s1">* </span><span class="s0">sizeof</span><span class="s1">(TreeNode)); 
    currentTree</span><span class="s4">-&gt;</span><span class="s1">breadthQueue.size = </span><span class="s5">0</span><span class="s1">; 
    currentTree</span><span class="s4">-&gt;</span><span class="s1">breadthQueue.array[currentTree</span><span class="s4">-&gt;</span><span class="s1">breadthQueue.size] = n; 
    currentTree</span><span class="s4">-&gt;</span><span class="s1">breadthQueue.size++; 
    </span><span class="s0">while </span><span class="s1">(currentTree</span><span class="s4">-&gt;</span><span class="s1">breadthQueue.size &gt; </span><span class="s5">0</span><span class="s1">) { 
        currentTree</span><span class="s4">-&gt;</span><span class="s1">breadthQueue = breadthSearchOneLevel(currentTree, currentTree</span><span class="s4">-&gt;</span><span class="s1">breadthQueue); 
        </span><span class="s0">if </span><span class="s1">(currentTree</span><span class="s4">-&gt;</span><span class="s1">breadthQueue.size &gt; </span><span class="s5">10</span><span class="s1">) { 
            </span><span class="s0">break</span><span class="s1">; 
        } 
    } 
    printf(</span><span class="s2">&quot;</span><span class="s3">\n\n</span><span class="s2">&quot;</span><span class="s1">); 
} 
 
</span><span class="s0">struct </span><span class="s1">BreadthQueue breadthSearchOneLevel(TreeNode *currentTree, </span><span class="s0">struct </span><span class="s1">BreadthQueue breadthQueue) { 
    TreeNode *n = breadthQueue.array[</span><span class="s5">0</span><span class="s1">]; 
    printf(</span><span class="s2">&quot;%d &quot;</span><span class="s1">, n</span><span class="s4">-&gt;</span><span class="s1">data); 
    currentTree</span><span class="s4">-&gt;</span><span class="s1">breadthQueue = breadthQueue_remove(breadthQueue, </span><span class="s5">0</span><span class="s1">); 
    </span><span class="s0">if </span><span class="s1">(n</span><span class="s4">-&gt;</span><span class="s1">children.size &gt; </span><span class="s5">0</span><span class="s1">) { 
        </span><span class="s0">int </span><span class="s1">size = n</span><span class="s4">-&gt;</span><span class="s1">children.size; 
        </span><span class="s0">int </span><span class="s1">i; 
        </span><span class="s0">for </span><span class="s1">(i = </span><span class="s5">0</span><span class="s1">; i &lt; size; i++) { 
            currentTree</span><span class="s4">-&gt;</span><span class="s1">breadthQueue.array[currentTree</span><span class="s4">-&gt;</span><span class="s1">breadthQueue.size] = n</span><span class="s4">-&gt;</span><span class="s1">children.array[i]; 
            currentTree</span><span class="s4">-&gt;</span><span class="s1">breadthQueue.size++; 
        } 
    } 
    </span><span class="s0">return </span><span class="s1">currentTree</span><span class="s4">-&gt;</span><span class="s1">breadthQueue; 
} 
 
</span><span class="s0">struct </span><span class="s1">BreadthQueue breadthQueue_remove(</span><span class="s0">struct </span><span class="s1">BreadthQueue breadthQueue, </span><span class="s0">int </span><span class="s1">index) { 
    </span><span class="s0">if </span><span class="s1">(index &lt;= breadthQueue.size - </span><span class="s5">1</span><span class="s1">) { 
        </span><span class="s0">int </span><span class="s1">i; 
        </span><span class="s0">for </span><span class="s1">(i = index; i &lt; breadthQueue.size - </span><span class="s5">1</span><span class="s1">; i++) { 
            breadthQueue.array[i] = breadthQueue.array[i + </span><span class="s5">1</span><span class="s1">]; 
        } 
    } 
    breadthQueue.size--; 
    </span><span class="s0">return </span><span class="s1">breadthQueue; 
} 
</span></pre>
</div>