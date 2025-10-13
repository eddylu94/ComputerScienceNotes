<html>
<head>
<title>Problem21.java</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<style type="text/css">
.ln { color: #606366; font-weight: normal; font-style: normal; }
.s0 { color: rgb(204,120,50); }
.s1 { color: rgb(169,183,198); }
.s2 { color: rgb(104,151,187); }
</style>
</head>
<div style="background-color: #2b2b2b; padding: 10px;">
<pre>
<span class="s0">import </span><span class="s1">java.util.HashMap</span><span class="s0">;</span><span class="s1"> 
</span><span class="s0">import </span><span class="s1">java.util.Map</span><span class="s0">;</span><span class="s1"> 
 
</span><span class="s0">public class </span><span class="s1">Problem21 { 
 
    </span><span class="s0">public static void </span><span class="s1">main(String[] args) { 
        </span><span class="s0">int </span><span class="s1">result = findSumOfAmicableNumbers(</span><span class="s2">10000</span><span class="s1">)</span><span class="s0">;</span><span class="s1"> 
        System.out.println(result)</span><span class="s0">;</span><span class="s1"> 
    } 
 
    </span><span class="s0">public static int </span><span class="s1">findSumOfAmicableNumbers(</span><span class="s0">int </span><span class="s1">n) { 
         
        </span><span class="s0">int </span><span class="s1">result = </span><span class="s2">0</span><span class="s0">;</span><span class="s1"> 
        Map&lt;Integer</span><span class="s0">, </span><span class="s1">Integer&gt; map = </span><span class="s0">new </span><span class="s1">HashMap&lt;&gt;()</span><span class="s0">;</span><span class="s1"> 
         
        </span><span class="s0">for </span><span class="s1">(</span><span class="s0">int </span><span class="s1">i = </span><span class="s2">2</span><span class="s0">; </span><span class="s1">i &lt; n</span><span class="s0">; </span><span class="s1">i++) { 
            </span><span class="s0">int </span><span class="s1">sumOfDivisors = findSumOfDivisors(i)</span><span class="s0">;</span><span class="s1"> 
            </span><span class="s0">if </span><span class="s1">(map.get(sumOfDivisors) != </span><span class="s0">null </span><span class="s1">&amp;&amp; map.get(sumOfDivisors) == i) { 
                result += i + sumOfDivisors</span><span class="s0">;</span><span class="s1"> 
            } 
            </span><span class="s0">else </span><span class="s1">{ 
                map.put(i</span><span class="s0">, </span><span class="s1">sumOfDivisors)</span><span class="s0">;</span><span class="s1"> 
            } 
        } 
 
        </span><span class="s0">return </span><span class="s1">result</span><span class="s0">;</span><span class="s1"> 
    } 
 
    </span><span class="s0">public static int </span><span class="s1">findSumOfDivisors(</span><span class="s0">int </span><span class="s1">n) { 
        </span><span class="s0">int </span><span class="s1">sum = </span><span class="s2">0</span><span class="s0">;</span><span class="s1"> 
        </span><span class="s0">for </span><span class="s1">(</span><span class="s0">int </span><span class="s1">i = </span><span class="s2">1</span><span class="s0">; </span><span class="s1">i &lt; n</span><span class="s0">; </span><span class="s1">i++) { 
            </span><span class="s0">if </span><span class="s1">(n % i == </span><span class="s2">0</span><span class="s1">) { 
                sum += i</span><span class="s0">;</span><span class="s1"> 
            } 
        } 
        </span><span class="s0">return </span><span class="s1">sum</span><span class="s0">;</span><span class="s1"> 
    } 
}</span></pre>
</div>