<head>
<title>Node.h</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<style type="text/css">
.ln { color: rgb(0,0,0); font-weight: normal; font-style: normal; }
.s0 { color: rgb(204,120,50); }
.s1 { color: rgb(169,183,198); }
.s2 { color: rgb(171,81,186); }
</style>
</head>
<div style="background-color: #2b2b2b; padding: 10px;">
<pre>

<span class="s0">#include </span><span class="s1">&lt;iostream&gt; 
 
</span><span class="s2">using namespace </span><span class="s1">std; 
 
</span><span class="s2">class </span><span class="s1">Node { 
 
    </span><span class="s2">public</span><span class="s1">: 
 
        </span><span class="s0">int </span><span class="s1">data; 
        Node *next = NULL; 
 
        Node(</span><span class="s0">int </span><span class="s1">d) { 
            data = d; 
        } 
         
        ~Node() {}; 
 
        </span><span class="s0">void </span><span class="s1">appendToTail(</span><span class="s0">int </span><span class="s1">d); 
        Node* removeNode(</span><span class="s0">int </span><span class="s1">d); 
        </span><span class="s0">void </span><span class="s1">printList(); 
 
}; 
</span></pre>
</div>