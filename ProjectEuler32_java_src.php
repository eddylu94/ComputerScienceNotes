<html>
<head>
<title>Problem32.java</title>
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
<span class="s0">import </span><span class="s1">java.util.HashSet</span><span class="s0">;</span><span class="s1"> 
</span><span class="s0">import </span><span class="s1">java.util.Set</span><span class="s0">;</span><span class="s1"> 
 
</span><span class="s0">public class </span><span class="s1">Problem32 { 
 
    </span><span class="s0">public static void </span><span class="s1">main(String[] args) { 
        </span><span class="s0">int </span><span class="s1">result = findSum(</span><span class="s2">9</span><span class="s1">)</span><span class="s0">;</span><span class="s1"> 
        System.out.println(result)</span><span class="s0">;</span><span class="s1"> 
    } 
 
    </span><span class="s0">public static int </span><span class="s1">findSum(</span><span class="s0">int </span><span class="s1">numberOfDigits) { 
        </span><span class="s0">int </span><span class="s1">sum = </span><span class="s2">0</span><span class="s0">;</span><span class="s1"> 
         
        Set&lt;Integer&gt; digits = </span><span class="s0">new </span><span class="s1">HashSet&lt;&gt;()</span><span class="s0">;</span><span class="s1"> 
        </span><span class="s0">for </span><span class="s1">(</span><span class="s0">int </span><span class="s1">i = </span><span class="s2">1</span><span class="s0">; </span><span class="s1">i &lt;= numberOfDigits</span><span class="s0">; </span><span class="s1">i++) { 
            digits.add(i)</span><span class="s0">;</span><span class="s1"> 
        } 
 
        </span><span class="s0">int </span><span class="s1">maxMultiplier = maxMultiplier(numberOfDigits)</span><span class="s0">;</span><span class="s1"> 
        Set&lt;Integer&gt; products = </span><span class="s0">new </span><span class="s1">HashSet&lt;&gt;()</span><span class="s0">;</span><span class="s1"> 
 
        </span><span class="s0">for </span><span class="s1">(</span><span class="s0">int </span><span class="s1">i = </span><span class="s2">1</span><span class="s0">; </span><span class="s1">i &lt;= maxMultiplier</span><span class="s0">; </span><span class="s1">i++) { 
            </span><span class="s0">for </span><span class="s1">(</span><span class="s0">int </span><span class="s1">j = </span><span class="s2">1</span><span class="s0">; </span><span class="s1">j &lt;= maxMultiplier</span><span class="s0">; </span><span class="s1">j++) { 
                </span><span class="s0">int </span><span class="s1">product</span><span class="s0">;</span><span class="s1"> 
                </span><span class="s0">if </span><span class="s1">(!products.contains(product = i * j) &amp;&amp; isPandigital(i</span><span class="s0">, </span><span class="s1">j</span><span class="s0">, new </span><span class="s1">HashSet&lt;&gt;(digits))) { 
                    products.add(product)</span><span class="s0">;</span><span class="s1"> 
                    sum += product</span><span class="s0">;</span><span class="s1"> 
                } 
            } 
        } 
 
        </span><span class="s0">return </span><span class="s1">sum</span><span class="s0">;</span><span class="s1"> 
    } 
 
    </span><span class="s0">public static boolean </span><span class="s1">isPandigital(</span><span class="s0">int </span><span class="s1">i</span><span class="s0">, int </span><span class="s1">j</span><span class="s0">, </span><span class="s1">Set&lt;Integer&gt; digits) { 
        </span><span class="s0">int </span><span class="s1">product = i * j</span><span class="s0">;</span><span class="s1"> 
        </span><span class="s0">return </span><span class="s1">isValid(i</span><span class="s0">, </span><span class="s1">digits) &amp;&amp; isValid(j</span><span class="s0">, </span><span class="s1">digits) &amp;&amp; isValid(product</span><span class="s0">, </span><span class="s1">digits) &amp;&amp; digits.size() == </span><span class="s2">0</span><span class="s0">;</span><span class="s1"> 
    } 
 
    </span><span class="s0">public static boolean </span><span class="s1">isValid(</span><span class="s0">int </span><span class="s1">n</span><span class="s0">, </span><span class="s1">Set&lt;Integer&gt; remainingDigits) { 
        </span><span class="s0">while </span><span class="s1">(n &gt; </span><span class="s2">0</span><span class="s1">) { 
            </span><span class="s0">int </span><span class="s1">digit = n % </span><span class="s2">10</span><span class="s0">;</span><span class="s1"> 
            </span><span class="s0">if </span><span class="s1">(!remainingDigits.contains(digit)) { 
                </span><span class="s0">return false;</span><span class="s1"> 
            } 
            remainingDigits.remove(digit)</span><span class="s0">;</span><span class="s1"> 
            n /= </span><span class="s2">10</span><span class="s0">;</span><span class="s1"> 
        }         
        </span><span class="s0">return true;</span><span class="s1"> 
    } 
 
    </span><span class="s0">public static int </span><span class="s1">maxMultiplierNumberOfDigits(</span><span class="s0">int </span><span class="s1">numberOfDigits) { 
        </span><span class="s0">return </span><span class="s1">(numberOfDigits % </span><span class="s2">2 </span><span class="s1">!= </span><span class="s2">0</span><span class="s1">) ? ((numberOfDigits - </span><span class="s2">1</span><span class="s1">) / </span><span class="s2">2</span><span class="s1">) : (numberOfDigits / </span><span class="s2">2</span><span class="s1">)</span><span class="s0">;</span><span class="s1"> 
    } 
     
    </span><span class="s0">public static int </span><span class="s1">maxMultiplier(</span><span class="s0">int </span><span class="s1">numberOfDigits) { 
        </span><span class="s0">int </span><span class="s1">maxMultiplierNumberOfDigits = maxMultiplierNumberOfDigits(numberOfDigits)</span><span class="s0">;</span><span class="s1"> 
        </span><span class="s0">int </span><span class="s1">maxMultiplier = </span><span class="s2">0</span><span class="s0">;</span><span class="s1"> 
        </span><span class="s0">for </span><span class="s1">(</span><span class="s0">int </span><span class="s1">i = </span><span class="s2">0</span><span class="s0">; </span><span class="s1">i &lt; maxMultiplierNumberOfDigits</span><span class="s0">; </span><span class="s1">i++) { 
            maxMultiplier = maxMultiplier * </span><span class="s2">10 </span><span class="s1">+ (</span><span class="s2">9 </span><span class="s1">- i)</span><span class="s0">;</span><span class="s1"> 
        } 
        </span><span class="s0">return </span><span class="s1">maxMultiplier</span><span class="s0">;</span><span class="s1"> 
    } 
}</span></pre>
</div>