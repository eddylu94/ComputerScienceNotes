<head>
<title>Practice6.java</title>
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

</span><span class="s2">import </span><span class="s1">java.util.Arrays</span><span class="s2">;</span><span class="s1"> 
 
</span><span class="s2">public class </span><span class="s1">Practice6 { 
 
    </span><span class="s2">public static void </span><span class="s1">main(String[] args) { 
        </span><span class="s2">int</span><span class="s1">[] input = {</span><span class="s3">5</span><span class="s2">, </span><span class="s1">-</span><span class="s3">3</span><span class="s2">, </span><span class="s3">2</span><span class="s2">, </span><span class="s3">8</span><span class="s2">, </span><span class="s3">12</span><span class="s2">, </span><span class="s1">-</span><span class="s3">1</span><span class="s2">, </span><span class="s3">6</span><span class="s2">, </span><span class="s1">-</span><span class="s3">3</span><span class="s2">, </span><span class="s1">-</span><span class="s3">5</span><span class="s2">, </span><span class="s3">9</span><span class="s1">}</span><span class="s2">;</span><span class="s1"> 
        System.out.println(</span><span class="s4">&quot;Input: &quot; </span><span class="s1">+ Arrays.toString(input))</span><span class="s2">;</span><span class="s1"> 
        System.out.println(</span><span class="s4">&quot;Output: &quot; </span><span class="s1">+ findSecondMax(input))</span><span class="s2">;</span><span class="s1"> 
    } 
 
    </span><span class="s2">public static int </span><span class="s1">findSecondMax(</span><span class="s2">int</span><span class="s1">[] input) { 
 
        </span><span class="s2">int </span><span class="s1">max</span><span class="s2">, </span><span class="s1">secondMax</span><span class="s2">;</span><span class="s1"> 
        </span><span class="s2">if </span><span class="s1">(input[</span><span class="s3">0</span><span class="s1">] &gt; input[</span><span class="s3">1</span><span class="s1">]) { 
            max = input[</span><span class="s3">0</span><span class="s1">]</span><span class="s2">;</span><span class="s1"> 
            secondMax = input[</span><span class="s3">1</span><span class="s1">]</span><span class="s2">;</span><span class="s1"> 
        } 
        </span><span class="s2">else </span><span class="s1">{ 
            max = input[</span><span class="s3">1</span><span class="s1">]</span><span class="s2">;</span><span class="s1"> 
            secondMax = input[</span><span class="s3">0</span><span class="s1">]</span><span class="s2">;</span><span class="s1"> 
        } 
 
        </span><span class="s2">for </span><span class="s1">(</span><span class="s2">int </span><span class="s1">i = </span><span class="s3">2</span><span class="s2">; </span><span class="s1">i &lt; input.length</span><span class="s2">; </span><span class="s1">i++) { 
            </span><span class="s2">if </span><span class="s1">(input[i] &gt; max) { 
                secondMax = max</span><span class="s2">;</span><span class="s1"> 
                max = input[i]</span><span class="s2">;</span><span class="s1"> 
            } 
            </span><span class="s2">else if </span><span class="s1">(input[i] &gt; secondMax) { 
                secondMax = input[i]</span><span class="s2">;</span><span class="s1"> 
            } 
        } 
 
        </span><span class="s2">return </span><span class="s1">secondMax</span><span class="s2">;</span><span class="s1"> 
    } 
 
}</span></pre>
</div>