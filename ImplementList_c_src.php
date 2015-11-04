<head>
<title>ImplementList.c</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<style type="text/css">
.ln { color: rgb(0,0,0); font-weight: normal; font-style: normal; }
.s0 { color: rgb(204,120,50); }
.s1 { color: rgb(169,183,198); }
.s2 { color: rgb(106,135,89); }
.s3 { color: rgb(70,70,241); }
.s4 { color: rgb(104,151,187); }
.s5 { color: rgb(15,151,149); }
</style>
</head>
<div style="background-color: #2b2b2b; padding: 10px;">
<pre>

<span class="s0">#include </span><span class="s2">&quot;Node_c.h&quot;</span><span class="s1"> 
 
</span><span class="s0">int </span><span class="s1">main() { 
 
    printf(</span><span class="s2">&quot;Initializing Node with %d</span><span class="s3">\n</span><span class="s2">&quot;</span><span class="s1">, </span><span class="s4">1</span><span class="s1">); 
    Node *list = malloc(</span><span class="s0">sizeof</span><span class="s1">(Node)); 
    list</span><span class="s5">-&gt;</span><span class="s1">data = </span><span class="s4">1</span><span class="s1">; 
    printList(list); 
 
    appendToTail(list, </span><span class="s4">2</span><span class="s1">);  
    appendToTail(list, </span><span class="s4">3</span><span class="s1">);  
    appendToTail(list, </span><span class="s4">4</span><span class="s1">);  
    appendToTail(list, </span><span class="s4">5</span><span class="s1">);  
    removeNode(list, </span><span class="s4">3</span><span class="s1">);  
    appendToTail(list, </span><span class="s4">6</span><span class="s1">);  
    removeNode(list, </span><span class="s4">4</span><span class="s1">);  
    appendToTail(list, </span><span class="s4">7</span><span class="s1">);  
    appendToTail(list, </span><span class="s4">8</span><span class="s1">);  
    appendToTail(list, </span><span class="s4">6</span><span class="s1">);  
 
    </span><span class="s0">return </span><span class="s4">0</span><span class="s1">; 
} 
</span></pre>
</div>