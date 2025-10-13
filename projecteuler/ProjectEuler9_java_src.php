<html>
<head>
<title>Problem9.java</title>
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
<span class="s0">public class </span><span class="s1">Problem9 { 
     
    </span><span class="s0">public static void </span><span class="s1">main(String[] args) { 
        </span><span class="s0">int </span><span class="s1">result = findProduct(</span><span class="s2">1000</span><span class="s1">)</span><span class="s0">;</span><span class="s1"> 
        System.out.println(result)</span><span class="s0">;</span><span class="s1"> 
    } 
 
    </span><span class="s0">public static int </span><span class="s1">findProduct(</span><span class="s0">int </span><span class="s1">n) { 
        </span><span class="s0">for </span><span class="s1">(</span><span class="s0">int </span><span class="s1">a = </span><span class="s2">1</span><span class="s0">; </span><span class="s1">a &lt; </span><span class="s2">1000</span><span class="s0">; </span><span class="s1">a++) { 
            </span><span class="s0">for </span><span class="s1">(</span><span class="s0">int </span><span class="s1">b = </span><span class="s2">2</span><span class="s0">; </span><span class="s1">b &lt; </span><span class="s2">1000</span><span class="s0">; </span><span class="s1">b++) { 
                </span><span class="s0">double </span><span class="s1">c = Math.sqrt(a * a + b * b)</span><span class="s0">;</span><span class="s1"> 
                </span><span class="s0">if </span><span class="s1">((c == Math.round(c)) &amp;&amp; (a &lt; b) &amp;&amp; (b &lt; c) &amp;&amp; (a + b + c == n)) { 
                    </span><span class="s0">return </span><span class="s1">a * b * (</span><span class="s0">int</span><span class="s1">)c</span><span class="s0">;</span><span class="s1"> 
                } 
            } 
        } 
        </span><span class="s0">return </span><span class="s1">-</span><span class="s2">1</span><span class="s0">;</span><span class="s1"> 
    } 
}</span></pre>
</div>