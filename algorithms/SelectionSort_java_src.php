<head>
<title>SelectionSort.java</title>
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

<span class="s0">public class </span><span class="s1">SelectionSort { 
 
    </span><span class="s0">public static int</span><span class="s1">[] input</span><span class="s0">;</span><span class="s1"> 
    </span><span class="s0">public static int </span><span class="s1">length</span><span class="s0">;</span><span class="s1"> 
 
    </span><span class="s0">public static void </span><span class="s1">main(String[] args) { 
 
        String inputString = </span><span class="s2">&quot;4143675351981074&quot;</span><span class="s0">;</span><span class="s1"> 
        length = inputString.length()</span><span class="s0">;</span><span class="s1"> 
 
        input = </span><span class="s0">new int</span><span class="s1">[length]</span><span class="s0">;</span><span class="s1"> 
        </span><span class="s0">for </span><span class="s1">(</span><span class="s0">int </span><span class="s1">i = </span><span class="s3">0</span><span class="s0">; </span><span class="s1">i &lt; length</span><span class="s0">; </span><span class="s1">i++) { 
            input[i] = Character.getNumericValue(inputString.charAt(i))</span><span class="s0">;</span><span class="s1"> 
        } 
 
        System.out.println(</span><span class="s2">&quot;Unsorted list:&quot;</span><span class="s1">)</span><span class="s0">;</span><span class="s1"> 
        printList()</span><span class="s0">;</span><span class="s1"> 
        System.out.println()</span><span class="s0">;</span><span class="s1"> 
 
        </span><span class="s0">for </span><span class="s1">(</span><span class="s0">int </span><span class="s1">i = </span><span class="s3">0</span><span class="s0">; </span><span class="s1">i &lt; length</span><span class="s0">; </span><span class="s1">i++) { 
            System.out.println(</span><span class="s2">&quot;Iterating:</span><span class="s0">\n</span><span class="s2">&quot;</span><span class="s1">)</span><span class="s0">;</span><span class="s1"> 
            </span><span class="s0">int </span><span class="s1">index = findLowest(i)</span><span class="s0">;</span><span class="s1"> 
            </span><span class="s0">int </span><span class="s1">value = input[findLowest(i)]</span><span class="s0">;</span><span class="s1"> 
            </span><span class="s0">if </span><span class="s1">(index != i) { 
                </span><span class="s0">for </span><span class="s1">(</span><span class="s0">int </span><span class="s1">j = index</span><span class="s0">; </span><span class="s1">j &gt; i</span><span class="s0">; </span><span class="s1">j--) { 
                    input[j] = input[j - </span><span class="s3">1</span><span class="s1">]</span><span class="s0">;</span><span class="s1"> 
                    printList()</span><span class="s0">;</span><span class="s1"> 
                } 
                input[i] = value</span><span class="s0">;</span><span class="s1"> 
                printList()</span><span class="s0">;</span><span class="s1"> 
            } 
            System.out.println()</span><span class="s0">;</span><span class="s1"> 
        } 
 
        System.out.println(</span><span class="s2">&quot;Sorted list:&quot;</span><span class="s1">)</span><span class="s0">;</span><span class="s1"> 
        printList()</span><span class="s0">;</span><span class="s1"> 
 
    } 
 
    </span><span class="s0">public static int </span><span class="s1">findLowest(</span><span class="s0">int </span><span class="s1">startingValue) { 
        </span><span class="s0">int </span><span class="s1">lowestValue = input[startingValue]</span><span class="s0">;</span><span class="s1"> 
        </span><span class="s0">int </span><span class="s1">lowestIndex = startingValue</span><span class="s0">;</span><span class="s1"> 
        </span><span class="s0">for </span><span class="s1">(</span><span class="s0">int </span><span class="s1">i = startingValue</span><span class="s0">; </span><span class="s1">i &lt; length</span><span class="s0">; </span><span class="s1">i++) { 
            </span><span class="s0">if </span><span class="s1">(input[i] &lt; lowestValue) { 
                lowestValue = input[i]</span><span class="s0">;</span><span class="s1"> 
                lowestIndex = i</span><span class="s0">;</span><span class="s1"> 
            } 
        } 
        </span><span class="s0">return </span><span class="s1">lowestIndex</span><span class="s0">;</span><span class="s1"> 
    } 
 
    </span><span class="s0">public static void </span><span class="s1">printList() { 
        </span><span class="s0">for </span><span class="s1">(</span><span class="s0">int </span><span class="s1">i = </span><span class="s3">0</span><span class="s0">; </span><span class="s1">i &lt; input.length</span><span class="s0">; </span><span class="s1">i++) { 
            System.out.print(input[i] + </span><span class="s2">&quot; &quot;</span><span class="s1">)</span><span class="s0">;</span><span class="s1"> 
        } 
        System.out.println()</span><span class="s0">;</span><span class="s1"> 
    } 
 
}</span></pre>
</div>