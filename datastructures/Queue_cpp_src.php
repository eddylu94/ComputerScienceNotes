<head>
<title>Queue.cpp</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<style type="text/css">
.ln { color: rgb(0,0,0); font-weight: normal; font-style: normal; }
.s0 { color: rgb(204,120,50); }
.s1 { color: rgb(169,183,198); }
.s2 { color: rgb(106,135,89); }
.s3 { color: rgb(70,70,241); }
.s4 { color: rgb(15,151,149); }
.s5 { color: rgb(171,81,186); }
</style>
</head>
<div style="background-color: #2b2b2b; padding: 10px;">
<pre>

<span class="s0">#include </span><span class="s2">&quot;Queue.h&quot;</span><span class="s1"> 
 
</span><span class="s0">void </span><span class="s1">Queue::enqueue(</span><span class="s0">int </span><span class="s1">d) { 
    cout &lt;&lt; </span><span class="s2">&quot;Enqueuing &quot; </span><span class="s1">&lt;&lt; d &lt;&lt; </span><span class="s2">&quot;...</span><span class="s3">\n</span><span class="s2">&quot;</span><span class="s1">; 
    Node *n = this</span><span class="s4">-&gt;</span><span class="s1">head; 
    </span><span class="s0">if </span><span class="s1">(this</span><span class="s4">-&gt;</span><span class="s1">head == NULL) { 
        this</span><span class="s4">-&gt;</span><span class="s1">head = </span><span class="s5">new </span><span class="s1">Node(d); 
        this</span><span class="s4">-&gt;</span><span class="s1">tail = this</span><span class="s4">-&gt;</span><span class="s1">head; 
    } 
    </span><span class="s0">else </span><span class="s1">{ 
        this</span><span class="s4">-&gt;</span><span class="s1">tail</span><span class="s4">-&gt;</span><span class="s1">next = </span><span class="s5">new </span><span class="s1">Node(d); 
        this</span><span class="s4">-&gt;</span><span class="s1">tail = this</span><span class="s4">-&gt;</span><span class="s1">tail</span><span class="s4">-&gt;</span><span class="s1">next; 
    } 
    this</span><span class="s4">-&gt;</span><span class="s1">printQueue(); 
} 
 
Node* Queue::dequeue() { 
    cout &lt;&lt; </span><span class="s2">&quot;Dequeuing...</span><span class="s3">\n</span><span class="s2">&quot;</span><span class="s1">; 
    </span><span class="s0">if </span><span class="s1">(this</span><span class="s4">-&gt;</span><span class="s1">head == NULL) { 
        this</span><span class="s4">-&gt;</span><span class="s1">printQueue(); 
        </span><span class="s0">return </span><span class="s1">NULL; 
    } 
    Node *n = this</span><span class="s4">-&gt;</span><span class="s1">head; 
    this</span><span class="s4">-&gt;</span><span class="s1">head = this</span><span class="s4">-&gt;</span><span class="s1">head</span><span class="s4">-&gt;</span><span class="s1">next; 
    this</span><span class="s4">-&gt;</span><span class="s1">printQueue(); 
    </span><span class="s0">return </span><span class="s1">n; 
} 
 
</span><span class="s0">void </span><span class="s1">Queue::printQueue() { 
    Node *n = this</span><span class="s4">-&gt;</span><span class="s1">head; 
    </span><span class="s0">while </span><span class="s1">(n</span><span class="s4">-&gt;</span><span class="s1">next != NULL) { 
        cout &lt;&lt; n</span><span class="s4">-&gt;</span><span class="s1">data &lt;&lt; </span><span class="s2">&quot; &quot;</span><span class="s1">; 
        n = n</span><span class="s4">-&gt;</span><span class="s1">next; 
    } 
    cout &lt;&lt; n</span><span class="s4">-&gt;</span><span class="s1">data; 
    cout &lt;&lt; </span><span class="s2">&quot;</span><span class="s3">\n\n</span><span class="s2">&quot;</span><span class="s1">; 
}</span></pre>
</div>