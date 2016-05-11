<head>
<title>BubbleSort.c</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<style type="text/css">
.ln { color: rgb(0,0,0); font-weight: normal; font-style: normal; }
.s0 { color: rgb(204,120,50); }
.s1 { color: rgb(169,183,198); }
.s2 { color: rgb(171,81,186); }
.s3 { color: rgb(104,151,187); }
.s4 { color: rgb(106,135,89); }
.s5 { color: rgb(70,70,241); }
</style>
</head>
<div style="background-color: #2b2b2b; padding: 10px;">
<pre>

<span class="s0">#include </span><span class="s1">&lt;stdio.h&gt; 
</span><span class="s0">#include </span><span class="s1">&lt;stdlib.h&gt; 
 
</span><span class="s0">typedef int bool</span><span class="s1">; 
</span><span class="s0">#define </span><span class="s2">true </span><span class="s3">1</span><span class="s1"> 
</span><span class="s0">#define false </span><span class="s3">0</span><span class="s1"> 
 
</span><span class="s0">bool </span><span class="s1">iterate(); 
</span><span class="s0">void </span><span class="s1">printList(); 
 
</span><span class="s0">int </span><span class="s1">*input; 
</span><span class="s0">int </span><span class="s1">length; 
 
</span><span class="s0">int </span><span class="s1">main() { 
 
    </span><span class="s0">char </span><span class="s1">inputString[] = </span><span class="s4">&quot;4143675351981074&quot;</span><span class="s1">; 
    length = </span><span class="s0">sizeof</span><span class="s1">(inputString) / </span><span class="s0">sizeof</span><span class="s1">(inputString[</span><span class="s3">0</span><span class="s1">]) - </span><span class="s3">1</span><span class="s1">; 
 
    input = malloc(length * </span><span class="s0">sizeof</span><span class="s1">(</span><span class="s0">int</span><span class="s1">)); 
    input[length]; 
    </span><span class="s0">int </span><span class="s1">i; 
    </span><span class="s0">for </span><span class="s1">(i = </span><span class="s3">0</span><span class="s1">; i &lt; length; i++) { 
        input[i] = inputString[i] - </span><span class="s4">'0'</span><span class="s1">; 
    } 
 
    printf(</span><span class="s4">&quot;Unsorted list:</span><span class="s5">\n</span><span class="s4">&quot;</span><span class="s1">); 
    printList(); 
    printf(</span><span class="s4">&quot;</span><span class="s5">\n</span><span class="s4">&quot;</span><span class="s1">); 
 
    </span><span class="s0">bool </span><span class="s1">isFinished = </span><span class="s0">false</span><span class="s1">; 
 
    </span><span class="s0">while </span><span class="s1">(!isFinished) { 
        printf(</span><span class="s4">&quot;Iterating:</span><span class="s5">\n\n</span><span class="s4">&quot;</span><span class="s1">); 
        isFinished = iterate(); 
        printf(</span><span class="s4">&quot;</span><span class="s5">\n</span><span class="s4">&quot;</span><span class="s1">);        
    } 
 
    printf(</span><span class="s4">&quot;Sorted list:</span><span class="s5">\n</span><span class="s4">&quot;</span><span class="s1">); 
    printList(); 
 
    </span><span class="s0">return </span><span class="s3">0</span><span class="s1">; 
} 
 
</span><span class="s0">bool </span><span class="s1">iterate() { 
    </span><span class="s0">int </span><span class="s1">counter = </span><span class="s3">0</span><span class="s1">; 
    </span><span class="s0">int </span><span class="s1">i; 
    </span><span class="s0">for </span><span class="s1">(i = </span><span class="s3">0</span><span class="s1">; i &lt; length - </span><span class="s3">1</span><span class="s1">; i++) { 
        </span><span class="s0">int </span><span class="s1">temp; 
        </span><span class="s0">if </span><span class="s1">(input[i] &gt; input[i + </span><span class="s3">1</span><span class="s1">]) { 
            counter++; 
            temp = input[i]; 
            input[i] = input[i + </span><span class="s3">1</span><span class="s1">]; 
            input [i + </span><span class="s3">1</span><span class="s1">] = temp; 
        } 
        printList(); 
    } 
    </span><span class="s0">if </span><span class="s1">(counter == </span><span class="s3">0</span><span class="s1">) { 
        </span><span class="s0">return </span><span class="s2">true</span><span class="s1">; 
    } 
    </span><span class="s0">return false</span><span class="s1">; 
} 
 
</span><span class="s0">void </span><span class="s1">printList() { 
    </span><span class="s0">int </span><span class="s1">i; 
    </span><span class="s0">for </span><span class="s1">(i = </span><span class="s3">0</span><span class="s1">; i &lt; length; i++) { 
        printf(</span><span class="s4">&quot;%d &quot;</span><span class="s1">, input[i]); 
    } 
    printf(</span><span class="s4">&quot;</span><span class="s5">\n</span><span class="s4">&quot;</span><span class="s1">); 
} 
</span></pre>
</div>