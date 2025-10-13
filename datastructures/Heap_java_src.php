<head>
<title>Heap.java</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<style type="text/css">
.ln { color: rgb(0,0,0); font-weight: normal; font-style: normal; }
.s0 { color: rgb(204,120,50); }
.s1 { color: rgb(169,183,198); }
.s2 { color: rgb(104,151,187); }
.s3 { color: rgb(106,135,89); }
.s4 { color: rgb(128,128,128); }
</style>
</head>
<div style="background-color: #2b2b2b; padding: 10px;">
<pre>

<span class="s0">public class </span><span class="s1">Heap { 
 
    </span><span class="s0">int</span><span class="s1">[] heap</span><span class="s0">;</span><span class="s1"> 
    </span><span class="s0">int </span><span class="s1">numberOfNodes = </span><span class="s2">0</span><span class="s0">;</span><span class="s1"> 
 
    </span><span class="s0">public </span><span class="s1">Heap(</span><span class="s0">int </span><span class="s1">data</span><span class="s0">, int </span><span class="s1">size) { 
        heap = </span><span class="s0">new int</span><span class="s1">[</span><span class="s2">15</span><span class="s1">]</span><span class="s0">;</span><span class="s1"> 
        heap[</span><span class="s2">0</span><span class="s1">] = data</span><span class="s0">;</span><span class="s1"> 
        numberOfNodes = </span><span class="s2">1</span><span class="s0">;</span><span class="s1"> 
    } 
 
    </span><span class="s0">void </span><span class="s1">addElement(</span><span class="s0">int </span><span class="s1">data) { 
        System.out.println(</span><span class="s3">&quot;Adding &quot; </span><span class="s1">+ data + </span><span class="s3">&quot;...&quot;</span><span class="s1">)</span><span class="s0">;</span><span class="s1"> 
        System.out.println()</span><span class="s0">;</span><span class="s1"> 
        heap[numberOfNodes] = data</span><span class="s0">;</span><span class="s1"> 
        </span><span class="s0">int </span><span class="s1">currentIndex = numberOfNodes</span><span class="s0">;</span><span class="s1"> 
 
        </span><span class="s4">// loop terminates when no swap occurs</span><span class="s1"> 
        </span><span class="s0">while </span><span class="s1">(currentIndex &gt; </span><span class="s2">0</span><span class="s1">) { 
            </span><span class="s0">int </span><span class="s1">newIndex = compareWithParent(currentIndex)</span><span class="s0">;</span><span class="s1"> 
            </span><span class="s0">if </span><span class="s1">(newIndex == currentIndex) { 
                </span><span class="s0">break;</span><span class="s1"> 
            } 
            currentIndex = newIndex</span><span class="s0">;</span><span class="s1"> 
        } 
 
        numberOfNodes++</span><span class="s0">;</span><span class="s1"> 
 
        printHeap()</span><span class="s0">;</span><span class="s1"> 
    } 
 
    </span><span class="s0">void </span><span class="s1">removeElement() { 
 
        System.out.println(</span><span class="s3">&quot;Removing root...&quot;</span><span class="s1">)</span><span class="s0">;</span><span class="s1"> 
        System.out.println()</span><span class="s0">;</span><span class="s1"> 
 
        </span><span class="s0">if </span><span class="s1">(numberOfNodes &gt; </span><span class="s2">0</span><span class="s1">) { 
 
            heap[</span><span class="s2">0</span><span class="s1">] = heap[numberOfNodes - </span><span class="s2">1</span><span class="s1">]</span><span class="s0">;</span><span class="s1"> 
            numberOfNodes--</span><span class="s0">;</span><span class="s1"> 
 
            sortIterate()</span><span class="s0">;</span><span class="s1"> 
        } 
 
        printHeap()</span><span class="s0">;</span><span class="s1"> 
    } 
 
    </span><span class="s0">void </span><span class="s1">sort() { 
 
        </span><span class="s0">if </span><span class="s1">(numberOfNodes &gt; </span><span class="s2">0</span><span class="s1">) { 
            </span><span class="s0">int </span><span class="s1">iterations = numberOfNodes</span><span class="s0">;</span><span class="s1"> 
            </span><span class="s0">for </span><span class="s1">(</span><span class="s0">int </span><span class="s1">i = </span><span class="s2">0</span><span class="s0">; </span><span class="s1">i &lt; iterations</span><span class="s0">; </span><span class="s1">i++) { 
                System.out.println(</span><span class="s3">&quot;Sorting...&quot;</span><span class="s1">)</span><span class="s0">;</span><span class="s1"> 
                System.out.println()</span><span class="s0">;</span><span class="s1"> 
                swap(</span><span class="s2">0</span><span class="s0">, </span><span class="s1">numberOfNodes - </span><span class="s2">1</span><span class="s1">)</span><span class="s0">;</span><span class="s1"> 
                numberOfNodes--</span><span class="s0">;</span><span class="s1"> 
                sortIterate()</span><span class="s0">;</span><span class="s1"> 
 
                printHeap()</span><span class="s0">;</span><span class="s1"> 
            } 
            numberOfNodes = iterations</span><span class="s0">;</span><span class="s1"> 
        } 
 
        System.out.println(</span><span class="s3">&quot;Sorted heap:&quot;</span><span class="s1">)</span><span class="s0">;</span><span class="s1"> 
        System.out.println()</span><span class="s0">;</span><span class="s1"> 
        printHeap()</span><span class="s0">;</span><span class="s1"> 
    } 
 
    </span><span class="s0">void </span><span class="s1">sortIterate() { 
 
        </span><span class="s0">int </span><span class="s1">currentNode = </span><span class="s2">0</span><span class="s0">;</span><span class="s1"> 
 
        </span><span class="s0">boolean </span><span class="s1">stop = </span><span class="s0">false;</span><span class="s1"> 
 
        </span><span class="s0">while </span><span class="s1">(!stop) { 
 
            stop = </span><span class="s0">true;</span><span class="s1"> 
 
            </span><span class="s0">if </span><span class="s1">(rightChild_index(currentNode) &lt; numberOfNodes) { 
                </span><span class="s0">if </span><span class="s1">(heap[rightChild_index(currentNode)] &gt; heap[leftChild_index(currentNode)] 
                        &amp;&amp; heap[rightChild_index(currentNode)] &gt; heap[currentNode]) { 
                    swap(rightChild_index(currentNode)</span><span class="s0">, </span><span class="s1">currentNode)</span><span class="s0">;</span><span class="s1"> 
                    currentNode = rightChild_index(currentNode)</span><span class="s0">;</span><span class="s1"> 
                    stop = </span><span class="s0">false;</span><span class="s1"> 
                } 
                </span><span class="s0">else if </span><span class="s1">(heap[leftChild_index(currentNode)] &gt; heap[rightChild_index(currentNode)] 
                        &amp;&amp; heap[leftChild_index(currentNode)] &gt; heap[currentNode]) { 
                    swap(leftChild_index(currentNode)</span><span class="s0">, </span><span class="s1">currentNode)</span><span class="s0">;</span><span class="s1"> 
                    currentNode = leftChild_index(currentNode)</span><span class="s0">;</span><span class="s1"> 
                    stop = </span><span class="s0">false;</span><span class="s1"> 
                } 
            } 
 
            </span><span class="s0">else if </span><span class="s1">(leftChild_index(currentNode) &lt; numberOfNodes) { 
                </span><span class="s0">if </span><span class="s1">(heap[leftChild_index(currentNode)] &gt; heap[currentNode]) { 
                    swap(leftChild_index(currentNode)</span><span class="s0">, </span><span class="s1">currentNode)</span><span class="s0">;</span><span class="s1"> 
                    currentNode = leftChild_index(currentNode)</span><span class="s0">;</span><span class="s1"> 
                    stop = </span><span class="s0">false;</span><span class="s1"> 
                } 
            } 
        } 
 
    } 
 
    </span><span class="s0">int </span><span class="s1">compareWithParent(</span><span class="s0">int </span><span class="s1">index) { 
 
        </span><span class="s4">// return value of parent if swap occurs</span><span class="s1"> 
        </span><span class="s4">// else return original index value</span><span class="s1"> 
 
        </span><span class="s0">if </span><span class="s1">(heap[index] &gt; heap[parent_index(index)]) { 
            swap(index</span><span class="s0">, </span><span class="s1">parent_index(index))</span><span class="s0">;</span><span class="s1"> 
            </span><span class="s0">return </span><span class="s1">parent_index(index)</span><span class="s0">;</span><span class="s1"> 
        } 
        </span><span class="s0">return </span><span class="s1">index</span><span class="s0">;</span><span class="s1"> 
    } 
 
    </span><span class="s0">void </span><span class="s1">swap(</span><span class="s0">int </span><span class="s1">index1</span><span class="s0">, int </span><span class="s1">index2) { 
        </span><span class="s0">int </span><span class="s1">temp = heap[index1]</span><span class="s0">;</span><span class="s1"> 
        heap[index1] = heap[index2]</span><span class="s0">;</span><span class="s1"> 
        heap[index2] = temp</span><span class="s0">;</span><span class="s1"> 
    } 
 
    </span><span class="s0">int </span><span class="s1">parent_index(</span><span class="s0">int </span><span class="s1">index) { 
        </span><span class="s0">return </span><span class="s1">(index - </span><span class="s2">1</span><span class="s1">) / </span><span class="s2">2</span><span class="s0">;</span><span class="s1"> 
    } 
 
    </span><span class="s0">int </span><span class="s1">leftChild_index(</span><span class="s0">int </span><span class="s1">index) { 
        </span><span class="s0">return </span><span class="s1">index * </span><span class="s2">2 </span><span class="s1">+ </span><span class="s2">1</span><span class="s0">;</span><span class="s1"> 
    } 
 
    </span><span class="s0">int </span><span class="s1">rightChild_index(</span><span class="s0">int </span><span class="s1">index) { 
        </span><span class="s0">return </span><span class="s1">index * </span><span class="s2">2 </span><span class="s1">+ </span><span class="s2">2</span><span class="s0">;</span><span class="s1"> 
    } 
 
    </span><span class="s0">void </span><span class="s1">printHeap() { 
        printTreeStructure()</span><span class="s0">;</span><span class="s1"> 
        System.out.println()</span><span class="s0">;</span><span class="s1"> 
        printArrayStructure()</span><span class="s0">;</span><span class="s1"> 
        System.out.println()</span><span class="s0">;</span><span class="s1"> 
    } 
 
    </span><span class="s0">void </span><span class="s1">printTreeStructure() { 
        System.out.println(</span><span class="s3">&quot;Tree representation:&quot;</span><span class="s1">)</span><span class="s0">;</span><span class="s1"> 
        breadthFirstIterate(</span><span class="s2">0</span><span class="s0">, </span><span class="s2">0</span><span class="s1">)</span><span class="s0">;</span><span class="s1"> 
    } 
 
    </span><span class="s0">void </span><span class="s1">breadthFirstIterate(</span><span class="s0">int </span><span class="s1">index</span><span class="s0">, int </span><span class="s1">depth) { 
 
        </span><span class="s0">for </span><span class="s1">(</span><span class="s0">int </span><span class="s1">i = </span><span class="s2">0</span><span class="s0">; </span><span class="s1">i &lt; depth</span><span class="s0">; </span><span class="s1">i++) { 
            System.out.print(</span><span class="s3">&quot;---&quot;</span><span class="s1">)</span><span class="s0">;</span><span class="s1"> 
        } 
        System.out.println(heap[index])</span><span class="s0">;</span><span class="s1"> 
 
        depth++</span><span class="s0">;</span><span class="s1"> 
        </span><span class="s0">if </span><span class="s1">(rightChild_index(index) &lt; numberOfNodes) { 
            breadthFirstIterate(leftChild_index(index)</span><span class="s0">, </span><span class="s1">depth)</span><span class="s0">;</span><span class="s1"> 
            breadthFirstIterate(rightChild_index(index)</span><span class="s0">, </span><span class="s1">depth)</span><span class="s0">;</span><span class="s1"> 
        } 
        </span><span class="s0">else if </span><span class="s1">(leftChild_index(index) &lt; numberOfNodes) { 
            breadthFirstIterate(leftChild_index(index)</span><span class="s0">, </span><span class="s1">depth)</span><span class="s0">;</span><span class="s1"> 
        } 
    } 
 
    </span><span class="s0">void </span><span class="s1">printArrayStructure() { 
        System.out.println(</span><span class="s3">&quot;Array representation:&quot;</span><span class="s1">)</span><span class="s0">;</span><span class="s1"> 
        </span><span class="s0">for </span><span class="s1">(</span><span class="s0">int </span><span class="s1">i = </span><span class="s2">0</span><span class="s0">; </span><span class="s1">i &lt; numberOfNodes</span><span class="s0">; </span><span class="s1">i++) { 
            System.out.print(heap[i] + </span><span class="s3">&quot; &quot;</span><span class="s1">)</span><span class="s0">;</span><span class="s1"> 
        } 
        System.out.println()</span><span class="s0">;</span><span class="s1"> 
    } 
 
}</span></pre>
</div>