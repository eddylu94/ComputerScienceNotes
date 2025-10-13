<head>
<title>ImplementStack.cpp</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<style type="text/css">
.ln { color: rgb(0,0,0); font-weight: normal; font-style: normal; }
.s0 { color: rgb(204,120,50); }
.s1 { color: rgb(169,183,198); }
.s2 { color: rgb(106,135,89); }
.s3 { color: rgb(104,151,187); }
.s4 { color: rgb(70,70,241); }
.s5 { color: rgb(171,81,186); }
.s6 { color: rgb(15,151,149); }
</style>
</head>
<div style="background-color: #2b2b2b; padding: 10px;">
<pre>

<span class="s0">#include </span><span class="s2">&quot;Stack.h&quot;</span><span class="s1"> 
 
</span><span class="s0">int </span><span class="s1">main() { 
 
    cout &lt;&lt; </span><span class="s2">&quot;Initializing Stack with &quot; </span><span class="s1">&lt;&lt; </span><span class="s3">1 </span><span class="s1">&lt;&lt; </span><span class="s2">&quot;</span><span class="s4">\n</span><span class="s2">&quot;</span><span class="s1">; 
    Stack *stack = </span><span class="s5">new </span><span class="s1">Stack(</span><span class="s3">1</span><span class="s1">); 
    stack</span><span class="s6">-&gt;</span><span class="s1">printStack(); 
 
    stack</span><span class="s6">-&gt;</span><span class="s1">push(</span><span class="s3">2</span><span class="s1">); 
    stack</span><span class="s6">-&gt;</span><span class="s1">push(</span><span class="s3">3</span><span class="s1">); 
    stack</span><span class="s6">-&gt;</span><span class="s1">push(</span><span class="s3">4</span><span class="s1">); 
    stack</span><span class="s6">-&gt;</span><span class="s1">push(</span><span class="s3">5</span><span class="s1">); 
    stack</span><span class="s6">-&gt;</span><span class="s1">pop(); 
    stack</span><span class="s6">-&gt;</span><span class="s1">push(</span><span class="s3">6</span><span class="s1">); 
    stack</span><span class="s6">-&gt;</span><span class="s1">push(</span><span class="s3">7</span><span class="s1">); 
    stack</span><span class="s6">-&gt;</span><span class="s1">pop(); 
 
    </span><span class="s0">return </span><span class="s3">0</span><span class="s1">; 
} 
</span></pre>
</div>