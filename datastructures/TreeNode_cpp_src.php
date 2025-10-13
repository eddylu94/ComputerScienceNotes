<head>
<title>TreeNode.cpp</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<style type="text/css">
.ln { color: rgb(0,0,0); font-weight: normal; font-style: normal; }
.s0 { color: rgb(204,120,50); }
.s1 { color: rgb(169,183,198); }
.s2 { color: rgb(106,135,89); }
.s3 { color: rgb(70,70,241); }
.s4 { color: rgb(171,81,186); }
.s5 { color: rgb(15,151,149); }
.s6 { color: rgb(104,151,187); }
</style>
</head>
<div style="background-color: #2b2b2b; padding: 10px;">
<pre>

<span class="s0">#include </span><span class="s2">&quot;TreeNode.h&quot;</span><span class="s1"> 
 
TreeNode *TreeNode::addChild(</span><span class="s0">int </span><span class="s1">d) { 
    cout &lt;&lt; </span><span class="s2">&quot;Adding child &quot; </span><span class="s1">&lt;&lt; d &lt;&lt; </span><span class="s2">&quot;...</span><span class="s3">\n</span><span class="s2">&quot;</span><span class="s1">; 
    TreeNode *child = </span><span class="s4">new </span><span class="s1">TreeNode(d); 
    children.push_back(child); 
    child</span><span class="s5">-&gt;</span><span class="s1">setParent(</span><span class="s4">this</span><span class="s1">); 
    </span><span class="s0">return </span><span class="s1">child; 
} 
 
</span><span class="s0">void </span><span class="s1">TreeNode::setParent(TreeNode *newParent) { 
    parent = newParent; 
} 
 
</span><span class="s0">void </span><span class="s1">TreeNode::printTree() { 
    TreeNode *n = </span><span class="s4">this</span><span class="s1">; 
    printSubTree(n, </span><span class="s6">0</span><span class="s1">); 
    cout &lt;&lt; </span><span class="s2">&quot;</span><span class="s3">\n</span><span class="s2">&quot;</span><span class="s1">; 
} 
 
</span><span class="s0">int </span><span class="s1">TreeNode::printSubTree(TreeNode *n, </span><span class="s0">int </span><span class="s1">level) { 
    </span><span class="s0">int </span><span class="s1">a; 
    </span><span class="s0">for </span><span class="s1">(a = </span><span class="s6">0</span><span class="s1">; a &lt; level; a++) { 
        cout &lt;&lt; </span><span class="s2">&quot;-----&quot;</span><span class="s1">; 
    } 
    cout &lt;&lt; n</span><span class="s5">-&gt;</span><span class="s1">data &lt;&lt; </span><span class="s2">&quot;</span><span class="s3">\n</span><span class="s2">&quot;</span><span class="s1">; 
    </span><span class="s0">if </span><span class="s1">(n</span><span class="s5">-&gt;</span><span class="s1">children.size() == </span><span class="s6">0</span><span class="s1">) { 
        </span><span class="s0">return </span><span class="s1">n</span><span class="s5">-&gt;</span><span class="s1">data; 
    } 
    </span><span class="s0">int </span><span class="s1">size = n</span><span class="s5">-&gt;</span><span class="s1">children.size(); 
    level++; 
    </span><span class="s0">int </span><span class="s1">i; 
    </span><span class="s0">for </span><span class="s1">(</span><span class="s0">int </span><span class="s1">i = </span><span class="s6">0</span><span class="s1">; i &lt; size; i++) { 
        printSubTree(n</span><span class="s5">-&gt;</span><span class="s1">children.at(i), level); 
    } 
    </span><span class="s0">return </span><span class="s1">-</span><span class="s6">1</span><span class="s1">; 
} 
 
</span><span class="s0">void </span><span class="s1">TreeNode::depthSearch() { 
    cout &lt;&lt; </span><span class="s2">&quot;Depth-first search:</span><span class="s3">\n</span><span class="s2">&quot;</span><span class="s1">; 
    TreeNode *n = </span><span class="s4">this</span><span class="s1">; 
    depthSearchNode(n); 
    cout &lt;&lt; </span><span class="s2">&quot;</span><span class="s3">\n</span><span class="s2">&quot;</span><span class="s1">; 
} 
 
</span><span class="s0">void </span><span class="s1">TreeNode::depthSearchNode(TreeNode *n) { 
    cout &lt;&lt; n</span><span class="s5">-&gt;</span><span class="s1">data &lt;&lt; </span><span class="s2">&quot; &quot;</span><span class="s1">; 
    </span><span class="s0">if </span><span class="s1">(n</span><span class="s5">-&gt;</span><span class="s1">children.size() &gt; </span><span class="s6">0</span><span class="s1">) { 
        </span><span class="s0">int </span><span class="s1">size = n</span><span class="s5">-&gt;</span><span class="s1">children.size(); 
        </span><span class="s0">int </span><span class="s1">i; 
        </span><span class="s0">for </span><span class="s1">(i = </span><span class="s6">0</span><span class="s1">; i &lt; size; i++) { 
            depthSearchNode(n</span><span class="s5">-&gt;</span><span class="s1">children.at(i)); 
        } 
    } 
} 
 
</span><span class="s0">void </span><span class="s1">TreeNode::breadthSearch() { 
    cout &lt;&lt; </span><span class="s2">&quot;Breadth-first search:</span><span class="s3">\n</span><span class="s2">&quot;</span><span class="s1">; 
    TreeNode *n = </span><span class="s4">this</span><span class="s1">; 
    breadthQueue.push_back(n); 
    </span><span class="s0">while</span><span class="s1">(breadthQueue.size() &gt; </span><span class="s6">0</span><span class="s1">) { 
        breadthSearchOneLevel(); 
    } 
    cout &lt;&lt; </span><span class="s2">&quot;</span><span class="s3">\n\n</span><span class="s2">&quot;</span><span class="s1">; 
} 
 
</span><span class="s0">void </span><span class="s1">TreeNode::breadthSearchOneLevel() { 
    TreeNode *n = this</span><span class="s5">-&gt;</span><span class="s1">breadthQueue.at(</span><span class="s6">0</span><span class="s1">); 
    cout &lt;&lt; n</span><span class="s5">-&gt;</span><span class="s1">data &lt;&lt; </span><span class="s2">&quot; &quot;</span><span class="s1">; 
    this</span><span class="s5">-&gt;</span><span class="s1">breadthQueue.erase(breadthQueue.begin() + </span><span class="s6">0</span><span class="s1">); 
    </span><span class="s0">if </span><span class="s1">(n</span><span class="s5">-&gt;</span><span class="s1">children.size() &gt; </span><span class="s6">0</span><span class="s1">) { 
        </span><span class="s0">int </span><span class="s1">size = n</span><span class="s5">-&gt;</span><span class="s1">children.size(); 
        </span><span class="s0">int </span><span class="s1">i; 
        </span><span class="s0">for </span><span class="s1">(i = </span><span class="s6">0</span><span class="s1">; i &lt; size; i++) { 
            breadthQueue.push_back(n</span><span class="s5">-&gt;</span><span class="s1">children.at(i)); 
        } 
    } 
}</span></pre>
</div>