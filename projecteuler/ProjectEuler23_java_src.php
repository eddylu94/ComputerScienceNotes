<html>
<head>
<title>Problem23.java</title>
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
</span><span class="s0">import </span><span class="s1">java.util.HashSet</span><span class="s0">;</span><span class="s1"> 
</span><span class="s0">import </span><span class="s1">java.util.List</span><span class="s0">;</span><span class="s1"> 
</span><span class="s0">import </span><span class="s1">java.util.Set</span><span class="s0">;</span><span class="s1"> 
 
</span><span class="s0">public class </span><span class="s1">Problem23 { 
 
    </span><span class="s2">// Set of positive integers that cannot be written as the sum of two abundant numbers</span><span class="s1"> 
    </span><span class="s0">private static </span><span class="s1">Set&lt;Integer&gt; set = </span><span class="s0">new </span><span class="s1">HashSet&lt;&gt;()</span><span class="s0">;</span><span class="s1"> 
 
    </span><span class="s2">// List of abundant numbers</span><span class="s1"> 
    </span><span class="s0">private static </span><span class="s1">List&lt;Integer&gt; abundantNumbers = </span><span class="s0">new </span><span class="s1">ArrayList&lt;Integer&gt;()</span><span class="s0">;</span><span class="s1"> 
 
    </span><span class="s0">public static void </span><span class="s1">main(String[] args) { 
        </span><span class="s0">int </span><span class="s1">result = findSum(</span><span class="s3">28123</span><span class="s1">)</span><span class="s0">;</span><span class="s1"> 
        System.out.println(result)</span><span class="s0">;</span><span class="s1"> 
    } 
 
    </span><span class="s0">public static int </span><span class="s1">findSum(</span><span class="s0">int </span><span class="s1">limit) { 
         
        </span><span class="s0">int </span><span class="s1">sum = </span><span class="s3">0</span><span class="s0">;</span><span class="s1"> 
         
        </span><span class="s0">for </span><span class="s1">(</span><span class="s0">int </span><span class="s1">i = </span><span class="s3">12</span><span class="s0">; </span><span class="s1">i &lt; limit</span><span class="s0">; </span><span class="s1">i++) { 
            </span><span class="s0">if </span><span class="s1">(isAbundantNumber(i)) { 
                abundantNumbers.add(i)</span><span class="s0">;</span><span class="s1"> 
                </span><span class="s0">for </span><span class="s1">(</span><span class="s0">int </span><span class="s1">j = </span><span class="s3">0</span><span class="s0">; </span><span class="s1">j &lt; abundantNumbers.size()</span><span class="s0">; </span><span class="s1">j++) { 
                    </span><span class="s0">int </span><span class="s1">currentSum = abundantNumbers.get(j) + i</span><span class="s0">;</span><span class="s1"> 
                    </span><span class="s0">if </span><span class="s1">(currentSum &lt; limit) { 
                        set.add(currentSum)</span><span class="s0">;</span><span class="s1"> 
                    } 
                } 
            } 
        } 
 
        </span><span class="s0">for </span><span class="s1">(</span><span class="s0">int </span><span class="s1">i = </span><span class="s3">1</span><span class="s0">; </span><span class="s1">i &lt; limit</span><span class="s0">; </span><span class="s1">i++) { 
            </span><span class="s0">if </span><span class="s1">(!set.contains(i)) {                 
                sum += i</span><span class="s0">;</span><span class="s1"> 
            } 
        } 
 
        </span><span class="s0">return </span><span class="s1">sum</span><span class="s0">;</span><span class="s1"> 
    } 
 
    </span><span class="s0">public static boolean </span><span class="s1">isAbundantNumber(</span><span class="s0">int </span><span class="s1">n) { 
         
        </span><span class="s2">// Already include 1 as a proper divisor</span><span class="s1"> 
        </span><span class="s0">int </span><span class="s1">sum = </span><span class="s3">1</span><span class="s0">;</span><span class="s1"> 
         
        </span><span class="s0">for </span><span class="s1">(</span><span class="s0">int </span><span class="s1">i = </span><span class="s3">2</span><span class="s0">; </span><span class="s1">i &lt; Math.sqrt(n)</span><span class="s0">; </span><span class="s1">i++) { 
            </span><span class="s0">if </span><span class="s1">(n % i == </span><span class="s3">0</span><span class="s1">) { 
                sum += i</span><span class="s0">;</span><span class="s1"> 
                sum += n / i</span><span class="s0">;</span><span class="s1"> 
            } 
        } 
        </span><span class="s0">int </span><span class="s1">sqrt = (</span><span class="s0">int</span><span class="s1">)Math.sqrt(n)</span><span class="s0">;</span><span class="s1"> 
        </span><span class="s0">if </span><span class="s1">(Math.pow(sqrt</span><span class="s0">, </span><span class="s3">2</span><span class="s1">) == n) { 
            sum += sqrt</span><span class="s0">;</span><span class="s1"> 
        } 
 
        </span><span class="s0">return </span><span class="s1">sum &gt; n</span><span class="s0">;</span><span class="s1"> 
    } 
}</span></pre>
</div>