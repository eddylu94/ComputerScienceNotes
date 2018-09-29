<html>
<head>
<title>Problem15.java</title>
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
 
</span><span class="s0">public class </span><span class="s1">Problem15 { 
 
    </span><span class="s0">public static void </span><span class="s1">main(String[] args) { 
        </span><span class="s0">long </span><span class="s1">result = findNumberOfRoutes(</span><span class="s2">20</span><span class="s1">)</span><span class="s0">;</span><span class="s1"> 
        System.out.println(result)</span><span class="s0">;</span><span class="s1"> 
    } 
 
    </span><span class="s0">public static long </span><span class="s1">findNumberOfRoutes(</span><span class="s0">int </span><span class="s1">n) { 
        </span><span class="s0">return </span><span class="s1">(factorial(</span><span class="s2">2 </span><span class="s1">* n).divide(factorial(n).multiply(factorial(n)))).longValue()</span><span class="s0">;</span><span class="s1"> 
    } 
 
    </span><span class="s0">public static </span><span class="s1">BigInteger factorial(</span><span class="s0">int </span><span class="s1">n) { 
        BigInteger result = </span><span class="s0">new </span><span class="s1">BigInteger(Integer.toString(</span><span class="s2">1</span><span class="s1">))</span><span class="s0">;</span><span class="s1"> 
        </span><span class="s0">for </span><span class="s1">(</span><span class="s0">int </span><span class="s1">i = n</span><span class="s0">; </span><span class="s1">i &gt; </span><span class="s2">1</span><span class="s0">; </span><span class="s1">i--) { 
            result = result.multiply(</span><span class="s0">new </span><span class="s1">BigInteger(Integer.toString(i)))</span><span class="s0">;</span><span class="s1"> 
        } 
        </span><span class="s0">return </span><span class="s1">result</span><span class="s0">;</span><span class="s1"> 
    } 
}</span></pre>
</div>