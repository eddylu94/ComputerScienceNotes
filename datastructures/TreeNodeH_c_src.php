<head>
<title>TreeNode_c.h</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<style type="text/css">
.ln { color: rgb(0,0,0); font-weight: normal; font-style: normal; }
.s0 { color: rgb(204,120,50); }
.s1 { color: rgb(169,183,198); }
</style>
</head>
<div style="background-color: #2b2b2b; padding: 10px;">
<pre>

<span class="s0">#include </span><span class="s1">&lt;stdio.h&gt; 
</span><span class="s0">#include </span><span class="s1">&lt;stdlib.h&gt; 
 
</span><span class="s0">typedef struct </span><span class="s1">Children { 
    </span><span class="s0">struct </span><span class="s1">TreeNode **array; 
    </span><span class="s0">int </span><span class="s1">size; 
} Children; 
 
</span><span class="s0">typedef struct </span><span class="s1">BreadthQueue { 
    </span><span class="s0">struct </span><span class="s1">TreeNode **array; 
    </span><span class="s0">int </span><span class="s1">size; 
} BreadthQueue; 
 
</span><span class="s0">typedef struct </span><span class="s1">TreeNode { 
    </span><span class="s0">int </span><span class="s1">data; 
    </span><span class="s0">struct </span><span class="s1">TreeNode *parent; 
    </span><span class="s0">struct </span><span class="s1">Children children; 
    </span><span class="s0">struct </span><span class="s1">BreadthQueue breadthQueue; 
} TreeNode; 
 
TreeNode* addChild(TreeNode *currentTree, </span><span class="s0">int </span><span class="s1">d); 
</span><span class="s0">void </span><span class="s1">setParent(TreeNode *currentTree, TreeNode *newParent); 
</span><span class="s0">void </span><span class="s1">printTree(TreeNode *currentTree); 
</span><span class="s0">int </span><span class="s1">printSubTree(TreeNode *n, </span><span class="s0">int </span><span class="s1">level); 
</span><span class="s0">void </span><span class="s1">depthSearch(TreeNode *currentTree); 
</span><span class="s0">void </span><span class="s1">depthSearchNode(TreeNode *n); 
</span><span class="s0">void </span><span class="s1">breadthSearch(TreeNode *currentTree); 
</span><span class="s0">struct </span><span class="s1">BreadthQueue breadthSearchOneLevel(TreeNode *currentTree, </span><span class="s0">struct </span><span class="s1">BreadthQueue breadthQueue); 
</span><span class="s0">struct </span><span class="s1">BreadthQueue breadthQueue_remove(</span><span class="s0">struct </span><span class="s1">BreadthQueue breadthQueue, </span><span class="s0">int </span><span class="s1">index);</span></pre>
</div>