<html>
<head>
<title>Problem6.java</title>
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
<span class="s0">public class </span><span class="s1">Problem6 { 
     
    </span><span class="s0">public static void </span><span class="s1">main(String[] args) { 
        </span><span class="s0">int </span><span class="s1">result = findDifference(</span><span class="s2">100</span><span class="s1">)</span><span class="s0">;</span><span class="s1"> 
        System.out.println(result)</span><span class="s0">;</span><span class="s1"> 
    } 
 
    </span><span class="s0">public static int </span><span class="s1">findDifference(</span><span class="s0">int </span><span class="s1">n) { 
         
        </span><span class="s0">int </span><span class="s1">sumOfSquares = </span><span class="s2">0</span><span class="s0">;</span><span class="s1"> 
        </span><span class="s0">int </span><span class="s1">sum = </span><span class="s2">0</span><span class="s0">; </span><span class="s3">// for squareOfSums</span><span class="s1"> 
 
        </span><span class="s0">for </span><span class="s1">(</span><span class="s0">int </span><span class="s1">i = </span><span class="s2">1</span><span class="s0">; </span><span class="s1">i &lt;= n</span><span class="s0">; </span><span class="s1">i++) { 
            sumOfSquares += (</span><span class="s0">int</span><span class="s1">)Math.pow(i</span><span class="s0">, </span><span class="s2">2</span><span class="s1">)</span><span class="s0">;</span><span class="s1"> 
            sum += i</span><span class="s0">;</span><span class="s1"> 
        } 
        </span><span class="s0">int </span><span class="s1">squareOfSums = (</span><span class="s0">int</span><span class="s1">)Math.pow(sum</span><span class="s0">, </span><span class="s2">2</span><span class="s1">)</span><span class="s0">;</span><span class="s1"> 
 
        </span><span class="s0">return </span><span class="s1">squareOfSums - sumOfSquares</span><span class="s0">;</span><span class="s1"> 
    } 
}</span></pre>
</div>