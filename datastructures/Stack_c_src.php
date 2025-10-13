<head>
<title>Stack.c</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<style type="text/css">
.ln { color: rgb(0,0,0); font-weight: normal; font-style: normal; }
.s0 { color: rgb(204,120,50); }
.s1 { color: rgb(169,183,198); }
.s2 { color: rgb(106,135,89); }
.s3 { color: rgb(70,70,241); }
.s4 { color: rgb(15,151,149); }
</style>
</head>
<div style="background-color: #2b2b2b; padding: 10px;">
<pre>

<span class="s0">#include </span><span class="s2">&quot;Stack_c.h&quot;</span><span class="s1"> 
 
</span><span class="s0">void </span><span class="s1">push(Node **top, </span><span class="s0">int </span><span class="s1">d) { 
    printf(</span><span class="s2">&quot;Pushing %d...</span><span class="s3">\n</span><span class="s2">&quot;</span><span class="s1">, d); 
    </span><span class="s0">if </span><span class="s1">(*top == NULL) { 
        (*top)</span><span class="s4">-&gt;</span><span class="s1">data = d; 
    } 
    </span><span class="s0">else </span><span class="s1">{ 
        Node *t = malloc(</span><span class="s0">sizeof</span><span class="s1">(Node)); 
        t</span><span class="s4">-&gt;</span><span class="s1">data = d; 
        t</span><span class="s4">-&gt;</span><span class="s1">next = *top; 
        *top = t; 
    } 
    printStack(*top); 
} 
 
Node* pop(Node **top) { 
    printf(</span><span class="s2">&quot;Popping...</span><span class="s3">\n</span><span class="s2">&quot;</span><span class="s1">); 
    </span><span class="s0">if </span><span class="s1">(*top == NULL) { 
        printStack(*top); 
        </span><span class="s0">return </span><span class="s1">NULL; 
    } 
    </span><span class="s0">int </span><span class="s1">d = (*top)</span><span class="s4">-&gt;</span><span class="s1">data; 
    *top = (*top)</span><span class="s4">-&gt;</span><span class="s1">next; 
    printStack(*top); 
    Node *newNode = malloc(</span><span class="s0">sizeof</span><span class="s1">(Node)); 
    newNode</span><span class="s4">-&gt;</span><span class="s1">data = d; 
    </span><span class="s0">return </span><span class="s1">newNode; 
} 
 
</span><span class="s0">void </span><span class="s1">printStack(Node *top) { 
    Node *n = top; 
    </span><span class="s0">while </span><span class="s1">(n</span><span class="s4">-&gt;</span><span class="s1">next != NULL) { 
        printf(</span><span class="s2">&quot;%d &quot;</span><span class="s1">, n</span><span class="s4">-&gt;</span><span class="s1">data); 
        n = n</span><span class="s4">-&gt;</span><span class="s1">next; 
    } 
    printf(</span><span class="s2">&quot;%d&quot;</span><span class="s1">, n</span><span class="s4">-&gt;</span><span class="s1">data); 
    printf(</span><span class="s2">&quot;</span><span class="s3">\n\n</span><span class="s2">&quot;</span><span class="s1">); 
}</span></pre>
</div>