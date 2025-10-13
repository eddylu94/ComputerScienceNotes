<html>
<head>
<title>Problem2.java</title>
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
<span class="s0">public class </span><span class="s1">Problem2 { 
 
    </span><span class="s0">public static void </span><span class="s1">main(String[] args) { 
        </span><span class="s0">int </span><span class="s1">result = findSum(</span><span class="s2">4000000</span><span class="s1">)</span><span class="s0">;</span><span class="s1"> 
        System.out.println(result)</span><span class="s0">;</span><span class="s1"> 
    } 
 
    </span><span class="s0">public static int </span><span class="s1">findSum(</span><span class="s0">int </span><span class="s1">n) { 
         
        </span><span class="s0">int </span><span class="s1">currentFib_0 = </span><span class="s2">1</span><span class="s0">;</span><span class="s1"> 
        </span><span class="s0">int </span><span class="s1">currentFib_1 = </span><span class="s2">2</span><span class="s0">;</span><span class="s1"> 
        </span><span class="s0">int </span><span class="s1">evenSum = </span><span class="s2">0</span><span class="s0">;</span><span class="s1"> 
         
        </span><span class="s0">while </span><span class="s1">(currentFib_1 &lt;= n) { 
             
            </span><span class="s0">if </span><span class="s1">(currentFib_1 % </span><span class="s2">2 </span><span class="s1">== </span><span class="s2">0</span><span class="s1">) { 
                evenSum += currentFib_1</span><span class="s0">;</span><span class="s1"> 
            } 
 
            </span><span class="s0">int </span><span class="s1">temp = currentFib_1</span><span class="s0">;</span><span class="s1"> 
            currentFib_1 += currentFib_0</span><span class="s0">;</span><span class="s1"> 
            currentFib_0 = temp</span><span class="s0">;</span><span class="s1"> 
        } 
 
        </span><span class="s0">return </span><span class="s1">evenSum</span><span class="s0">;</span><span class="s1"> 
    } 
}</span></pre>
</div>