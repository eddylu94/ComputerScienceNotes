<head>
<title>Practice3.java</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<style type="text/css">
.ln { color: rgb(0,0,0); font-weight: normal; font-style: normal; }
.s0 { color: rgb(128,128,128); }
.s1 { color: rgb(169,183,198); }
.s2 { color: rgb(204,120,50); }
.s3 { color: rgb(104,151,187); }
.s4 { color: rgb(106,135,89); }
</style>
</head>
<div style="background-color: #2b2b2b; padding: 10px;">
<pre>

</span><span class="s2">import </span><span class="s1">java.util.HashMap</span><span class="s2">;</span><span class="s1"> 
</span><span class="s2">import </span><span class="s1">java.util.Arrays</span><span class="s2">;</span><span class="s1"> 
 
</span><span class="s2">public class </span><span class="s1">Practice3 { 
 
    </span><span class="s2">public static void </span><span class="s1">main(String[] args) { 
        </span><span class="s2">int</span><span class="s1">[] input = {</span><span class="s3">10</span><span class="s2">, </span><span class="s3">2</span><span class="s2">, </span><span class="s3">22</span><span class="s2">, </span><span class="s3">30</span><span class="s2">, </span><span class="s3">3</span><span class="s2">, </span><span class="s3">27</span><span class="s2">, </span><span class="s3">9</span><span class="s2">, </span><span class="s3">1</span><span class="s2">, </span><span class="s3">12</span><span class="s2">, </span><span class="s3">4</span><span class="s2">, </span><span class="s3">18</span><span class="s2">, </span><span class="s3">20</span><span class="s2">, </span><span class="s3">5</span><span class="s2">, </span><span class="s3">24</span><span class="s2">, </span><span class="s3">6</span><span class="s2">, </span><span class="s3">15</span><span class="s1">}</span><span class="s2">;</span><span class="s1"> 
        System.out.println(</span><span class="s4">&quot;Input:</span><span class="s2">\n\n</span><span class="s4">&quot; </span><span class="s1">+ Arrays.toString(input) + </span><span class="s4">&quot;</span><span class="s2">\n</span><span class="s4">&quot;</span><span class="s1">)</span><span class="s2">;</span><span class="s1"> 
        System.out.println(</span><span class="s4">&quot;Output:</span><span class="s2">\n</span><span class="s4">&quot;</span><span class="s1">)</span><span class="s2">;</span><span class="s1"> 
        findPairs(input</span><span class="s2">, </span><span class="s3">24</span><span class="s1">)</span><span class="s2">;</span><span class="s1"> 
    } 
 
    </span><span class="s2">public static void </span><span class="s1">findPairs(</span><span class="s2">int</span><span class="s1">[] input</span><span class="s2">, int </span><span class="s1">value) { 
        </span><span class="s0">// key = input element already checked, value = index</span><span class="s1"> 
        HashMap&lt;Integer</span><span class="s2">, </span><span class="s1">Integer&gt; map = </span><span class="s2">new </span><span class="s1">HashMap&lt;Integer</span><span class="s2">, </span><span class="s1">Integer&gt;()</span><span class="s2">;</span><span class="s1"> 
        </span><span class="s2">for </span><span class="s1">(</span><span class="s2">int </span><span class="s1">i = </span><span class="s3">0</span><span class="s2">; </span><span class="s1">i &lt; input.length</span><span class="s2">; </span><span class="s1">i++) { 
            </span><span class="s2">if </span><span class="s1">(!map.containsKey(value - input[i])) { 
                map.put(input[i]</span><span class="s2">, </span><span class="s1">i)</span><span class="s2">;</span><span class="s1"> 
            } 
            </span><span class="s2">else </span><span class="s1">{ 
                System.out.println(Math.min(input[i]</span><span class="s2">, </span><span class="s1">value - input[i]) + </span><span class="s4">&quot;,&quot; </span><span class="s1">+ Math.max(input[i]</span><span class="s2">, </span><span class="s1">value - input[i]))</span><span class="s2">;</span><span class="s1"> 
            } 
        } 
    } 
 
    </span><span class="s0">/* 
    public static void findPairs(int[] input, int value) { 
        Arrays.sort(input); 
        int leftBound = 0; 
        int rightBound = input.length - 1; 
        while (leftBound &lt; rightBound) { 
            if (input[leftBound] + input[rightBound] == value) { 
                System.out.println(input[leftBound] + &quot;,&quot; + input[rightBound]); 
                leftBound++; 
                rightBound--; 
            } 
            else { 
                if (input[leftBound] + input[rightBound] &lt; value) { 
                    leftBound++; 
                } 
                else { 
                    rightBound--; 
                } 
            } 
        } 
    } 
    */</span><span class="s1"> 
 
}</span></pre>
</div>