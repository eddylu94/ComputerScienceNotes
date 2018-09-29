<html>
<head>
<title>Problem29.java</title>
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
<span class="s0">import </span><span class="s1">java.math.BigInteger</span><span class="s0">;</span><span class="s1"> 
</span><span class="s0">import </span><span class="s1">java.util.HashSet</span><span class="s0">;</span><span class="s1"> 
</span><span class="s0">import </span><span class="s1">java.util.Set</span><span class="s0">;</span><span class="s1"> 
 
</span><span class="s0">public class </span><span class="s1">Problem29 { 
 
    </span><span class="s0">public static void </span><span class="s1">main(String[] args) { 
        </span><span class="s0">int </span><span class="s1">result = findNumberOfTerms(</span><span class="s2">2</span><span class="s0">, </span><span class="s2">100</span><span class="s1">)</span><span class="s0">;</span><span class="s1"> 
        System.out.println(result)</span><span class="s0">;</span><span class="s1"> 
    } 
 
    </span><span class="s0">public static int </span><span class="s1">findNumberOfTerms(</span><span class="s0">int </span><span class="s1">n</span><span class="s0">, int </span><span class="s1">m) { 
        Set&lt;BigInteger&gt; set = </span><span class="s0">new </span><span class="s1">HashSet&lt;&gt;()</span><span class="s0">;</span><span class="s1"> 
        </span><span class="s0">for </span><span class="s1">(</span><span class="s0">int </span><span class="s1">a = n</span><span class="s0">; </span><span class="s1">a &lt;= m</span><span class="s0">; </span><span class="s1">a++) { 
            </span><span class="s0">for </span><span class="s1">(</span><span class="s0">int </span><span class="s1">b = n</span><span class="s0">; </span><span class="s1">b &lt;= m</span><span class="s0">; </span><span class="s1">b++) { 
                set.add((</span><span class="s0">new </span><span class="s1">BigInteger(Integer.toString(a))).pow(b))</span><span class="s0">;</span><span class="s1"> 
            } 
        } 
        </span><span class="s0">return </span><span class="s1">set.size()</span><span class="s0">;</span><span class="s1"> 
    } 
}</span></pre>
</div>