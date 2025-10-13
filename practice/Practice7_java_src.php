<head>
<title>Practice7.java</title>
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

</span><span class="s2">public class </span><span class="s1">Practice7 { 
 
    </span><span class="s2">public static void </span><span class="s1">main(String[] args) { 
        fizzBuzz()</span><span class="s2">;</span><span class="s1"> 
    } 
 
    </span><span class="s2">public static void </span><span class="s1">fizzBuzz() { 
        </span><span class="s2">for </span><span class="s1">(</span><span class="s2">int </span><span class="s1">i = </span><span class="s3">1</span><span class="s2">; </span><span class="s1">i &lt;= </span><span class="s3">100</span><span class="s2">; </span><span class="s1">i++) { 
            </span><span class="s2">if </span><span class="s1">(i % (</span><span class="s3">3 </span><span class="s1">* </span><span class="s3">5</span><span class="s1">) == </span><span class="s3">0</span><span class="s1">) { 
                System.out.print(</span><span class="s4">&quot;FizzBuzz &quot;</span><span class="s1">)</span><span class="s2">;</span><span class="s1"> 
            } 
            </span><span class="s2">else if </span><span class="s1">(i % </span><span class="s3">3 </span><span class="s1">== </span><span class="s3">0</span><span class="s1">) { 
                System.out.print(</span><span class="s4">&quot;Fizz &quot;</span><span class="s1">)</span><span class="s2">;</span><span class="s1"> 
            } 
            </span><span class="s2">else if </span><span class="s1">(i % </span><span class="s3">5 </span><span class="s1">== </span><span class="s3">0</span><span class="s1">) { 
                System.out.print(</span><span class="s4">&quot;Buzz &quot;</span><span class="s1">)</span><span class="s2">;</span><span class="s1"> 
            } 
            </span><span class="s2">else </span><span class="s1">{ 
                System.out.print(i + </span><span class="s4">&quot; &quot;</span><span class="s1">)</span><span class="s2">;</span><span class="s1"> 
            } 
        } 
    } 
 
}</span></pre>
</div>