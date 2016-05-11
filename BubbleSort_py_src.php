<head>
<title>BubbleSort.py</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<style type="text/css">
.ln { color: rgb(0,0,0); font-weight: normal; font-style: normal; }
.s0 { color: rgb(204,120,50); font-weight: bold; }
.s1 { color: rgb(169,183,198); }
.s2 { color: rgb(104,151,187); }
.s3 { color: rgb(165,194,97); }
.s4 { color: rgb(204,120,50); }
</style>
</head>
<div style="background-color: #2b2b2b; padding: 10px;">
<pre>

<span class="s0">import </span><span class="s1">sys 
</span><span class="s0">import </span><span class="s1">array 
 
</span><span class="s0">class </span><span class="s1">BubbleSort: 
 
    input_array = []; 
    length = </span><span class="s2">0</span><span class="s1">; 
 
    </span><span class="s0">def </span><span class="s1">main(self): 
        inputString = </span><span class="s3">'4143675351981074'</span><span class="s1"> 
        self.length = len(inputString) 
 
        </span><span class="s0">for </span><span class="s1">i </span><span class="s0">in </span><span class="s1">range(</span><span class="s2">0</span><span class="s4">, </span><span class="s1">self.length): 
            self.input_array.append(inputString[i]) 
 
        </span><span class="s0">print </span><span class="s3">'Unsorted list:'</span><span class="s1"> 
        self.printList() 
        </span><span class="s0">print </span><span class="s3">'</span><span class="s4">\n</span><span class="s3">'</span><span class="s1"> 
 
        isFinished = False; 
 
        </span><span class="s0">while </span><span class="s1">(</span><span class="s0">not </span><span class="s1">isFinished): 
            </span><span class="s0">print </span><span class="s3">'Iterating:</span><span class="s4">\n</span><span class="s3">'</span><span class="s1"> 
            isFinished = self.iterate(); 
            </span><span class="s0">print </span><span class="s3">'</span><span class="s4">\n</span><span class="s3">'</span><span class="s1"> 
 
        </span><span class="s0">print </span><span class="s3">'Sorted list:'</span><span class="s1"> 
        self.printList() 
 
    </span><span class="s0">def </span><span class="s1">iterate(self): 
        counter = </span><span class="s2">0</span><span class="s1"> 
        </span><span class="s0">for </span><span class="s1">i </span><span class="s0">in </span><span class="s1">range(</span><span class="s2">0</span><span class="s4">, </span><span class="s1">self.length - </span><span class="s2">1</span><span class="s1">): 
            temp = None 
            </span><span class="s0">if </span><span class="s1">(self.input_array[i] &gt; self.input_array[i + </span><span class="s2">1</span><span class="s1">]): 
                counter += </span><span class="s2">1</span><span class="s1"> 
                temp = self.input_array[i] 
                self.input_array[i] = self.input_array[i + </span><span class="s2">1</span><span class="s1">] 
                self.input_array[i + </span><span class="s2">1</span><span class="s1">] = temp 
            self.printList() 
        </span><span class="s0">if </span><span class="s1">(counter == </span><span class="s2">0</span><span class="s1">): 
            </span><span class="s0">return </span><span class="s1">True 
        </span><span class="s0">return </span><span class="s1">False 
 
    </span><span class="s0">def </span><span class="s1">printList(self): 
        </span><span class="s0">for </span><span class="s1">i </span><span class="s0">in </span><span class="s1">range(</span><span class="s2">0</span><span class="s4">, </span><span class="s1">self.length): 
            sys.stdout.write(str(self.input_array[i]) + </span><span class="s3">' '</span><span class="s1">) 
        </span><span class="s0">print </span><span class="s3">''</span><span class="s1"> 
 
bubbleSort = BubbleSort() 
bubbleSort.main()</span></pre>
</div>