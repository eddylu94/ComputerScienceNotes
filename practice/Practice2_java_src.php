<head>
<title>Practice2.java</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<style type="text/css">
.ln { color: rgb(0,0,0); font-weight: normal; font-style: normal; }
.s0 { color: rgb(128,128,128); }
.s1 { color: rgb(169,183,198); }
.s2 { color: rgb(204,120,50); }
.s3 { color: rgb(104,151,187); }
.s4 { color: rgb(106,135,89); }
</style>
</head>
<div style="background-color: #2b2b2b; padding: 10px;">
<pre>

</span><span class="s2">public class </span><span class="s1">Practice2 { 
 
    </span><span class="s2">public static void </span><span class="s1">main(String[] args) { 
        </span><span class="s2">int </span><span class="s1">a = </span><span class="s3">3</span><span class="s2">;</span><span class="s1"> 
        </span><span class="s2">int </span><span class="s1">b = </span><span class="s3">8</span><span class="s2">;</span><span class="s1"> 
        System.out.println(</span><span class="s4">&quot;Input: &quot; </span><span class="s1">+ a + </span><span class="s4">&quot;,&quot; </span><span class="s1">+ b)</span><span class="s2">;</span><span class="s1"> 
        System.out.println(</span><span class="s4">&quot;Output: &quot; </span><span class="s1">+ findMax(a</span><span class="s2">,</span><span class="s1">b))</span><span class="s2">;</span><span class="s1"> 
    } 
 
    </span><span class="s2">public static int </span><span class="s1">findMax(</span><span class="s2">int </span><span class="s1">a</span><span class="s2">, int </span><span class="s1">b) { 
        </span><span class="s2">int </span><span class="s1">difference = a - b</span><span class="s2">;</span><span class="s1"> 
        </span><span class="s2">int </span><span class="s1">multiplier = (difference &gt;&gt; </span><span class="s3">31</span><span class="s1">) &amp; </span><span class="s3">0x1</span><span class="s2">;</span><span class="s1"> 
        </span><span class="s2">return </span><span class="s1">a - multiplier * difference</span><span class="s2">;</span><span class="s1"> 
    } 
 
}</span></pre>
</div>