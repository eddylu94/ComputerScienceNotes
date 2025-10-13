<html>
<head>
<title>Problem10.java</title>
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
<span class="s0">public class </span><span class="s1">Problem10 { 
     
    </span><span class="s0">public static void </span><span class="s1">main(String[] args) { 
        </span><span class="s0">long </span><span class="s1">result = findSum(</span><span class="s2">2000000</span><span class="s1">)</span><span class="s0">;</span><span class="s1"> 
        System.out.println(result)</span><span class="s0">;</span><span class="s1"> 
    } 
 
    </span><span class="s0">public static long </span><span class="s1">findSum(</span><span class="s0">int </span><span class="s1">n) { 
        </span><span class="s0">long </span><span class="s1">sum = </span><span class="s2">0</span><span class="s0">;</span><span class="s1"> 
        </span><span class="s0">for </span><span class="s1">(</span><span class="s0">int </span><span class="s1">i = </span><span class="s2">2</span><span class="s0">; </span><span class="s1">i &lt; n</span><span class="s0">; </span><span class="s1">i++) { 
            </span><span class="s0">if </span><span class="s1">(isPrime(i)) { 
                sum += i</span><span class="s0">;</span><span class="s1"> 
            } 
        } 
        </span><span class="s0">return </span><span class="s1">sum</span><span class="s0">;</span><span class="s1"> 
    } 
 
    </span><span class="s0">public static boolean </span><span class="s1">isPrime(</span><span class="s0">int </span><span class="s1">n) { 
        </span><span class="s0">for </span><span class="s1">(</span><span class="s0">int </span><span class="s1">i = </span><span class="s2">2</span><span class="s0">; </span><span class="s1">i &lt;= Math.sqrt(n)</span><span class="s0">; </span><span class="s1">i++) { 
            </span><span class="s0">if </span><span class="s1">(n % i == </span><span class="s2">0</span><span class="s1">) { 
                </span><span class="s0">return false;</span><span class="s1"> 
            } 
        } 
        </span><span class="s0">return true;</span><span class="s1"> 
    } 
}</span></pre>
</div>