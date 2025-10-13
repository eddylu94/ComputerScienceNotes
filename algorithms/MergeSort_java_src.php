<head>
<title>MergeSort.java</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<style type="text/css">
.ln { color: rgb(0,0,0); font-weight: normal; font-style: normal; }
.s0 { color: rgb(204,120,50); }
.s1 { color: rgb(169,183,198); }
.s2 { color: rgb(106,135,89); }
.s3 { color: rgb(104,151,187); }
</style>
</head>
<div style="background-color: #2b2b2b; padding: 10px;">
<pre>

<span class="s0">public class </span><span class="s1">MergeSort { 
 
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
 
        </span><span class="s0">int</span><span class="s1">[] first = </span><span class="s0">new int</span><span class="s1">[size / </span><span class="s3">2</span><span class="s1">]</span><span class="s0">;</span><span class="s1"> 
        </span><span class="s0">int</span><span class="s1">[] second = </span><span class="s0">new int</span><span class="s1">[size - (size / </span><span class="s3">2</span><span class="s1">)]</span><span class="s0">;</span><span class="s1"> 
        System.out.println(</span><span class="s2">&quot;Split:&quot;</span><span class="s1">)</span><span class="s0">;</span><span class="s1"> 
        </span><span class="s0">for </span><span class="s1">(</span><span class="s0">int </span><span class="s1">i = </span><span class="s3">0</span><span class="s0">; </span><span class="s1">i &lt; first.length</span><span class="s0">; </span><span class="s1">i++) { 
            first[i] = initial[i]</span><span class="s0">;</span><span class="s1"> 
            System.out.print(initial[i] + </span><span class="s2">&quot; &quot;</span><span class="s1">)</span><span class="s0">;</span><span class="s1"> 
        } 
        System.out.println()</span><span class="s0">;</span><span class="s1"> 
        </span><span class="s0">for </span><span class="s1">(</span><span class="s0">int </span><span class="s1">j = </span><span class="s3">0</span><span class="s0">; </span><span class="s1">j &lt; second.length</span><span class="s0">; </span><span class="s1">j++) { 
            second[j] = initial[j + (size / </span><span class="s3">2</span><span class="s1">)]</span><span class="s0">;</span><span class="s1"> 
            System.out.print(initial[j + (size / </span><span class="s3">2</span><span class="s1">)] + </span><span class="s2">&quot; &quot;</span><span class="s1">)</span><span class="s0">;</span><span class="s1"> 
        } 
        System.out.println()</span><span class="s0">;</span><span class="s1"> 
        System.out.println()</span><span class="s0">;</span><span class="s1"> 
 
        </span><span class="s0">return </span><span class="s1">merge(sort(first)</span><span class="s0">, </span><span class="s1">sort(second))</span><span class="s0">;</span><span class="s1"> 
    } 
 
    </span><span class="s0">public static int</span><span class="s1">[] merge(</span><span class="s0">int</span><span class="s1">[] first</span><span class="s0">, int</span><span class="s1">[] second) { 
 
        System.out.println(</span><span class="s2">&quot;Merging:&quot;</span><span class="s1">)</span><span class="s0">;</span><span class="s1"> 
        </span><span class="s0">for </span><span class="s1">(</span><span class="s0">int </span><span class="s1">a = </span><span class="s3">0</span><span class="s0">; </span><span class="s1">a &lt; first.length</span><span class="s0">; </span><span class="s1">a++) { 
            System.out.print(first[a] + </span><span class="s2">&quot; &quot;</span><span class="s1">)</span><span class="s0">;</span><span class="s1"> 
        } 
        System.out.print(</span><span class="s2">&quot;and &quot;</span><span class="s1">)</span><span class="s0">;</span><span class="s1"> 
        </span><span class="s0">for </span><span class="s1">(</span><span class="s0">int </span><span class="s1">b = </span><span class="s3">0</span><span class="s0">; </span><span class="s1">b &lt; second.length</span><span class="s0">; </span><span class="s1">b++) { 
            System.out.print(second[b] + </span><span class="s2">&quot; &quot;</span><span class="s1">)</span><span class="s0">;</span><span class="s1"> 
        } 
        System.out.println()</span><span class="s0">;</span><span class="s1"> 
        System.out.println()</span><span class="s0">;</span><span class="s1"> 
 
        </span><span class="s0">int</span><span class="s1">[] merged = </span><span class="s0">new int</span><span class="s1">[first.length + second.length]</span><span class="s0">;</span><span class="s1"> 
        </span><span class="s0">int </span><span class="s1">pointer1 = </span><span class="s3">0</span><span class="s0">;</span><span class="s1"> 
        </span><span class="s0">int </span><span class="s1">pointer2 = </span><span class="s3">0</span><span class="s0">;</span><span class="s1"> 
        </span><span class="s0">for </span><span class="s1">(</span><span class="s0">int </span><span class="s1">i = </span><span class="s3">0</span><span class="s0">; </span><span class="s1">i &lt; merged.length</span><span class="s0">; </span><span class="s1">i++) { 
            </span><span class="s0">if </span><span class="s1">(pointer1 == first.length) { 
                merged[i] = second[pointer2]</span><span class="s0">;</span><span class="s1"> 
                pointer2++</span><span class="s0">;</span><span class="s1"> 
            } 
            </span><span class="s0">else if </span><span class="s1">(pointer2 == second.length) { 
                merged[i] = first[pointer1]</span><span class="s0">;</span><span class="s1"> 
                pointer1++</span><span class="s0">;</span><span class="s1"> 
            } 
            </span><span class="s0">else if </span><span class="s1">(first[pointer1] &lt; second[pointer2]) { 
                merged[i] = first[pointer1]</span><span class="s0">;</span><span class="s1"> 
                pointer1++</span><span class="s0">;</span><span class="s1"> 
            } 
            </span><span class="s0">else </span><span class="s1">{ 
                merged[i] = second[pointer2]</span><span class="s0">;</span><span class="s1"> 
                pointer2++</span><span class="s0">;</span><span class="s1"> 
            } 
        } 
 
        System.out.println(</span><span class="s2">&quot;Merged:&quot;</span><span class="s1">)</span><span class="s0">;</span><span class="s1"> 
        </span><span class="s0">for </span><span class="s1">(</span><span class="s0">int </span><span class="s1">j = </span><span class="s3">0</span><span class="s0">; </span><span class="s1">j &lt; merged.length</span><span class="s0">; </span><span class="s1">j++) { 
            System.out.print(merged[j] + </span><span class="s2">&quot; &quot;</span><span class="s1">)</span><span class="s0">;</span><span class="s1"> 
        } 
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