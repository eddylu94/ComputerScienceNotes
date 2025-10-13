<head>
<title>Queue.h</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<style type="text/css">
.ln { color: rgb(0,0,0); font-weight: normal; font-style: normal; }
.s0 { color: rgb(204,120,50); }
.s1 { color: rgb(169,183,198); }
.s2 { color: rgb(106,135,89); }
.s3 { color: rgb(171,81,186); }
</style>
</head>
<div style="background-color: #2b2b2b; padding: 10px;">
<pre>

<span class="s0">#include </span><span class="s2">&quot;Node.h&quot;</span><span class="s1"> 
 
</span><span class="s0">#include </span><span class="s1">&lt;iostream&gt; 
 
</span><span class="s3">using namespace </span><span class="s1">std; 
 
</span><span class="s3">class </span><span class="s1">Queue { 
 
    </span><span class="s3">private</span><span class="s1">: 
        Node *head = NULL; 
        Node *tail = NULL; 
 
    </span><span class="s3">public</span><span class="s1">: 
        Queue(</span><span class="s0">int </span><span class="s1">d) { 
            head = </span><span class="s3">new </span><span class="s1">Node(d); 
            tail = head; 
        } 
         
        ~Queue() {}; 
 
        </span><span class="s0">void </span><span class="s1">enqueue(</span><span class="s0">int </span><span class="s1">d); 
        Node* dequeue(); 
        </span><span class="s0">void </span><span class="s1">printQueue(); 
 
};</span></pre>
</div>