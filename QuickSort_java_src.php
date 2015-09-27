<head>
<title>QuickSort.java</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<style type="text/css">
.ln { color: rgb(0,0,0); font-weight: normal; font-style: normal; }
.s0 { color: rgb(204,120,50); }
.s1 { color: rgb(169,183,198); }
.s2 { color: rgb(106,135,89); }
.s3 { color: rgb(104,151,187); }
.s4 { color: rgb(128,128,128); }
</style>
</head>
<div style="background-color: #2b2b2b; padding: 10px;">
<pre>

<span class="s0">public class </span><span class="s1">QuickSort { 
 
    </span><span class="s0">public static void </span><span class="s1">main(String[] args) { 
 
        </span><span class="s0">int</span><span class="s1">[] input</span><span class="s0">;</span><span class="s1"> 
        </span><span class="s0">int </span><span class="s1">length</span><span class="s0">;</span><span class="s1"> 
 
        String inputString = </span><span class="s2">&quot;4143675351981074&quot;</span><span class="s0">;</span><span class="s1"> 
        length = inputString.length()</span><span class="s0">;</span><span class="s1"> 
 
        input = </span><span class="s0">new int</span><span class="s1">[length]</span><span class="s0">;</span><span class="s1"> 
        </span><span class="s0">for </span><span class="s1">(</span><span class="s0">int </span><span class="s1">i = </span><span class="s3">0</span><span class="s0">; </span><span class="s1">i &lt; length</span><span class="s0">; </span><span class="s1">i++) { 
            input[i] = Character.getNumericValue(inputString.charAt(i))</span><span class="s0">;</span><span class="s1"> 
        } 
 
        System.out.println(</span><span class="s2">&quot;Unsorted list:&quot;</span><span class="s1">)</span><span class="s0">;</span><span class="s1"> 
        printList(input)</span><span class="s0">;</span><span class="s1"> 
        System.out.println()</span><span class="s0">;</span><span class="s1"> 
 
        input = sort(input)</span><span class="s0">;</span><span class="s1"> 
 
        System.out.println(</span><span class="s2">&quot;Sorted list:&quot;</span><span class="s1">)</span><span class="s0">;</span><span class="s1"> 
        printList(input)</span><span class="s0">;</span><span class="s1"> 
 
    } 
 
    </span><span class="s0">public static int</span><span class="s1">[] sort(</span><span class="s0">int</span><span class="s1">[] initial) { 
 
        </span><span class="s0">int </span><span class="s1">size = initial.length</span><span class="s0">;</span><span class="s1"> 
 
        </span><span class="s0">if </span><span class="s1">(size == </span><span class="s3">1</span><span class="s1">) { 
            </span><span class="s0">return </span><span class="s1">initial</span><span class="s0">;</span><span class="s1"> 
        } 
 
        </span><span class="s0">int </span><span class="s1">pivot = initial.length - </span><span class="s3">1</span><span class="s0">; </span><span class="s4">// choose pivot to be center value</span><span class="s1"> 
        </span><span class="s0">int </span><span class="s1">scanPointer = </span><span class="s3">0</span><span class="s0">;</span><span class="s1"> 
 
        </span><span class="s0">while </span><span class="s1">(pivot != scanPointer) { 
            </span><span class="s0">if </span><span class="s1">(pivot &gt; scanPointer) { 
                </span><span class="s0">if </span><span class="s1">(initial[pivot] &lt; initial[scanPointer]) { 
                    </span><span class="s0">int </span><span class="s1">temp</span><span class="s0">;</span><span class="s1"> 
                    temp = initial[pivot]</span><span class="s0">;</span><span class="s1"> 
                    initial[pivot] = initial[scanPointer]</span><span class="s0">;</span><span class="s1"> 
                    initial[scanPointer] = temp</span><span class="s0">;</span><span class="s1"> 
                    temp = pivot</span><span class="s0">;</span><span class="s1"> 
                    pivot = scanPointer</span><span class="s0">;</span><span class="s1"> 
                    scanPointer = temp</span><span class="s0">;</span><span class="s1"> 
                } 
                </span><span class="s0">else </span><span class="s1">{ 
                    scanPointer++</span><span class="s0">;</span><span class="s1"> 
                } 
            } 
            </span><span class="s0">else if</span><span class="s1">(pivot &lt; scanPointer) { 
                </span><span class="s0">if </span><span class="s1">(initial[pivot] &gt; initial[scanPointer]) { 
                    </span><span class="s0">int </span><span class="s1">temp</span><span class="s0">;</span><span class="s1"> 
                    temp = initial[pivot]</span><span class="s0">;</span><span class="s1"> 
                    initial[pivot] = initial[scanPointer]</span><span class="s0">;</span><span class="s1"> 
                    initial[scanPointer] = temp</span><span class="s0">;</span><span class="s1"> 
                    temp = pivot</span><span class="s0">;</span><span class="s1"> 
                    pivot = scanPointer</span><span class="s0">;</span><span class="s1"> 
                    scanPointer = temp</span><span class="s0">;</span><span class="s1"> 
                } 
                </span><span class="s0">else </span><span class="s1">{ 
                    scanPointer--</span><span class="s0">;</span><span class="s1"> 
                } 
            } 
        } 
 
        System.out.println(</span><span class="s2">&quot;Split:&quot;</span><span class="s1">)</span><span class="s0">;</span><span class="s1"> 
 
        </span><span class="s0">if </span><span class="s1">(pivot == </span><span class="s3">0</span><span class="s1">) { 
            </span><span class="s0">int</span><span class="s1">[] right = </span><span class="s0">new int</span><span class="s1">[size - </span><span class="s3">1</span><span class="s1">]</span><span class="s0">;</span><span class="s1"> 
            System.out.print(pivot)</span><span class="s0">;</span><span class="s1"> 
            System.out.println()</span><span class="s0">;</span><span class="s1"> 
            </span><span class="s0">for </span><span class="s1">(</span><span class="s0">int </span><span class="s1">i = </span><span class="s3">0</span><span class="s0">; </span><span class="s1">i &lt; size - </span><span class="s3">1</span><span class="s0">; </span><span class="s1">i++) { 
                right[i] = initial[i + </span><span class="s3">1</span><span class="s1">]</span><span class="s0">;</span><span class="s1"> 
                System.out.print(initial[i + </span><span class="s3">1</span><span class="s1">] + </span><span class="s2">&quot; &quot;</span><span class="s1">)</span><span class="s0">;</span><span class="s1"> 
            } 
            System.out.println()</span><span class="s0">;</span><span class="s1"> 
            System.out.println()</span><span class="s0">;</span><span class="s1"> 
            </span><span class="s0">return </span><span class="s1">merge(initial[pivot]</span><span class="s0">, </span><span class="s1">sort(right))</span><span class="s0">;</span><span class="s1"> 
        } 
 
        </span><span class="s0">if </span><span class="s1">(pivot == size - </span><span class="s3">1</span><span class="s1">) { 
            </span><span class="s0">int</span><span class="s1">[] left = </span><span class="s0">new int</span><span class="s1">[size - </span><span class="s3">1</span><span class="s1">]</span><span class="s0">;</span><span class="s1"> 
            </span><span class="s0">for </span><span class="s1">(</span><span class="s0">int </span><span class="s1">i = </span><span class="s3">0</span><span class="s0">; </span><span class="s1">i &lt; size - </span><span class="s3">1</span><span class="s0">; </span><span class="s1">i++) { 
                left[i] = initial[i]</span><span class="s0">;</span><span class="s1"> 
                System.out.print(initial[i] + </span><span class="s2">&quot; &quot;</span><span class="s1">)</span><span class="s0">;</span><span class="s1"> 
            } 
            System.out.println()</span><span class="s0">;</span><span class="s1"> 
            System.out.print(initial[pivot])</span><span class="s0">;</span><span class="s1"> 
            System.out.println()</span><span class="s0">;</span><span class="s1"> 
            System.out.println()</span><span class="s0">;</span><span class="s1"> 
            </span><span class="s0">return </span><span class="s1">merge(sort(left)</span><span class="s0">, </span><span class="s1">initial[pivot])</span><span class="s0">;</span><span class="s1"> 
        } 
 
        </span><span class="s0">int</span><span class="s1">[] first = </span><span class="s0">new int</span><span class="s1">[pivot]</span><span class="s0">;</span><span class="s1"> 
        </span><span class="s0">int</span><span class="s1">[] second = </span><span class="s0">new int</span><span class="s1">[size - pivot - </span><span class="s3">1</span><span class="s1">]</span><span class="s0">;</span><span class="s1"> 
 
        </span><span class="s0">for </span><span class="s1">(</span><span class="s0">int </span><span class="s1">i = </span><span class="s3">0</span><span class="s0">; </span><span class="s1">i &lt; first.length</span><span class="s0">; </span><span class="s1">i++) { 
            first[i] = initial[i]</span><span class="s0">;</span><span class="s1"> 
            System.out.print(initial[i] + </span><span class="s2">&quot; &quot;</span><span class="s1">)</span><span class="s0">;</span><span class="s1"> 
        } 
        System.out.println()</span><span class="s0">;</span><span class="s1"> 
        System.out.print(initial[pivot])</span><span class="s0">;</span><span class="s1"> 
        System.out.println()</span><span class="s0">;</span><span class="s1"> 
        </span><span class="s0">for </span><span class="s1">(</span><span class="s0">int </span><span class="s1">j = </span><span class="s3">0</span><span class="s0">; </span><span class="s1">j &lt; second.length</span><span class="s0">; </span><span class="s1">j++) { 
            second[j] = initial[j + pivot + </span><span class="s3">1</span><span class="s1">]</span><span class="s0">;</span><span class="s1"> 
            System.out.print(initial[j + pivot + </span><span class="s3">1</span><span class="s1">] + </span><span class="s2">&quot; &quot;</span><span class="s1">)</span><span class="s0">;</span><span class="s1"> 
        } 
        System.out.println()</span><span class="s0">;</span><span class="s1"> 
        System.out.println()</span><span class="s0">;</span><span class="s1"> 
 
        </span><span class="s0">return </span><span class="s1">merge(sort(first)</span><span class="s0">, </span><span class="s1">initial[pivot]</span><span class="s0">, </span><span class="s1">sort(second))</span><span class="s0">;</span><span class="s1"> 
    } 
 
    </span><span class="s0">public static int</span><span class="s1">[] merge(</span><span class="s0">int</span><span class="s1">[] first</span><span class="s0">, int </span><span class="s1">pivot</span><span class="s0">, int</span><span class="s1">[] second) { 
        System.out.println(</span><span class="s2">&quot;Merging:&quot;</span><span class="s1">)</span><span class="s0">;</span><span class="s1"> 
        </span><span class="s0">for </span><span class="s1">(</span><span class="s0">int </span><span class="s1">a = </span><span class="s3">0</span><span class="s0">; </span><span class="s1">a &lt; first.length</span><span class="s0">; </span><span class="s1">a++) { 
            System.out.print(first[a] + </span><span class="s2">&quot; &quot;</span><span class="s1">)</span><span class="s0">;</span><span class="s1"> 
        } 
        System.out.print(</span><span class="s2">&quot;and &quot; </span><span class="s1">+ pivot + </span><span class="s2">&quot; and &quot;</span><span class="s1">)</span><span class="s0">;</span><span class="s1"> 
        </span><span class="s0">for </span><span class="s1">(</span><span class="s0">int </span><span class="s1">b = </span><span class="s3">0</span><span class="s0">; </span><span class="s1">b &lt; second.length</span><span class="s0">; </span><span class="s1">b++) { 
            System.out.print(second[b] + </span><span class="s2">&quot; &quot;</span><span class="s1">)</span><span class="s0">;</span><span class="s1"> 
        } 
        System.out.println()</span><span class="s0">;</span><span class="s1"> 
        System.out.println()</span><span class="s0">;</span><span class="s1"> 
 
        System.out.println(</span><span class="s2">&quot;Merged:&quot;</span><span class="s1">)</span><span class="s0">;</span><span class="s1"> 
        </span><span class="s0">int</span><span class="s1">[] merged = </span><span class="s0">new int</span><span class="s1">[first.length + second.length + </span><span class="s3">1</span><span class="s1">]</span><span class="s0">;</span><span class="s1"> 
        </span><span class="s0">for </span><span class="s1">(</span><span class="s0">int </span><span class="s1">i = </span><span class="s3">0</span><span class="s0">; </span><span class="s1">i &lt; first.length</span><span class="s0">; </span><span class="s1">i++) { 
            merged[i] = first[i]</span><span class="s0">;</span><span class="s1"> 
            System.out.print(first[i] + </span><span class="s2">&quot; &quot;</span><span class="s1">)</span><span class="s0">;</span><span class="s1"> 
        } 
        merged[first.length] = pivot</span><span class="s0">;</span><span class="s1"> 
        System.out.print(pivot + </span><span class="s2">&quot; &quot;</span><span class="s1">)</span><span class="s0">;</span><span class="s1"> 
        </span><span class="s0">for </span><span class="s1">(</span><span class="s0">int </span><span class="s1">j = </span><span class="s3">0</span><span class="s0">; </span><span class="s1">j &lt; second.length</span><span class="s0">; </span><span class="s1">j++) { 
            merged[j + first.length + </span><span class="s3">1</span><span class="s1">] = second[j]</span><span class="s0">;</span><span class="s1"> 
            System.out.print(second[j] + </span><span class="s2">&quot; &quot;</span><span class="s1">)</span><span class="s0">;</span><span class="s1"> 
        } 
        System.out.println()</span><span class="s0">;</span><span class="s1"> 
        System.out.println()</span><span class="s0">;</span><span class="s1"> 
        </span><span class="s0">return </span><span class="s1">merged</span><span class="s0">;</span><span class="s1"> 
    } 
 
    </span><span class="s0">public static int</span><span class="s1">[] merge(</span><span class="s0">int </span><span class="s1">pivot</span><span class="s0">, int</span><span class="s1">[] right) { 
        System.out.println(</span><span class="s2">&quot;Merging:&quot;</span><span class="s1">)</span><span class="s0">;</span><span class="s1"> 
        System.out.print(pivot + </span><span class="s2">&quot; and &quot;</span><span class="s1">)</span><span class="s0">;</span><span class="s1"> 
        </span><span class="s0">for </span><span class="s1">(</span><span class="s0">int </span><span class="s1">a = </span><span class="s3">0</span><span class="s0">; </span><span class="s1">a &lt; right.length</span><span class="s0">; </span><span class="s1">a++) { 
            System.out.print(right[a] + </span><span class="s2">&quot; &quot;</span><span class="s1">)</span><span class="s0">;</span><span class="s1"> 
        } 
        System.out.println()</span><span class="s0">;</span><span class="s1"> 
        System.out.println()</span><span class="s0">;</span><span class="s1"> 
 
        System.out.println(</span><span class="s2">&quot;Merged:&quot;</span><span class="s1">)</span><span class="s0">;</span><span class="s1"> 
        </span><span class="s0">int</span><span class="s1">[] merged = </span><span class="s0">new int</span><span class="s1">[right.length + </span><span class="s3">1</span><span class="s1">]</span><span class="s0">;</span><span class="s1"> 
        merged[</span><span class="s3">0</span><span class="s1">] = pivot</span><span class="s0">;</span><span class="s1"> 
        System.out.print(pivot + </span><span class="s2">&quot; &quot;</span><span class="s1">)</span><span class="s0">;</span><span class="s1"> 
        </span><span class="s0">for </span><span class="s1">(</span><span class="s0">int </span><span class="s1">i = </span><span class="s3">0</span><span class="s0">; </span><span class="s1">i &lt; right.length</span><span class="s0">; </span><span class="s1">i++) { 
            merged[i + </span><span class="s3">1</span><span class="s1">] = right[i]</span><span class="s0">;</span><span class="s1"> 
            System.out.print(right[i] + </span><span class="s2">&quot; &quot;</span><span class="s1">)</span><span class="s0">;</span><span class="s1"> 
        } 
        System.out.println()</span><span class="s0">;</span><span class="s1"> 
        System.out.println()</span><span class="s0">;</span><span class="s1"> 
        </span><span class="s0">return </span><span class="s1">merged</span><span class="s0">;</span><span class="s1"> 
    } 
 
    </span><span class="s0">public static int</span><span class="s1">[] merge(</span><span class="s0">int</span><span class="s1">[] left</span><span class="s0">, int </span><span class="s1">pivot) { 
        System.out.println(</span><span class="s2">&quot;Merging:&quot;</span><span class="s1">)</span><span class="s0">;</span><span class="s1"> 
        </span><span class="s0">for </span><span class="s1">(</span><span class="s0">int </span><span class="s1">a = </span><span class="s3">0</span><span class="s0">; </span><span class="s1">a &lt; left.length</span><span class="s0">; </span><span class="s1">a++) { 
            System.out.print(left[a] + </span><span class="s2">&quot; &quot;</span><span class="s1">)</span><span class="s0">;</span><span class="s1"> 
        } 
        System.out.print(</span><span class="s2">&quot;and &quot; </span><span class="s1">+ pivot)</span><span class="s0">;</span><span class="s1"> 
        System.out.println()</span><span class="s0">;</span><span class="s1"> 
        System.out.println()</span><span class="s0">;</span><span class="s1"> 
 
        System.out.println(</span><span class="s2">&quot;Merged:&quot;</span><span class="s1">)</span><span class="s0">;</span><span class="s1"> 
        </span><span class="s0">int</span><span class="s1">[] merged = </span><span class="s0">new int</span><span class="s1">[left.length + </span><span class="s3">1</span><span class="s1">]</span><span class="s0">;</span><span class="s1"> 
        </span><span class="s0">for </span><span class="s1">(</span><span class="s0">int </span><span class="s1">i = </span><span class="s3">0</span><span class="s0">; </span><span class="s1">i &lt; left.length</span><span class="s0">; </span><span class="s1">i++) { 
            merged[i] = left[i]</span><span class="s0">;</span><span class="s1"> 
            System.out.print(left[i] + </span><span class="s2">&quot; &quot;</span><span class="s1">)</span><span class="s0">;</span><span class="s1"> 
        } 
        merged[left.length] = pivot</span><span class="s0">;</span><span class="s1"> 
        System.out.print(pivot + </span><span class="s2">&quot; &quot;</span><span class="s1">)</span><span class="s0">;</span><span class="s1"> 
        System.out.println()</span><span class="s0">;</span><span class="s1"> 
        System.out.println()</span><span class="s0">;</span><span class="s1"> 
        </span><span class="s0">return </span><span class="s1">merged</span><span class="s0">;</span><span class="s1"> 
    } 
 
    </span><span class="s0">public static void </span><span class="s1">printList(</span><span class="s0">int</span><span class="s1">[] input) { 
        </span><span class="s0">for </span><span class="s1">(</span><span class="s0">int </span><span class="s1">i = </span><span class="s3">0</span><span class="s0">; </span><span class="s1">i &lt; input.length</span><span class="s0">; </span><span class="s1">i++) { 
            System.out.print(input[i] + </span><span class="s2">&quot; &quot;</span><span class="s1">)</span><span class="s0">;</span><span class="s1"> 
        } 
        System.out.println()</span><span class="s0">;</span><span class="s1"> 
    } 
 
}</span></pre>
</div>