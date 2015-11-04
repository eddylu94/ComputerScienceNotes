<head>
<title>Node.cpp</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<style type="text/css">
.ln { color: rgb(0,0,0); font-weight: normal; font-style: normal; }
.s0 { color: rgb(204,120,50); }
.s1 { color: rgb(169,183,198); }
.s2 { color: rgb(106,135,89); }
.s3 { color: rgb(70,70,241); }
.s4 { color: rgb(171,81,186); }
.s5 { color: rgb(15,151,149); }
</style>
</head>
<div style="background-color: #2b2b2b; padding: 10px;">
<pre>

<span class="s0">#include </span><span class="s2">&quot;Node.h&quot;</span><span class="s1"> 
 
</span><span class="s0">void </span><span class="s1">Node::appendToTail(</span><span class="s0">int </span><span class="s1">d) { 
    cout &lt;&lt; </span><span class="s2">&quot;Adding &quot; </span><span class="s1">&lt;&lt; d &lt;&lt; </span><span class="s2">&quot;...</span><span class="s3">\n</span><span class="s2">&quot;</span><span class="s1">; 
    Node *n = </span><span class="s4">this</span><span class="s1">; 
    </span><span class="s0">while </span><span class="s1">(n</span><span class="s5">-&gt;</span><span class="s1">next != NULL) { 
        n = n</span><span class="s5">-&gt;</span><span class="s1">next; 
    } 
    n</span><span class="s5">-&gt;</span><span class="s1">next = </span><span class="s4">new </span><span class="s1">Node(d); 
    this</span><span class="s5">-&gt;</span><span class="s1">printList(); 
} 
 
Node* Node::removeNode(</span><span class="s0">int </span><span class="s1">d) { 
    cout &lt;&lt; </span><span class="s2">&quot;Removing &quot; </span><span class="s1">&lt;&lt; d &lt;&lt; </span><span class="s2">&quot;...</span><span class="s3">\n</span><span class="s2">&quot;</span><span class="s1">; 
    Node *n = </span><span class="s4">this</span><span class="s1">; 
    </span><span class="s0">if </span><span class="s1">(n</span><span class="s5">-&gt;</span><span class="s1">data == d) { 
        this</span><span class="s5">-&gt;</span><span class="s1">printList(); 
        </span><span class="s0">return </span><span class="s1">this</span><span class="s5">-&gt;</span><span class="s1">next; 
    } 
    </span><span class="s0">while </span><span class="s1">(n</span><span class="s5">-&gt;</span><span class="s1">next != NULL) { 
        </span><span class="s0">if </span><span class="s1">(n</span><span class="s5">-&gt;</span><span class="s1">next</span><span class="s5">-&gt;</span><span class="s1">data == d) { 
            n</span><span class="s5">-&gt;</span><span class="s1">next = n</span><span class="s5">-&gt;</span><span class="s1">next</span><span class="s5">-&gt;</span><span class="s1">next; 
            this</span><span class="s5">-&gt;</span><span class="s1">printList(); 
            </span><span class="s0">return </span><span class="s4">this</span><span class="s1">; 
        } 
        n = n</span><span class="s5">-&gt;</span><span class="s1">next; 
    } 
    this</span><span class="s5">-&gt;</span><span class="s1">printList(); 
    </span><span class="s0">return </span><span class="s1">NULL; 
} 
 
</span><span class="s0">void </span><span class="s1">Node::printList() { 
    Node *n = </span><span class="s4">this</span><span class="s1">; 
    </span><span class="s0">while </span><span class="s1">(n</span><span class="s5">-&gt;</span><span class="s1">next != NULL) { 
        cout &lt;&lt; n</span><span class="s5">-&gt;</span><span class="s1">data &lt;&lt; </span><span class="s2">&quot; &quot;</span><span class="s1">; 
        n = n</span><span class="s5">-&gt;</span><span class="s1">next; 
    } 
    cout &lt;&lt; n</span><span class="s5">-&gt;</span><span class="s1">data; 
    cout &lt;&lt; </span><span class="s2">&quot;</span><span class="s3">\n\n</span><span class="s2">&quot;</span><span class="s1">; 
} 
</span></pre>
</div>