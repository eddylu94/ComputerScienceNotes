<head>
<title>Node_c.h</title>
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
 
</span><span class="s0">typedef struct </span><span class="s1">Node{ 
    </span><span class="s0">int </span><span class="s1">data; 
    </span><span class="s0">struct </span><span class="s1">Node *next; 
} Node; 
 
</span><span class="s0">void </span><span class="s1">appendToTail(Node *head, </span><span class="s0">int </span><span class="s1">d); 
Node* removeNode(Node *head, </span><span class="s0">int </span><span class="s1">d); 
</span><span class="s0">void </span><span class="s1">printList(Node *head);</span></pre>
</div>