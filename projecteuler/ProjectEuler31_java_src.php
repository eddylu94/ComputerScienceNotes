<html>
<head>
<title>Problem31.java</title>
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
<span class="s0">public class </span><span class="s1">Problem31 { 
 
    </span><span class="s0">public static void </span><span class="s1">main(String[] args) { 
        </span><span class="s0">int</span><span class="s1">[] denominations = {</span><span class="s2">1</span><span class="s0">, </span><span class="s2">2</span><span class="s0">, </span><span class="s2">5</span><span class="s0">, </span><span class="s2">10</span><span class="s0">, </span><span class="s2">20</span><span class="s0">, </span><span class="s2">50</span><span class="s0">, </span><span class="s2">100</span><span class="s0">, </span><span class="s2">200</span><span class="s1">}</span><span class="s0">;</span><span class="s1"> 
        </span><span class="s0">int </span><span class="s1">result = findNumberOfCombinations(denominations</span><span class="s0">, </span><span class="s2">200</span><span class="s1">)</span><span class="s0">;</span><span class="s1"> 
        System.out.println(result)</span><span class="s0">;</span><span class="s1"> 
    } 
 
    </span><span class="s0">public static int </span><span class="s1">findNumberOfCombinations(</span><span class="s0">int</span><span class="s1">[] denominations</span><span class="s0">, int </span><span class="s1">amount) { 
        </span><span class="s0">int</span><span class="s1">[] combinations = </span><span class="s0">new int</span><span class="s1">[amount + </span><span class="s2">1</span><span class="s1">]</span><span class="s0">;</span><span class="s1"> 
        combinations[</span><span class="s2">0</span><span class="s1">] = </span><span class="s2">1</span><span class="s0">;</span><span class="s1"> 
        </span><span class="s0">for </span><span class="s1">(</span><span class="s0">int </span><span class="s1">i = </span><span class="s2">0</span><span class="s0">; </span><span class="s1">i &lt; denominations.length</span><span class="s0">; </span><span class="s1">i++) { 
            </span><span class="s0">for </span><span class="s1">(</span><span class="s0">int </span><span class="s1">j = denominations[i]</span><span class="s0">; </span><span class="s1">j &lt;= amount</span><span class="s0">; </span><span class="s1">j++) { 
                combinations[j] += combinations[j - denominations[i]]</span><span class="s0">;</span><span class="s1"> 
            } 
        } 
        </span><span class="s0">return </span><span class="s1">combinations[amount]</span><span class="s0">;</span><span class="s1"> 
    } 
}</span></pre>
</div>