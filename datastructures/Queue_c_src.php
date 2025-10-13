<head>
<title>Queue.c</title>
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

<span class="s0">#include </span><span class="s2">&quot;Queue_c.h&quot;</span><span class="s1"> 
 
</span><span class="s0">void </span><span class="s1">enqueue(Node **head, Node **tail, </span><span class="s0">int </span><span class="s1">d) { 
    printf(</span><span class="s2">&quot;Enqueuing %d...</span><span class="s3">\n</span><span class="s2">&quot;</span><span class="s1">, d); 
    Node *n = *head; 
    </span><span class="s0">if </span><span class="s1">(*head == NULL) { 
        (*head)</span><span class="s4">-&gt;</span><span class="s1">data = d; 
        *tail = *head; 
    } 
    </span><span class="s0">else </span><span class="s1">{ 
        Node *newNode = malloc(</span><span class="s0">sizeof</span><span class="s1">(Node)); 
        newNode</span><span class="s4">-&gt;</span><span class="s1">data = d; 
        (*tail)</span><span class="s4">-&gt;</span><span class="s1">next = newNode; 
        *tail = (*tail)</span><span class="s4">-&gt;</span><span class="s1">next; 
    } 
    printQueue(*head); 
} 
 
Node* dequeue(Node **head) { 
    printf(</span><span class="s2">&quot;Dequeuing...</span><span class="s3">\n</span><span class="s2">&quot;</span><span class="s1">); 
    </span><span class="s0">if </span><span class="s1">(*head == NULL) { 
        printQueue(*head); 
        </span><span class="s0">return </span><span class="s1">NULL; 
    } 
    Node *n = *head; 
    *head = (*head)</span><span class="s4">-&gt;</span><span class="s1">next; 
    printQueue(*head); 
    </span><span class="s0">return </span><span class="s1">n; 
} 
 
</span><span class="s0">void </span><span class="s1">printQueue(Node *head) { 
    Node *n = head; 
    </span><span class="s0">while </span><span class="s1">(n</span><span class="s4">-&gt;</span><span class="s1">next != NULL) { 
        printf(</span><span class="s2">&quot;%d &quot;</span><span class="s1">, n</span><span class="s4">-&gt;</span><span class="s1">data); 
        n = n</span><span class="s4">-&gt;</span><span class="s1">next; 
    } 
    printf(</span><span class="s2">&quot;%d&quot;</span><span class="s1">, n</span><span class="s4">-&gt;</span><span class="s1">data); 
    printf(</span><span class="s2">&quot;</span><span class="s3">\n\n</span><span class="s2">&quot;</span><span class="s1">); 
} 
</span></pre>
</div>