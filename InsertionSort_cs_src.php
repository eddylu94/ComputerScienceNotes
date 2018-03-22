<head>
<title>InsertionSort.cs</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<style type="text/css">
.ln { color: #606366; font-weight: normal; font-style: normal; }
.s0 { color: rgb(204,120,50); font-weight: bold; }
.s1 { color: rgb(169,183,198); }
.s2 { color: rgb(204,120,50); }
</style>
</head>
<div style="background-color: #2b2b2b; padding: 10px;">
<pre>
<span class="s0">using </span><span class="s1">System</span><span class="s2">;</span><span class="s1"> 
 
</span><span class="s0">public class </span><span class="s1">InsertionSort 
{ 
    </span><span class="s0">private static int</span><span class="s1">[] input</span><span class="s2">;</span><span class="s1"> 
    </span><span class="s0">private static int </span><span class="s1">length</span><span class="s2">;</span><span class="s1"> 
 
    </span><span class="s0">public static void </span><span class="s1">Main() 
    { 
        String inputString = &quot;4143675351981074&quot;</span><span class="s2">;</span><span class="s1"> 
 
        length = inputString.Length</span><span class="s2">;</span><span class="s1"> 
 
        input = </span><span class="s0">new int</span><span class="s1">[length]</span><span class="s2">;</span><span class="s1"> 
        </span><span class="s0">for </span><span class="s1">(</span><span class="s0">int </span><span class="s1">i = 0</span><span class="s2">; </span><span class="s1">i &lt; length</span><span class="s2">; </span><span class="s1">i++) 
        { 
            input[i] = (</span><span class="s0">int</span><span class="s1">)Char.GetNumericValue(inputString[i])</span><span class="s2">;</span><span class="s1"> 
        } 
 
        Console.WriteLine(&quot;Unsorted list:&quot;)</span><span class="s2">;</span><span class="s1"> 
        printList()</span><span class="s2">;</span><span class="s1"> 
        Console.WriteLine()</span><span class="s2">;</span><span class="s1"> 
 
        </span><span class="s0">for </span><span class="s1">(</span><span class="s0">int </span><span class="s1">i = 0</span><span class="s2">; </span><span class="s1">i &lt; length</span><span class="s2">; </span><span class="s1">i++) 
        { 
            insert(input[i]</span><span class="s2">, </span><span class="s1">i)</span><span class="s2">;</span><span class="s1"> 
            printList()</span><span class="s2">;</span><span class="s1"> 
            Console.WriteLine()</span><span class="s2">;</span><span class="s1"> 
        } 
 
        Console.WriteLine(&quot;Sorted list:&quot;)</span><span class="s2">;</span><span class="s1"> 
        printList()</span><span class="s2">;</span><span class="s1"> 
    } 
 
    </span><span class="s0">public static void </span><span class="s1">insert(</span><span class="s0">int </span><span class="s1">removed_value</span><span class="s2">, </span><span class="s0">int </span><span class="s1">removed_index) 
    { 
        </span><span class="s0">if </span><span class="s1">(removed_value &lt;= input[0]) 
        { 
            </span><span class="s0">for </span><span class="s1">(</span><span class="s0">int </span><span class="s1">i = removed_index</span><span class="s2">; </span><span class="s1">i &gt;= 1</span><span class="s2">; </span><span class="s1">i--) 
            { 
                input[i] = input[i - 1]</span><span class="s2">;</span><span class="s1"> 
            } 
            input[0] = removed_value</span><span class="s2">;</span><span class="s1"> 
        } 
        </span><span class="s0">else</span><span class="s1"> 
        { 
            </span><span class="s0">int </span><span class="s1">i</span><span class="s2">;</span><span class="s1"> 
            </span><span class="s0">for </span><span class="s1">(i = 1</span><span class="s2">; </span><span class="s1">i &lt; removed_index - 1</span><span class="s2">; </span><span class="s1">i++) 
            { 
                </span><span class="s0">if </span><span class="s1">(removed_value &gt;= input[i - 1] &amp;&amp; removed_value &lt;= input[i]) 
                { 
                    </span><span class="s0">break</span><span class="s2">;</span><span class="s1"> 
                } 
            } 
 
            </span><span class="s0">if </span><span class="s1">(i &lt; removed_index - 1) 
            { 
                </span><span class="s0">for </span><span class="s1">(</span><span class="s0">int </span><span class="s1">j = removed_index</span><span class="s2">; </span><span class="s1">j &gt;= i</span><span class="s2">; </span><span class="s1">j--) 
                { 
                    input[j] = input[j - 1]</span><span class="s2">;</span><span class="s1"> 
                } 
                input[i] = removed_value</span><span class="s2">;</span><span class="s1"> 
            } 
            </span><span class="s0">else if </span><span class="s1">(i == removed_index - 1) 
            { 
                </span><span class="s0">if </span><span class="s1">(input[removed_index - 1] &gt; input[removed_index]) 
                { 
                    </span><span class="s0">int </span><span class="s1">temp = input[removed_index - 1]</span><span class="s2">;</span><span class="s1"> 
                    input[removed_index - 1] = input[removed_index]</span><span class="s2">;</span><span class="s1"> 
                    input[removed_index] = temp</span><span class="s2">;</span><span class="s1"> 
                } 
            } 
        } 
    } 
 
    </span><span class="s0">public static void </span><span class="s1">printList() { 
        </span><span class="s0">for </span><span class="s1">(</span><span class="s0">int </span><span class="s1">i = 0</span><span class="s2">; </span><span class="s1">i &lt; input.Length</span><span class="s2">; </span><span class="s1">i++) { 
            Console.Write(input[i] + &quot; &quot;)</span><span class="s2">;</span><span class="s1"> 
        } 
        Console.WriteLine()</span><span class="s2">;</span><span class="s1"> 
    } 
} 
</span></pre>
</div>