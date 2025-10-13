<html>
<head>
<title>QuickSort.java</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<style type="text/css">
.ln { color: #606366; font-weight: normal; font-style: normal; }
.s0 { color: rgb(204,120,50); }
.s1 { color: rgb(169,183,198); }
.s2 { color: rgb(106,135,89); }
.s3 { color: rgb(104,151,187); }
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
 
        input = quickSort(input)</span><span class="s0">;</span><span class="s1"> 
        System.out.println()</span><span class="s0">;</span><span class="s1"> 
 
        System.out.println(</span><span class="s2">&quot;Sorted list:&quot;</span><span class="s1">)</span><span class="s0">;</span><span class="s1"> 
        printList(input)</span><span class="s0">;</span><span class="s1"> 
 
    } 
 
    </span><span class="s0">public static int</span><span class="s1">[] quickSort(</span><span class="s0">int</span><span class="s1">[] list) { 
        sort(list</span><span class="s0">, </span><span class="s3">0</span><span class="s0">, </span><span class="s1">list.length - </span><span class="s3">1</span><span class="s1">)</span><span class="s0">;</span><span class="s1"> 
        </span><span class="s0">return </span><span class="s1">list</span><span class="s0">;</span><span class="s1"> 
    } 
 
    </span><span class="s0">public static void </span><span class="s1">sort(</span><span class="s0">int</span><span class="s1">[] list</span><span class="s0">, int </span><span class="s1">leftBound</span><span class="s0">, int </span><span class="s1">rightBound) { 
        </span><span class="s0">if </span><span class="s1">(leftBound &gt;= rightBound) { 
            </span><span class="s0">return;</span><span class="s1"> 
        } 
 
        </span><span class="s0">int </span><span class="s1">pivot = list[leftBound + (rightBound - leftBound) / </span><span class="s3">2</span><span class="s1">]</span><span class="s0">;</span><span class="s1"> 
 
        </span><span class="s0">int </span><span class="s1">i = leftBound</span><span class="s0">;</span><span class="s1"> 
        </span><span class="s0">int </span><span class="s1">j = rightBound</span><span class="s0">;</span><span class="s1"> 
 
        </span><span class="s0">while </span><span class="s1">(i &lt;= j) { 
            </span><span class="s0">while </span><span class="s1">(list[i] &lt; pivot) { 
                i++</span><span class="s0">;</span><span class="s1"> 
            } 
            </span><span class="s0">while </span><span class="s1">(list[j] &gt; pivot) { 
                j--</span><span class="s0">;</span><span class="s1"> 
            } 
            </span><span class="s0">if </span><span class="s1">(i &lt;= j) { 
                swap(list</span><span class="s0">, </span><span class="s1">i</span><span class="s0">, </span><span class="s1">j)</span><span class="s0">;</span><span class="s1"> 
                i++</span><span class="s0">;</span><span class="s1"> 
                j--</span><span class="s0">;</span><span class="s1"> 
            } 
            printList(list)</span><span class="s0">;</span><span class="s1"> 
        } 
 
        </span><span class="s0">if </span><span class="s1">(leftBound &lt; j) { 
            sort(list</span><span class="s0">, </span><span class="s1">leftBound</span><span class="s0">, </span><span class="s1">j)</span><span class="s0">;</span><span class="s1"> 
        } 
        </span><span class="s0">if </span><span class="s1">(rightBound &gt; i) { 
            sort(list</span><span class="s0">, </span><span class="s1">i</span><span class="s0">, </span><span class="s1">rightBound)</span><span class="s0">;</span><span class="s1"> 
        } 
    } 
 
    </span><span class="s0">public static void </span><span class="s1">swap(</span><span class="s0">int</span><span class="s1">[] list</span><span class="s0">, int </span><span class="s1">a</span><span class="s0">, int </span><span class="s1">b) { 
        </span><span class="s0">int </span><span class="s1">temp = list[a]</span><span class="s0">;</span><span class="s1"> 
        list[a] = list[b]</span><span class="s0">;</span><span class="s1"> 
        list[b] = temp</span><span class="s0">;</span><span class="s1"> 
    } 
 
    </span><span class="s0">public static void </span><span class="s1">printList(</span><span class="s0">int</span><span class="s1">[] input) { 
        </span><span class="s0">for </span><span class="s1">(</span><span class="s0">int </span><span class="s1">i = </span><span class="s3">0</span><span class="s0">; </span><span class="s1">i &lt; input.length</span><span class="s0">; </span><span class="s1">i++) { 
            System.out.print(input[i] + </span><span class="s2">&quot; &quot;</span><span class="s1">)</span><span class="s0">;</span><span class="s1"> 
        } 
        System.out.println()</span><span class="s0">;</span><span class="s1"> 
    } 
}</span></pre>
</div>