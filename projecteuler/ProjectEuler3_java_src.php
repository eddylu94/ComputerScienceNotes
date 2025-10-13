<html>
<head>
<title>Problem3.java</title>
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
<span class="s0">import </span><span class="s1">java.util.ArrayList</span><span class="s0">;</span><span class="s1"> 
</span><span class="s0">import </span><span class="s1">java.util.List</span><span class="s0">;</span><span class="s1"> 
 
</span><span class="s0">public class </span><span class="s1">Problem3 { 
 
    </span><span class="s0">public static void </span><span class="s1">main(String[] args) { 
        </span><span class="s0">long </span><span class="s1">result = findLargestPrimeFactor(</span><span class="s2">600851475143L</span><span class="s1">)</span><span class="s0">;</span><span class="s1"> 
        System.out.println(result)</span><span class="s0">;</span><span class="s1"> 
    } 
 
    </span><span class="s0">public static long </span><span class="s1">findLargestPrimeFactor(</span><span class="s0">long </span><span class="s1">n) { 
         
        </span><span class="s0">long </span><span class="s1">result = </span><span class="s2">2</span><span class="s0">;</span><span class="s1"> 
        </span><span class="s0">long </span><span class="s1">d = </span><span class="s2">2</span><span class="s0">;</span><span class="s1"> 
 
        </span><span class="s0">while </span><span class="s1">(n &gt; </span><span class="s2">1</span><span class="s1">) { 
            </span><span class="s0">while </span><span class="s1">(n % d == </span><span class="s2">0</span><span class="s1">) { 
                result = Math.max(result</span><span class="s0">, </span><span class="s1">d)</span><span class="s0">;</span><span class="s1"> 
                n /= d</span><span class="s0">;</span><span class="s1"> 
            } 
            d++</span><span class="s0">;</span><span class="s1"> 
        } 
 
        </span><span class="s0">return </span><span class="s1">result</span><span class="s0">;</span><span class="s1"> 
    } 
}</span></pre>
</div>