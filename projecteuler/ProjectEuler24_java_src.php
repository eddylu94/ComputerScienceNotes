<html>
<head>
<title>Problem24.java</title>
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
</span><span class="s0">import </span><span class="s1">java.util.Arrays</span><span class="s0">;</span><span class="s1"> 
</span><span class="s0">import </span><span class="s1">java.util.List</span><span class="s0">;</span><span class="s1"> 
 
</span><span class="s0">public class </span><span class="s1">Problem24 { 
 
    </span><span class="s0">private static int </span><span class="s1">remaining</span><span class="s0">;</span><span class="s1"> 
    </span><span class="s0">private static long </span><span class="s1">permutation = </span><span class="s2">0</span><span class="s0">;</span><span class="s1"> 
 
    </span><span class="s0">public static void </span><span class="s1">main(String[] args) { 
        </span><span class="s0">int</span><span class="s1">[] digits = {</span><span class="s2">0</span><span class="s0">, </span><span class="s2">1</span><span class="s0">, </span><span class="s2">2</span><span class="s0">, </span><span class="s2">3</span><span class="s0">, </span><span class="s2">4</span><span class="s0">, </span><span class="s2">5</span><span class="s0">, </span><span class="s2">6</span><span class="s0">, </span><span class="s2">7</span><span class="s0">, </span><span class="s2">8</span><span class="s0">, </span><span class="s2">9</span><span class="s1">}</span><span class="s0">;</span><span class="s1"> 
         
        List&lt;Integer&gt; list = </span><span class="s0">new </span><span class="s1">ArrayList&lt;&gt;()</span><span class="s0">;</span><span class="s1"> 
        </span><span class="s0">for </span><span class="s1">(</span><span class="s0">int </span><span class="s1">i = </span><span class="s2">0</span><span class="s0">; </span><span class="s1">i &lt; digits.length</span><span class="s0">; </span><span class="s1">i++) { 
            list.add(digits[i])</span><span class="s0">;</span><span class="s1"> 
        } 
 
        </span><span class="s0">long </span><span class="s1">result = findPermutation(digits</span><span class="s0">, </span><span class="s2">1000000</span><span class="s1">)</span><span class="s0">;</span><span class="s1"> 
        System.out.println(result)</span><span class="s0">;</span><span class="s1"> 
    } 
 
    </span><span class="s0">public static long </span><span class="s1">findPermutation(</span><span class="s0">int</span><span class="s1">[] digits</span><span class="s0">, int </span><span class="s1">n) { 
         
        List&lt;Integer&gt; list = </span><span class="s0">new </span><span class="s1">ArrayList&lt;&gt;()</span><span class="s0">;</span><span class="s1"> 
        </span><span class="s0">for </span><span class="s1">(</span><span class="s0">int </span><span class="s1">i = </span><span class="s2">0</span><span class="s0">; </span><span class="s1">i &lt; digits.length</span><span class="s0">; </span><span class="s1">i++) { 
            list.add(digits[i])</span><span class="s0">;</span><span class="s1"> 
        } 
 
        remaining = n</span><span class="s0">;</span><span class="s1"> 
        </span><span class="s0">int </span><span class="s1">startValue = findStartValue(n)</span><span class="s0">;</span><span class="s1"> 
 
        </span><span class="s0">for </span><span class="s1">(</span><span class="s0">int </span><span class="s1">i = startValue</span><span class="s0">; </span><span class="s1">i &gt;= </span><span class="s2">1</span><span class="s0">; </span><span class="s1">i--) { 
 
            </span><span class="s0">int </span><span class="s1">factorial = factorial(i)</span><span class="s0">;</span><span class="s1"> 
            </span><span class="s0">if </span><span class="s1">(remaining % factorial == </span><span class="s2">0</span><span class="s1">) { 
                </span><span class="s0">break;</span><span class="s1"> 
            } 
 
            </span><span class="s0">int </span><span class="s1">quotient = remaining / factorial</span><span class="s0">;</span><span class="s1"> 
            remaining -= factorial * quotient</span><span class="s0">;</span><span class="s1"> 
 
            permutation *= </span><span class="s2">10</span><span class="s0">;</span><span class="s1"> 
            permutation += list.get(quotient)</span><span class="s0">;</span><span class="s1"> 
            list.remove(quotient)</span><span class="s0">;</span><span class="s1"> 
        } 
 
        findRemainingPermutation(list)</span><span class="s0">;</span><span class="s1"> 
 
        </span><span class="s0">return </span><span class="s1">permutation</span><span class="s0">;</span><span class="s1"> 
    } 
 
    </span><span class="s0">public static void </span><span class="s1">findRemainingPermutation(List&lt;Integer&gt; list) { 
        String s = </span><span class="s3">&quot;&quot;</span><span class="s0">;</span><span class="s1"> 
        </span><span class="s0">for </span><span class="s1">(</span><span class="s0">int </span><span class="s1">i = </span><span class="s2">0</span><span class="s0">; </span><span class="s1">i &lt; list.size()</span><span class="s0">; </span><span class="s1">i++) { 
            s += list.get(i).toString()</span><span class="s0">;</span><span class="s1"> 
        } 
        permute(</span><span class="s3">&quot;&quot;</span><span class="s0">, </span><span class="s1">s)</span><span class="s0">;</span><span class="s1"> 
    } 
 
    </span><span class="s0">public static void </span><span class="s1">permute(String prefix</span><span class="s0">, </span><span class="s1">String s) { 
        </span><span class="s0">if </span><span class="s1">(s.length() == </span><span class="s2">0</span><span class="s1">) { 
            remaining--</span><span class="s0">;</span><span class="s1"> 
            </span><span class="s0">if </span><span class="s1">(remaining == </span><span class="s2">0</span><span class="s1">) { 
                permutation *= Math.pow(</span><span class="s2">10</span><span class="s0">, </span><span class="s1">prefix.length())</span><span class="s0">;</span><span class="s1"> 
                System.out.println(permutation)</span><span class="s0">;</span><span class="s1"> 
                permutation += Integer.parseInt(prefix)</span><span class="s0">;</span><span class="s1"> 
            } 
        } 
        </span><span class="s0">for </span><span class="s1">(</span><span class="s0">int </span><span class="s1">i = </span><span class="s2">0</span><span class="s0">; </span><span class="s1">i &lt; s.length()</span><span class="s0">; </span><span class="s1">i++) { 
            permute(prefix + s.charAt(i)</span><span class="s0">, </span><span class="s1">s.substring(</span><span class="s2">0</span><span class="s0">, </span><span class="s1">i) + s.substring(i + </span><span class="s2">1</span><span class="s0">, </span><span class="s1">s.length()))</span><span class="s0">;</span><span class="s1"> 
        } 
    } 
 
    </span><span class="s0">public static int </span><span class="s1">findMostSignificantDigit(</span><span class="s0">int </span><span class="s1">n) { 
        </span><span class="s0">while </span><span class="s1">(n &gt; </span><span class="s2">10</span><span class="s1">) { 
            n /= </span><span class="s2">10</span><span class="s0">;</span><span class="s1"> 
        } 
        </span><span class="s0">return </span><span class="s1">n</span><span class="s0">;</span><span class="s1"> 
    } 
     
    </span><span class="s0">public static int </span><span class="s1">findStartValue(</span><span class="s0">int </span><span class="s1">n) { 
        </span><span class="s0">int </span><span class="s1">currentValue = </span><span class="s2">1</span><span class="s0">;</span><span class="s1"> 
        </span><span class="s0">while </span><span class="s1">(factorial(currentValue + </span><span class="s2">1</span><span class="s1">) &lt;= n) { 
            currentValue++</span><span class="s0">;</span><span class="s1"> 
        } 
        </span><span class="s0">return </span><span class="s1">currentValue</span><span class="s0">;</span><span class="s1"> 
    } 
 
    </span><span class="s0">public static int </span><span class="s1">factorial(</span><span class="s0">int </span><span class="s1">n) { 
        </span><span class="s0">if </span><span class="s1">(n == </span><span class="s2">1</span><span class="s1">) { 
            </span><span class="s0">return </span><span class="s1">n</span><span class="s0">;</span><span class="s1"> 
        } 
        </span><span class="s0">return </span><span class="s1">n * factorial(n - </span><span class="s2">1</span><span class="s1">)</span><span class="s0">;</span><span class="s1"> 
    } 
}</span></pre>
</div>