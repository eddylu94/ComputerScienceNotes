<html>
<head>
<title>Problem12.java</title>
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
<span class="s0">public class </span><span class="s1">Problem12 { 
 
    </span><span class="s0">public static void </span><span class="s1">main(String[] args) { 
        </span><span class="s0">int </span><span class="s1">result = getTriangleNumber(</span><span class="s2">500</span><span class="s1">)</span><span class="s0">;</span><span class="s1"> 
        System.out.println(result)</span><span class="s0">;</span><span class="s1"> 
    } 
 
    </span><span class="s0">public static int </span><span class="s1">getTriangleNumber(</span><span class="s0">int </span><span class="s1">n) { 
         
        </span><span class="s0">int </span><span class="s1">currentTriangleNumber = </span><span class="s2">0</span><span class="s0">;</span><span class="s1"> 
        </span><span class="s0">int </span><span class="s1">index = </span><span class="s2">1</span><span class="s0">;</span><span class="s1"> 
 
        </span><span class="s0">while </span><span class="s1">(numberOfFactors(currentTriangleNumber) &lt;= n) { 
            currentTriangleNumber += index</span><span class="s0">;</span><span class="s1"> 
            index++</span><span class="s0">;</span><span class="s1"> 
        } 
         
        </span><span class="s0">return </span><span class="s1">currentTriangleNumber</span><span class="s0">;</span><span class="s1"> 
    } 
 
    </span><span class="s0">public static int </span><span class="s1">numberOfFactors(</span><span class="s0">int </span><span class="s1">n) { 
         
        </span><span class="s0">int </span><span class="s1">numberOfFactors = </span><span class="s2">0</span><span class="s0">;</span><span class="s1"> 
         
        </span><span class="s0">for </span><span class="s1">(</span><span class="s0">int </span><span class="s1">i = </span><span class="s2">1</span><span class="s0">; </span><span class="s1">i &lt; Math.sqrt(n)</span><span class="s0">; </span><span class="s1">i++) { 
            </span><span class="s0">if </span><span class="s1">(n % i == </span><span class="s2">0</span><span class="s1">) { 
                numberOfFactors += </span><span class="s2">2</span><span class="s0">;</span><span class="s1"> 
            } 
        } 
        </span><span class="s0">if </span><span class="s1">(Math.sqrt(n) == Math.round(Math.sqrt(n))) { 
            numberOfFactors++</span><span class="s0">;</span><span class="s1"> 
        } 
 
        </span><span class="s0">return </span><span class="s1">numberOfFactors</span><span class="s0">;</span><span class="s1"> 
    } 
}</span></pre>
</div>